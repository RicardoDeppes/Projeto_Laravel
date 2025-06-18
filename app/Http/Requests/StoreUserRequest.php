<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    
    public function authorize (): bool {

        return true;

    }

    
    public function rules (): array {

        return [
            'name' => 'required|string|min:3|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->user, 'id')
            ],
            'password' => [
                'required',
                'min:6',
                'max:20',
            ]
        ];

    }

}
