<?php

namespace App\Services;

use App\Traits\UploadFile;
use Illuminate\Http\Request;

class UploadFileService
{
    use UploadFile;

    public function handleUploadImage(Request $request)
    {
        return $request->hasFile('image') ? $this->uploadSimpleFile($request->image, 'images') : '';
    }

    public function handleUploadPdf(Request $request)
    {
        return $request->hasFile('pdf') ? $this->uploadSimpleFile($request->pdf, 'pdf') : '';
    }

    public function handleUploadImagePdf(Request $request)
    {
        return $request->hasFile('file') ? $this->uploadSimpleFile($request->file, 'imagePdf') : '';
    }
}


