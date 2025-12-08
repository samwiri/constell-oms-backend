<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{
     
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'origin_country'  => 'sometimes|string',
            'receiver_name'   => 'sometimes|string',
            'receiver_phone'  => 'sometimes|string',
            'receiver_email'  => 'nullable|email',
            'receiver_address'=> 'sometimes|string',
         ];
    }
}
