<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWarehouseRackRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'zone_name' => 'required|string',
            'bin_start' => 'nullable|numeric',
            'bin_end'   => 'nullable|numeric',
            'capacity'  => 'nullable|numeric',
            'type'      => 'required|string|in:SHELF,PALLET,COLD,FRAGILE',
            'warehouse_location_id' => 'required|integer|exists:warehouse_locations,id'
        ];
    }
}
