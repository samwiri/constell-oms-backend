<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{

    use AutoBodyParameters;
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'order_id'       => 'required|exists:orders,id',          
            'contents'       => 'required|string',
            'declared_value' => 'required|numeric',
            'weight'         => 'required|numeric',
            'length'         => 'required|numeric',
            'width'          => 'required|numeric',
            'height'         => 'required|numeric',
            'is_fragile'     => 'boolean',
            'is_hazardous'   => 'boolean',
            'is_damaged'     => 'boolean',
            'package_photos'  => 'nullable|array',
            'location_id'    => 'nullable|exists:warehouse_locations,id',
            'received_at'    => 'nullable|date',
        ];
    }
}
