<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class StoreCargoDeclationRequest extends FormRequest
{

    use AutoBodyParameters;
 
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'warehouse_location_id'=>'nullable|exists:warehouse_locations,id',
            'internal_curier'=>'nullable',
            'tracking_number'=>'nullable',
            'cargo_details'=>'required',
            'value'=>'required|numeric',
            'weight'=>'nullable|numeric',
            'insured'=>'sometimes|boolean'
        ];
    }
}
