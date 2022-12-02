<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        try {
            return $this->userService->getUsers();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }


    public function store(UserRequest $request)
    {
        try {
            return $this->userService->storeUser($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(UserRequest $request)
    {
        try {
            return $this->userService->updateUser($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function destroy($id)
    {
        try {
            return $this->userService->deleteUser($id);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }


    public function changeStatus(Request $request)
    {
        try {
            return $this->userService->changeUserStatus($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
