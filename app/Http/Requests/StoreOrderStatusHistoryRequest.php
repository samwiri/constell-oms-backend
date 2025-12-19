<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrderStatusHistoryRequest extends FormRequest
{

    use AutoBodyParameters;
     
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {
        return [
            'order_id'  => 'sometimes',
            'status'    => 'sometimes|in:PENDING,RECEIVED,CONSOLIDATED,DISPATCHED,IN_TRANSIT,ARRIVED,READY_FOR_RELEASE,RELEASED,DELIVERED',
            'location'  => 'sometimes|string',
            'notes'     => 'sometimes|string',
            'user_id'   => 'sometimes|integer' 
        ];
    }
}
