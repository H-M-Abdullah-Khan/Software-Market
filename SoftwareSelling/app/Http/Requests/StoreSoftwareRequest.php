<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSoftwareRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'pricing_type' => 'required|in:free,paid',
            'price' => 'nullable|required_if:pricing_type,paid|numeric|min:0',
            'main_file' => 'required|file|mimes:zip,exe,rar|max:50000',
            'screenshots.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'demo_url' => 'nullable|url',
        ];
    }
}

