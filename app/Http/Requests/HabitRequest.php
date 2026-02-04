<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitRequest extends FormRequest
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
            'name' => 'string|required|max:255'
        ];
    }

     public function messages(): array
    {
        return [
            'name.required' => 'O campo é obrigatório.',
            'name.max' => 'O nome deve ter no máximo 255 caracteres.',
            'name.string' => 'Deve ser um texto válido',
        ];
    }
}
