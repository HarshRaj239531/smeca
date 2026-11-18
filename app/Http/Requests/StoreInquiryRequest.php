<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInquiryRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:120'],
            'company_name' => ['nullable', 'string', 'max:160'],
            'phone' => ['required', 'string', 'max:25'],
            'email' => ['required', 'email', 'max:160'],
            'inquiry_type' => ['required', 'string', 'in:product,b2b_oem,consultancy,distributorship,general'],
            'product_id' => ['nullable', 'exists:products,id'],
            'product_name' => ['nullable', 'string', 'max:180'],
            'message' => ['required', 'string', 'min:5', 'max:3000'],
        ];
    }

    /**
     * Custom message definitions.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your full name.',
            'phone.required' => 'A valid phone number is required for follow-up.',
            'email.required' => 'Please enter your email address.',
            'message.required' => 'Please share your inquiry details or requirements.',
        ];
    }
}
