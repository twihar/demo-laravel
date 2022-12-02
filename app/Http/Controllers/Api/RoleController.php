<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Services\UserService;

class RoleController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        try {
            return $this->userService->getRoles();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function permissions()
    {
        try {
            return $this->userService->getPermissions();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function store(RoleRequest $request)
    {
        try {
            return $this->userService->storeRole($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(RoleRequest $request)
    {
        try {
            return $this->userService->updateRole($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function destroy($id)
    {
        try {
            return $this->userService->deleteRole($id);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
