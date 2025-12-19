<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageRequest extends FormRequest
{
     
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {

        $id = $this->route('id');

        return [
            'order_id'       => 'sometimes|exists:orders,id',
            'hwb_number'     => "sometimes|string|max:50|unique:packages,hwb_number,{$id}",
            'contents'       => 'sometimes|string',
            'declared_value' => 'sometimes|numeric',
            'weight'         => 'sometimes|numeric',
            'length'         => 'sometimes|numeric',
            'width'          => 'sometimes|numeric',
            'height'         => 'sometimes|numeric',
            'is_fragile'     => 'boolean',
            'is_hazardous'   => 'boolean',
            'is_damaged'     => 'boolean',
            'package_photos'  => 'nullable|array',
            'location_id'    => 'nullable|exists:warehouse_locations,id',
            'received_at'    => 'nullable|date',
        ];
    }
}
