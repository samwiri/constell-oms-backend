<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class UpdateConsolidationBatchRequest extends FormRequest
{

    use AutoBodyParameters;
  
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules(): array
    {
        $id = $this->route('id');

        return [
            'mawb_number'            => "sometimes|string|max:50|unique:consolidation_batches,mawb_number,{$id}",
            'transport_mode'         => 'sometimes|in:AIR,SEA,ROAD,TRAIN',
            'container_flight_number'=> 'sometimes|string',
            'departure_date'         => 'sometimes|date',
            'status'                 => 'sometimes|in:OPEN,FINALIZED,DEPARTED,ARRIVED',
            'package_count'          => 'sometimes|integer|min:0',
            'total_weight'           => 'sometimes|numeric|min:0',
            'created_by'             => 'sometimes|exists:users,id',
            'finalized_at'           => 'nullable|date',
            'departed_at'            => 'nullable|date',
            'arrived_at'             => 'nullable|date',
        ];

    }
}
