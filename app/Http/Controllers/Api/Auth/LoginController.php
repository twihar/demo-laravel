<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthService;


class LoginController extends Controller
{

    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $request)
    {
        try {
            return $this->authService->handleLogin($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function logout()
    {
        try {
            return $this->authService->handleLogout();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
