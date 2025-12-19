<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceLineItemRequest extends FormRequest
{

    use AutoBodyParameters;
   
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'invoice_id'  => 'required|exists:invoices,id',
            'description' => 'required|string|max:255',
            'quantity'    => 'required|integer|min:1',
            'unit_price'  => 'required|numeric|min:0',
        ];
    }
}
