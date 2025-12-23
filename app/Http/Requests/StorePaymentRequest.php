<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
{

    use AutoBodyParameters;
     
    public function authorize(): bool
    {
        return true;
    }
 
    public function rules(): array
    {
        return [
            'invoice_id'            => 'nullable|exists:invoices,id',
            'assisted_shopping_id'  => 'nullable|exists:assisted_shoppings,id',
            'amount'                => 'required|numeric|min:0.01',
            'method'                => 'required|in:MOBILE_MONEY,CARD,BANK_TRANSFER,CASH',
            'transaction_reference' => 'nullable|string',
            'gateway_reference'     => 'nullable|string',
            'status'                => 'nullable|in:PENDING,COMPLETED,FAILED',
            
        ];
    }
}
