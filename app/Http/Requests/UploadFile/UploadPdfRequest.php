<?php

namespace App\Http\Requests\UploadFile;

use Illuminate\Foundation\Http\FormRequest;

class UploadPdfRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pdf' => 'required|mimes:pdf|max:2048'
        ];
    }
}
