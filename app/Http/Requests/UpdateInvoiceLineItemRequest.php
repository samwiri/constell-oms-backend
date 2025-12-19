<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class UpdateInvoiceLineItemRequest extends FormRequest
{

    use AutoBodyParameters;
   
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {
        return [
            'description' => 'sometimes|string|max:255',
            'quantity'    => 'sometimes|integer|min:1',
            'unit_price'  => 'sometimes|numeric|min:0',
        ];
    }
}
