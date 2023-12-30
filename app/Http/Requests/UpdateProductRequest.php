<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'title' => [
                'required','min:2',
                Rule::unique('products')->ignore($this->route('id'))
            ],
            'price' => 'required|gt:0',
            'total_count' => 'required|gt:0',
            'category' => 'required|in:sport,technology',
            'description' => 'nullable|min:5'
        ];
    }
}
