<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'telephone' => 'required|unique:users,telephone|integer',
            'email' => 'required|email',
            'CNI' => 'required',
            'adresse' => 'required',
            'password' => 'required|min:6|confirmed',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string>
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'Votre nom est obligatoire.',
            'last_name.required' => 'Votre prénom est obligatoire.',
            'age.required' => 'Votre age est obligatoire.',
            'telephone.required' => 'Votre téléphone est obligatoire.',
            'telephone.unique' => 'Ce numéro de téléphone est déjà associé à un compte.',
            'telephone.integer' => 'Ce numéro de téléphone est invalide',
            'email.required' => 'Votre email est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse e-mail valide.',
            'CNI.required' => 'Votre CNI est obligatoire.',
            'adresse.required' => 'Votre adresse est obligatoire.',
            'password.required' => 'Votre password est obligatoire.',
            'password.min' => 'Votre mot de passe doit comporter au moins :min caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        ];
    }
}
