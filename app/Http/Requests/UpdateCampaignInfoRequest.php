<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCampaignInfoRequest extends FormRequest
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
            'name.ar' => in_array('ar', request('lang')) ? 'required|min:2|max:191|string' : 'nullable',
            'name.fr' => in_array('fr', request('lang')) ? 'required|min:2|max:191|string' : 'nullable',
            'name.en' => in_array('en', request('lang')) ? 'required|min:2|max:191|string' : 'nullable',
            'photo' => 'nullable',
        ];
    }
}
