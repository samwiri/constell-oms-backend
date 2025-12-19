<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssistedShoppingQuoteRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {     
        return [
            'item_name' => 'sometimes',
            'quantity'  => 'sometimes|numeric',
            'unit_price' => 'sometimes|numeric',
        ];
    }
}
