<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends StoreUserRequest
{
   
    public function rules (): array {

        $rules = parent::rules();

        $rules['password'] = [
            'nullable',
            'min:6',
            'max:20',
        ];

        return $rules;

    }
    
}
