<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDeliveryOrderRequest extends FormRequest
{

    use AutoBodyParameters;
   
    public function authorize(): bool
    {
        return true;
    }
 
    public function rules(): array
    {
       $id = $this->route('delivery_order')->id ?? $this->delivery_order;

        return [
            'rider_id'        => 'sometimes|nullable|exists:user,id',
            'delivery_address'=> 'sometimes|string',
            'delivery_date'   => 'sometimes|date',
            'pod_signature'   => 'sometimes|nullable|string',
            'pod_photo_path'  => 'sometimes|nullable|string',
            'delivery_notes'  => 'sometimes|nullable|string',
            'delivered_at'    => 'sometimes|nullable|date',
        ];
    }
}
