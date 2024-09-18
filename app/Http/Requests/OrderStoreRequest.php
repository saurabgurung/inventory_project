<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'order_date' => 'required|date',
            'client_name'=> 'required|string',
            'client_contact'=> 'required|string',
            'product_id'=> 'required|integer',
            'total_amount'=> 'required|integer',
            'discount'=> 'required|integer',
            'grand_total'=> 'required|integer',
            'paid'=> 'required|integer',
            'payment_type'=> 'required|string',
            'payment_status'=> 'required|string',
        ];
    }
}
