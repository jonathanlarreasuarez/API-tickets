<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'number_stopover' => 'required|integer',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'airline_id' => 'required|integer|exists:airlines,id'
        ];
    }

    public function messages() : array
    {
        return [
            'number_stopover.required' => 'The field number_stopover is required',
            'price.required' => 'The field price is required',
            'duration.required' => 'The field duration is required',
            'airline_id.required' => 'The field airline_id is required'
        ];
    }
}
