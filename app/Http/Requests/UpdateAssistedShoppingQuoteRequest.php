<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAssistedShoppingQuoteRequest extends FormRequest
{

    use AutoBodyParameters;
    
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
