<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductExcelRequest extends FormRequest
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
            'code_position' => 'required|alpha|max:2',
            'name_position' => 'required|alpha|max:2',
            'category_position' => 'required|alpha|max:2',
            'sub_category_position' => 'required|alpha|max:2',
            'brand_position' => 'required|alpha|max:2',
            'description_position' => 'nullable|alpha|max:2',
            'file' => 'required|mimes:xlsx,xls',
        ];
    }
}
