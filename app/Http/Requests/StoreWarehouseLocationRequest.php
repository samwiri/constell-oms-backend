<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class StoreWarehouseLocationRequest extends FormRequest
{

    use AutoBodyParameters;
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
           'code'=>'required|unique:warehouse_locations',
           'address'=>'nullable|string',
           'manager'=>'nullable|string',
           'active' => 'sometimes|boolean',
           'rack_count' => 'nullable|numeric',
           'name' => 'nullable|string',
           'country' => 'nullable|string'
        ];
    }
}
