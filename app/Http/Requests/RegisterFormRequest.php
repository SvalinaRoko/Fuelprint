<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterFormRequest extends FormRequest
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
            'name' => 'required|min:2|max:30',
            'surname' => 'required|min:2|max:40',
            'email-register' => 'required|email|max:255|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()->symbols(), 'regex:/^\S+$/', 'string']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Enter your first name.',
            'name.min' => 'First name must be at least 2 characters.',
            'name.max' => 'First name may not exceed 30 characters.',

            'surname.required' => 'Enter your surname.',
            'surname.min' => 'Surname must be at least 2 characters.',
            'surname.max' => 'Surname may not exceed 40 characters.',

            'email-register.required' => 'Enter your email.',
            'email-register.unique' => 'This email is already registered.',
            'email-register.email' => 'Enter a valid email address.',
            'email-register.max' => 'Email may not exceed 255 characters.',

            'password.required' => 'Enter a password.',
            'password.min' => 'Password must have at least 8 characters.',
            'password.letters' => 'Password must containe at least one letter',
            'password.numbers' => 'Password must containe at least one number.',
            'password.symbols' => 'Password must containe at least one symbol.',
            'regex' => 'No white spaces allowed',
            'password.confirmed' => 'Passwords do not match.',
        ];
    }
}
