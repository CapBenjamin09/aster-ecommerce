<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
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
            'user_id',
            'address' => 'required|max:255',
            'department' => 'required',
            'card_number' => 'required|digits:12',
            'month_expiration' => 'required|digits_between:1,2',
            'year_expiration' => 'required|digits:2',
            'cvv' => 'required|digits:3',
            'cart',
        ];
    }
}
