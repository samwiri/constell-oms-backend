<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderStatusHistoryRequest extends FormRequest
{
     
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {
        return [
            'order_id'  => 'required',
            'status'    => 'required|in:PENDING,RECEIVED,CONSOLIDATED,DISPATCHED,IN_TRANSIT,ARRIVED,READY_FOR_RELEASE,RELEASED,DELIVERED',
            'location'  => 'nullable|string',
            'notes'     => 'nullable|string',
            'user_id'   => 'integer' 
        ];
    }
}
