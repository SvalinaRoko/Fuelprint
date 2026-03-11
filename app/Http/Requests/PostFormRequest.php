<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            'name' => 'required | min:2 | max:30',
            'surname' => 'required | min:2 | max:40',
            'email' => 'required | email | max:255',
            'password' => 'required | confirmed | Password::min(8)->letters()->numbers()->symbols()'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your first name.',
            'name.min' => 'Your first name must contain at least 2 characters.',
            'name.max' => 'Your first name may not be longer than 30 characters.',

            'surname.required' => 'Please enter your surname.',
            'surname.min' => 'Your surname must contain at least 2 characters.',
            'surname.max' => 'Your surname may not be longer than 40 characters.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Your email address may not be longer than 255 characters.',

            'password.required' => 'Please enter a password.',
            'password.confirmed' => 'The password confirmation does not match.'
        ];
    }
}
