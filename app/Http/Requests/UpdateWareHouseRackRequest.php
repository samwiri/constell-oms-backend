<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWareHouseRackRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

     
    public function rules(): array
    {
        return [
            'zone_name' => 'sometimes|string',
            'bin_start' => 'sometimes|numeric',
            'bin_end'   => 'sometimes|numeric',
            'capacity'  => 'sometimes|numeric',
            'type'      => 'sometimes|string|in:SHELF,PALLET,COLD,FRAGILE',
            'warehouse_location_id' => 'sometimes|integer|exists:warehouse_locations,id'
        ];
    }
}
