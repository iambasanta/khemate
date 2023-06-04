<?php

namespace App\Http\Requests\Admin;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'slug' => ['required', 'max:255', 'unique:'.Product::class],
            'category_id' => ['required'],
            'description' => ['sometimes'],
            'featured' => ['sometimes'],
            'image' => ['sometimes', 'image', 'mimes:jpg,jpeg,png'],
            'price' => ['required', 'decimal:2, 4', 'min:0'],
            'quantity' => ['required', 'integer', 'min:0'],
        ];
    }
}
