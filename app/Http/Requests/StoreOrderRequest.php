<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
     
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [     
     
            'origin_country'  => 'required|string',
            'receiver_name'   => 'required|string',
            'receiver_phone'  => 'required|string',
            'receiver_email'  => 'nullable|email',
            'receiver_address'=> 'required|string',
        
        ];
    }
}
