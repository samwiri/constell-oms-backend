<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBatchPackageRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'batch_id'   => 'required|exists:consolidation_batches,id',
            'package_id' => 'required|exists:packages,id',

            // prevent duplicates
            'package_id' => 'unique:batch_packages,package_id,NULL,id,batch_id,' . $this->batch_id,
        ];
    }
}
