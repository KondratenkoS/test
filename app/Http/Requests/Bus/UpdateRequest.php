<?php

namespace App\Http\Requests\Bus;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'car_number' => 'required|string|unique:buses,car_number,' . $this->bus->id,
            'model_id' => 'required|exists:car_models,id',
            'driver_id' => 'nullable|exists:drivers,id',
        ];
    }

    public function messages(): array
    {
        return [
            'car_number.required' => 'Важливо до заповнення',
            'car_number.unique' => 'Номер вже існує',
        ];
    }
}
