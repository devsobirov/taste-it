<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodCreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'price' => ['nullable','numeric','min:0','max:9999999'],
            'category_id' => 'required|integer',
            'recept' => 'nullable|max:255',
            'image' => 'nullable|file|mimes:jpg,png,svg,webp|max:2048'
        ];
    }
}
