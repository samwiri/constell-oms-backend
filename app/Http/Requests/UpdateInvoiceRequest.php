<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInvoiceRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {

        return [        
            'type'           => 'sometimes|in:FREIGHT,STORAGE,CUSTOMS,OTHER',
            'status'         => 'sometimes|in:UNPAID,PAID,OVERDUE,CANCELLED',
            'due_date'       => 'sometimes|date',
        ];

    }
}
