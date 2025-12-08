<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsolidationBatchRequest extends FormRequest
{
     
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
       return [
            'mawb_number'           => 'required|string|max:50|unique:consolidation_batches,mawb_number',
            'transport_mode'        => 'required|in:AIR,SEA,ROAD,TRAIN',
            'container_flight_number'=> 'required|string',
            'departure_date'        => 'required|date',
            'status'                => 'sometimes|in:OPEN,FINALIZED,DEPARTED,ARRIVED',
            'package_count'         => 'sometimes|integer|min:0',
            'total_weight'          => 'sometimes|numeric|min:0',
            'created_by'            => 'sometimes|exists:users,id',
            'finalized_at'          => 'nullable|date',
            'departed_at'           => 'nullable|date',
            'arrived_at'            => 'nullable|date',
        ];
    }
}
