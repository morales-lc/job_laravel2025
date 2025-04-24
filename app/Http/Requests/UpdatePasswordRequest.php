<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8|different:old_password',
            'confirm_password' => 'required|string|same:new_password',
        ];
    }

    public function messages()
    {
        return [
            'confirm_password.same' => 'New passwords do not match.',
            'new_password.different' => 'New password must be different from the old password.'
        ];
    }
}
