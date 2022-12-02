<?php

namespace App\Services;

use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    use ApiResponse;

    public function handleLogin(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && !$user->status) {
            return $this->errorResponse(trans('auth.failed'));
        }

        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->errorResponse(trans('auth.failed'));
        } else {
            $user['token'] = $user->createToken('token')->plainTextToken;
            return $this->successResponse($user);
        }
    }

    public function handleLogout()
    {
        $user = User::find(Auth::id());
        $user->tokens()->delete();
        return $this->successResponse();
    }

}
