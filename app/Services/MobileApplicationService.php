<?php

namespace App\Services;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class MobileApplicationService
{
    use ApiResponse;

    public function handleLogin(Request $request)
    {
        return true;  //TODO
    }

    public function handleRegister(Request $request)
    {
        return true;  //TODO
    }

    public function handleLogout()
    {
        return true;  //TODO
    }

    public function me()
    {
        return true;  //TODO
    }

}
