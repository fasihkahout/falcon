<?php

namespace App\Http\Requests\Baggage;

use Illuminate\Foundation\Http\FormRequest;

class BaggageStoreRequest extends FormRequest
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
            'pickup_destination'=>'required',
            'dropoff_destination'=>'required',
            
        ];
    }
}
