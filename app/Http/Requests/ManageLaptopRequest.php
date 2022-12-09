<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageLaptopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'merek' => ['required', 'max:100'],
            'stock' => ['required', 'numeric', 'min:0'],
            'deskripsi' => ['required', 'min:5'],
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
