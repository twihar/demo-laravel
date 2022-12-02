<?php

namespace App\Traits;


trait UploadFile
{
    public function uploadSimpleFile($value, $folder)
    {
        $fileName = md5(uniqid()) . '.' . $value->getClientOriginalExtension();
        $path = '/uploads/' . $folder . '/';
        $value->move(public_path('uploads/' . $folder), $fileName);
        return $path . $fileName;
    }

    public function uploadBase64Image($value, $folder)
    {
        $folderPath = public_path() . '/uploads/' . $folder . '/';
        $image_base64 = base64_decode($value);
        $path = md5(uniqid()) . '.jpg';
        $file = $folderPath . $path;
        file_put_contents($file, $image_base64);
        return '/uploads/' . $folder . '/' . $path;
    }
}
