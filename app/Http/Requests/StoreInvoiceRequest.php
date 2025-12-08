<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceRequest extends FormRequest
{
 
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {
    
        return [
            'order_id'       => 'nullable|exists:orders,id',
            'type'           => 'required|in:FREIGHT,STORAGE,CUSTOMS,OTHER',
            'due_date'       => 'nullable|date',
        ];
   
    }
}
