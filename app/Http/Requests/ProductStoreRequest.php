<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'rate' => 'required|numeric',
//            'sell_price' => 'required|numeric',
            'quantity_in_stock' => 'required',
            'product_name' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required',
            'brands_id' => 'required',
            'status' => 'required',

//            'supplier_id' => 'required',
        ];
    }
}
