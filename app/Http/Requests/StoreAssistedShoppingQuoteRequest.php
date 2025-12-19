<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssistedShoppingQuoteRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'item_name' => 'required',
            'quantity'  => 'required|numeric',
            'unit_price' => 'required|numeric',
            'assisted_shopping_id'=>'required|exists:assisted_shoppings,id',
        ];
    }
}
 
