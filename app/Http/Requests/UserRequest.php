<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

            'name' => 'required|max:50',
            'image' => 'required|mimes:jpg,png|max:2500',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:8|max:10',
        ];
    }

    public function messages(){

        return [

            'name.required' => 'Ismni kiriting',
            'name.min' => 'Ismni kamida 50ta belgidan oshmasin',

            'image.required' => 'Profilingiz uchun rasmni yuklang',
            'image.mimes' => 'Fayl turi jpg,png turi bo\'lishi kerak',
            'image.max' => 'Fayl 2mb dan oshmasin',

            'email.required' => 'Emailni kiriting',
            'email.unique' => 'Boshqa email kiriting, Sababi bu email bazada mavjud',
            'email.email' => 'Bu yerga @gmail.com oxiri tugashi kerak',
            
            'password.required' => 'Parolingizni kiriting',
            'password.min' => 'Parol kamida 8ta belgidan oshmasin',
            'password.max' => 'Parol maksimalni 10ta belgidan oshmasin',
        ];
    }
}
