<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAssistedShoppingRequest extends FormRequest
{

    use AutoBodyParameters;
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],

            'url' => ['sometimes', 'url'],

            'quantity' => ['sometimes', 'integer', 'min:1'],

            'status' => [
                'sometimes',
                Rule::in(['requested', 'quoted', 'paid', 'declined']),
            ],

            'notes' => ['sometimes', 'string'],
        ];
    }
}
