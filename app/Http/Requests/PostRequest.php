<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'image' => 'required',
            'short_content' => 'required',
            'content' => 'required',
        ];
    }

    public function messages(){

        return [

            'title.required' => 'Sarlavhani kiriting',
            'image.required' => 'Faylni yuklang',
            'short_content.required' => 'Qisqa izohni kiriting',
            'content.required' => 'Batafsil ma\'lumotni kiriting',
        ];
    }
}
