<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class StoreConsolidationBatchRequest extends FormRequest
{

    use AutoBodyParameters;
     
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
       return [
            'transport_mode'        => 'required|in:AIR,SEA,ROAD,TRAIN',
            'container_flight_number'=> 'required|string',
            'departure_date'        => 'required|date',
            'status'                => 'sometimes|in:OPEN,FINALIZED,DEPARTED,ARRIVED',      
            'created_by'            => 'sometimes|exists:users,id',
            'finalized_at'          => 'nullable|date',
            'departed_at'           => 'nullable|date',
            'arrived_at'            => 'nullable|date',
            'origin_country'        => 'nullable',
            'destination_country'   => 'nullable',
            'warehouse_location_id' => 'required|exists:warehouse_locations,id'
        ];
    }
}
