<?php

namespace App\Traits;


use App\Models\LogError;

trait ApiResponse
{

    public function successResponse($data = [], $message = null, $code = 200)
    {
        $response = ['success' => true];

        if (!empty($data)) {
            $response['data'] = $data;
        }

        if (!empty($message)) {
            $response['message'] = $message;
        }

        return response()->json($response, $code);
    }

    public function errorResponse($message = null, $data = [], $code = 400)
    {
        $response = ['success' => false];

        if (!empty($data)) {
            $response['data'] = $data;
        }

        if (!empty($message)) {
            $response['message'] = $message;
        }

        return response()->json($response, $code);
    }

    public function serverError($exception = null, $source = "web", $code = 500)
    {
        $response = [
            'success' => false,
            'message' => env('APP_DEBUG') ? $exception->getMessage() : null,
            'file' => env('APP_DEBUG') ? $exception->getFile() : null,
            'line' => env('APP_DEBUG') ? $exception->getLine() : null,
        ];

        LogError::create([
            'source' => $source,
            'message' => $exception->getMessage(),
            'line' => $exception->getLine(),
            'file' => $exception->getFile(),
            'request' => request()->all(),
        ]);

        return response()->json($response, $code);
    }

    public function successResponseJson($json)
    {
        return response()->json($json);
    }

    public function errorResponseJson($errors, $code = 400)
    {
        $errors['success'] = false;
        return response()->json($errors, $code);
    }

}
