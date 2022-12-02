<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\MobileApplicationService;
use Illuminate\Http\Request;

class MobileApplicationController extends Controller
{

    protected $mobileAppService;

    public function __construct(MobileApplicationService $mobileAppService)
    {
        $this->mobileAppService = $mobileAppService;
    }

    public function login(Request $request)
    {
        try {
            return $this->mobileAppService->handleLogin($request);
        } catch (\Exception $e) {
            return $this->serverError($e, 'mobile');
        }
    }

    public function register(Request $request)
    {
        try {
            return $this->mobileAppService->handleRegister($request);
        } catch (\Exception $e) {
            return $this->serverError($e, 'mobile');
        }
    }

    public function logout()
    {
        try {
            return $this->mobileAppService->handleLogout();
        } catch (\Exception $e) {
            return $this->serverError($e, 'mobile');
        }
    }

    public function me()
    {
        try {
            return $this->mobileAppService->me();
        } catch (\Exception $e) {
            return $this->serverError($e, 'mobile');
        }
    }
}
