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
        'code' => [
            'sometimes',
                Rule::unique('warehouse_locations', 'code')
                    ->ignore($this->route('id')), // or route model binding
            ],
            'zone'    => 'sometimes|string',
            'rack'    => 'sometimes|string',
            'bay'     => 'sometimes|string',
            'shelf'   => 'sometimes|string',
            'name'    => 'sometimes|string',
            'country' => 'sometimes|string',
        ];
    }
}
