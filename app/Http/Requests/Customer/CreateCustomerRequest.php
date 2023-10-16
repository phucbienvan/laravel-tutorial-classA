<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'phone' => ['required', 'min:10', 'max:11'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Khong duoc bo trong ten',
            'name.max' => 'Khong duoc lon hon 255 ki tu',
            'phone.required' => 'Khong duoc bo trong phone',
        
        ];
    }
}
