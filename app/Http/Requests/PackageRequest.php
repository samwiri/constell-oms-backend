<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'order_id'       => 'required|exists:orders,id',
            'hwb_number'     => 'required|string|max:50|unique:packages,hwb_number',
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
