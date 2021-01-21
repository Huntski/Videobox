<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:40',
            'email' => 'required|email|unique:users,email,'.$this->user->id,
            'password' => 'nullable|string|min:3|max:40',
            'avatar' => 'nullable|image'
        ];
    }
}
