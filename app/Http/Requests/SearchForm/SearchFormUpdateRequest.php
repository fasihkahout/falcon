<?php

namespace App\Http\Requests\SearchForm;

use Illuminate\Foundation\Http\FormRequest;

class SearchFormUpdateRequest extends FormRequest
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
            'flight_arrival_time'=>'required',
            'pickup_date'=>'required',
            'pickup_time'=>'required',
            'luggage'=>'required',
            'adults'=>'required',
            'childrens'=>'required',
            'infants'=>'required',
        ];
    }
}
