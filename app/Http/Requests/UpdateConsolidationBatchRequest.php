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

        return [
            'transport_mode'         => 'sometimes|in:AIR,SEA,ROAD,TRAIN',
            'container_flight_number'=> 'sometimes|string',
            'departure_date'         => 'sometimes|date',
            'status'                 => 'sometimes|in:OPEN,FINALIZED,DEPARTED,ARRIVED',
            'package_count'          => 'sometimes|integer|min:0',
            'total_weight'           => 'sometimes|numeric|min:0',
            'created_by'             => 'sometimes|exists:users,id',
            'finalized_at'           => 'sometimes|date',
            'departed_at'            => 'sometimes|date',
            'arrived_at'             => 'sometimes|date',
            'origin_country'        => 'sometimes',
            'destination_country'   => 'sometimes',
            'warehouse_location_id' => 'sometimes|exists:warehouse_locations,id'
        ];

    }
}
