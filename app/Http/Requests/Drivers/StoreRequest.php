<?php

namespace App\Http\Requests\Drivers;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'email' => 'required|email|unique:drivers,email',
            'birth_date' => 'required|date|before:today|after:-65 years',
            'image' => 'required|file|image|mimes:jpg,png,jpeg,gif',
            'image_url' => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Має бути заповнено',
            'last_name.required' => 'Має бути заповнено',
            'salary.required' => 'Має бути заповнено',
            'email.required' => 'Має бути заповнено',
            'email.unique' => 'Данний email вже зареєстровано',
            'birth_date.required' => 'Має бути заповнено',
            'image.required' => 'Додайте зображення',
            'image_url.url' => 'Тут має бути лінк',
        ];
    }
}
