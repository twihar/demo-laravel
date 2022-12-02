<?php

namespace App\Services;

use App\Models\User;
use App\Traits\ApiResponse;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserService
{
    use ApiResponse, UploadFile;

    /********Roles********/

    public function getRoles()
    {
        $data = Role::query()
            ->with(['permissions'])
            ->get()
            ->map(function ($el) {
                $el['array_permissions'] = collect($el['permissions'])->pluck('name');
                return $el;
            })->makeHidden('permissions');

        return $this->successResponse($data);
    }

    public function getPermissions()
    {
        $data = Permission::query()
            ->get()
            ->groupBy('key');

        return $this->successResponse($data);
    }

    public function storeRole(Request $request)
    {
        $role = Role::create([
            'name' => $request->name,
        ]);
        $role->givePermissionTo($request->permissions);

        return $this->successResponse();
    }

    public function updateRole(Request $request)
    {
        $role = Role::find($request->id);
        if ($role->name !== 'Super administrateur') {
            $role->update([
                'name' => $request->name,
            ]);

            $role->syncPermissions($request->permissions);

            /**Delete token for all users have this role**/
            $users = User::whereHas("roles", function ($q) use ($request) {
                $q->where("id", $request->id);
            })->get();
            foreach ($users as $user) {
                $user->tokens()->delete();
            }

            return $this->successResponse();
        } else {
            return $this->errorResponse('Unable to update this role.', null, 403);
        }
    }

    public function deleteRole($id)
    {
        $role = Role::find($id);

        if ($role->name !== 'Super administrateur') {
            $role->delete();
            /**Delete token for all users have this role**/
            $users = User::whereHas("roles", function ($q) use ($id) {
                $q->where("id", $id);
            })->get();
            foreach ($users as $user) {
                $user->tokens()->delete();
            }

            return $this->successResponse();
        } else {
            return $this->errorResponse('Unable to delete this role.', null, 403);
        }
    }

    /*********Users**********/

    public function getUsers()
    {
        $data = User::query()
            ->where('is_admin', false)
            ->with('roles.permissions')
            ->latest()
            ->get();

        return $this->successResponse($data);
    }

    public function storeUser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request->image,
        ]);

        $user->assignRole($request->role_id);

        return $this->successResponse();
    }

    public function updateUser(Request $request)
    {
        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'image' => $request->image,
        ]);

        $user->syncRoles([$request->role_id]);
        $user->tokens()->delete();

        return $this->successResponse();
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->tokens()->delete();
        $user->delete();

        return $this->successResponse();
    }


    public function changeUserStatus(Request $request)
    {
        $user = User::find($request->id);
        $user->update([
            'is_active' => !$user->is_active
        ]);
        $user->tokens()->delete();

        return $this->successResponse();
    }

}


