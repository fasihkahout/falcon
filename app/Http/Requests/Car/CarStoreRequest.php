<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class CarStoreRequest extends FormRequest
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
            'name'=>'required',
            'img'=>'required',
            'model'=>'required',
            'type'=>'required',
            'seats'=>'required',
            'ac'=>'required',
            'first_mile_price'=>'required',
            'after_first_mile_price'=>'required',
            
            
        ];
    }
}
