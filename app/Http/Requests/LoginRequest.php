<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'telephone' => 'required|exists:users,telephone|integer',
            'password' => 'required'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string>
     */
    public function messages(): array
    {
        return[
            'telephone.required' => 'Le numéro de téléphone est obligatoire',
            'telephone.integer' => 'Ce numéro de téléphone est invalide',
            'telephone.exists' => 'Le numéro de téléphone n\'existe pas',
            'password.required' => 'Le mot de passe est obligatoire',
        ];
    }
}
