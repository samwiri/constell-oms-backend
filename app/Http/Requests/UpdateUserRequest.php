<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserRequest extends FormRequest
{

    use AutoBodyParameters;
     
    public function authorize(): bool
    {
        return true;
    }

     
    public function rules(): array
    {  

        $id = $this->route('id');

        return [
            'full_name' => 'sometimes|string|max:255',
            'phone'     => 'sometimes|string|max:20|unique:users,phone,' . $id,
            'tin'       => 'sometimes|string|max:50',
            'passport'  => 'sometimes|string|max:50',
            'address'   => 'sometimes|string|max:255',
        ];

    }
}
