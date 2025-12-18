<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWarehouseLocationRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

     
    public function rules(): array
    {
        return [
           'code'   =>'sometimes|unique:warehouse_locations,code,'.$this->id,
           'zone'   =>'sometimes|string',
           'rack'   =>'sometimes|string',
           'bay'    =>'sometimes|string',
           'shelf'  =>'sometimes|string',
           'name'  =>'sometimes|string',
           'country'  =>'sometimes|string',
        ];
    }
}
