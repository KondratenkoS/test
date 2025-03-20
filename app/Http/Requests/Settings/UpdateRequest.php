<?php

namespace App\Http\Requests\Settings;

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
            'company_name' => 'nullable|string|max:255',
            'logo_path' => 'nullable|file|image|mimes:jpg,png,jpeg,gif',
            'admin_phone' => 'nullable|numeric',
            'description' => 'nullable|string',
        ];
    }
}
