<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormVRequest extends FormRequest
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
            //
            'name'=>'required|min:3|max:10|alpha|not_in:admin',
            'email'=>'required|email',
            'price' =>'required|numeric|min:3|between:10,100'
        ];
    }

    function messages()
    {
        return[
            'name.required' => "name dite hobe"
        ];
    }
}
