<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadFile\UploadImageRequest;
use App\Http\Requests\UploadFile\UploadPdfRequest;
use App\Http\Requests\UploadImagePdfRequest;
use App\Services\UploadFileService;

class UploadFileController extends Controller
{
    protected $uploadFileService;

    public function __construct(UploadFileService $uploadFileService)
    {
        $this->uploadFileService = $uploadFileService;
    }

    public function uploadImage(UploadImageRequest $request)
    {
        try {
            return $this->uploadFileService->handleUploadImage($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function uploadPdf(UploadPdfRequest $request)
    {
        try {
            return $this->uploadFileService->handleUploadPdf($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function uploadImagePdf(UploadImagePdfRequest $request)
    {
        try {
            return $this->uploadFileService->handleUploadImagePdf($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
