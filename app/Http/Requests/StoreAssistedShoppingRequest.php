<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\AutoBodyParameters;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAssistedShoppingRequest extends FormRequest
{

    use AutoBodyParameters;
   
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
       return [
            'name' => ['required', 'string'],

            'url' => ['nullable', 'url'],

            'quantity' => ['nullable', 'integer', 'min:1'],

            'status' => [
                'nullable',
                Rule::in(['requested', 'quoted', 'paid', 'declined']),
            ],

            'notes' => ['nullable', 'string'],          
        ];
    }
}
