<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWarehouseLocationRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
           'code'=>'required|unique:warehouse_locations',
           'zone'=>'nullable|string',
           'rack'=>'nullable|string',
           'bay' => 'nullable|string',
           'shelf' => 'nullable|string',
        ];
    }
}
