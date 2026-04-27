<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CreateFormEntrieRequest extends FormRequest
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
            'vehicle_id' => [
                'required',
                Rule::exists('vehicles', 'id')
                    ->where('user_id', Auth::id()),
            ],
            'date' => 'required|date',
            'price_per_liter' => 'required|numeric|min:0|max:6',
            'liters_filled' => 'required|numeric|min:0|max:3',
            'distance_traveled' => 'required|numeric|min:0|max:6',
            'gas_station' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {

        return [
            'vehicle_id.required' => 'Please select a vehicle.',
            'vehicle_id.exists' => 'The selected vehicle is invalid.',

            'date.required' => 'The date is required.',
            'date.date' => 'Please enter a valid date.',

            'price_per_liter.required' => 'Price per liter is required.',
            'price_per_liter.numeric' => 'Price per liter must be a number.',
            'price_per_liter.min' => 'Price per liter cannot be negative.',

            'liters_filled.required' => 'Liters filled is required.',
            'liters_filled.numeric' => 'Liters filled must be a number.',
            'liters_filled.min' => 'Liters filled cannot be negative.',

            'distance_traveled.numeric' => 'Distance traveled must be a number.',
            'distance_traveled.min' => 'Distance traveled cannot be negative.',

            'gas_station.string' => 'Gas station name must be text.',
            'gas_station.max' => 'Gas station name may not be longer than 255 characters.',
        ];
    }
}
