<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateWarehouseLocationRequest extends FormRequest
{

    use AutoBodyParameters;
    
    public function authorize(): bool
    {
        return true;
    }

     
    public function rules(): array
    {
        return [
            'code'         => 'sometimes|string',                
            'address'      => 'sometimes|string',
            'manager'      => 'sometimes|string',
            'active'       => 'sometimes|boolean',
            'rack_count'   => 'sometimes|string',
            'name'         => 'sometimes|string',
            'country'      => 'sometimes|string',
        ];
    }
}
