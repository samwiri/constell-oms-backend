<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCargoDeclationRequest extends FormRequest
{

    use AutoBodyParameters;
 
    public function authorize(): bool
    {
        return true;
    }

     
    public function rules(): array
    {
        return [    
            'internal_curier'=>'sometimes',
            'tracking_number'=>'sometimes',
            'cargo_details'=>'sometimes',
            'value'=>'sometimes|numeric',
            'weight'=>'sometimes|numeric',
            'status'=>'sometimes|in:pending,received,declined'
        ];
    }
}
 