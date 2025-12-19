<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDeliveryOrderRequest extends FormRequest
{

    use AutoBodyParameters;
     
    public function authorize(): bool
    {
        return true;
    }

 
   public function rules(): array
    {
        $deliveryOrderId = $this->route('delivery_order'); // For update requests

        return [
            'order_id'         => [
                'required',
                'exists:orders,id',               
                Rule::unique('delivery_orders', 'order_id')->ignore($deliveryOrderId), // Ensure each order_id appears only once in delivery_orders
            ],
            'rider_id'         => 'nullable|exists:users,id',
            'delivery_address' => 'required|string',
            'delivery_date'    => 'required|date',
            'status'           => 'nullable|in:PENDING,ASSIGNED,OUT_FOR_DELIVERY,DELIVERED,FAILED',
            'pod_signature'    => 'nullable|string',
            'pod_photo_path'   => 'nullable|string',
            'delivery_notes'   => 'nullable|string',
            'delivered_at'     => 'nullable|date',
        ];
    }

}
