<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserRequest extends FormRequest
{
     
    public function authorize(): bool
    {
        return true;
    }

     
    public function rules(): array
    {
        
        // $user = Auth::user();

        return [
            'full_name' => 'sometimes|string|max:255',
            'phone'     => 'sometimes|string|max:20|unique:users,phone,' . $this->id,
            'tin'       => 'sometimes|string|max:50',
            'passport'  => 'sometimes|string|max:50',
            'address'   => 'sometimes|string|max:255',
        ];

    }
}
