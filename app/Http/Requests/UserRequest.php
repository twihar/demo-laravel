<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'role_id' => 'required|exists:roles,id',
            'name' => 'required|min:4|max:191',
            'image' => 'nullable',
            'email' => 'required|email|unique:users,email,' . $this->id,
            'password' => $this->id ? 'nullable|min:8|max:50' : 'required|min:8|max:50',
        ];
    }
}
