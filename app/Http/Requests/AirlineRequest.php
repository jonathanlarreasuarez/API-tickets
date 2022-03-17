<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirlineRequest extends FormRequest
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

    public function messages() : array
    {
        return [
            'model.required' => 'The field model is required',
            'description.required' => 'The field description is required',
            'capacity.required' => 'The field capacity is required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {

        return [
            'model' => 'required|string',
            'description' => 'required|string',
            'capacity' => 'required|integer'
        ];
    }

}
