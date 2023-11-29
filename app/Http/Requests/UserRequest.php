<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        // Get the validation rules
        $uniqueRule = 'unique:users';
        if ($this->method() == 'PATCH') {
            $uniqueRule = "unique:users,email," . $this->user . ",id";
        }
        return [
            'name' => 'required',
            'email' => 'required|email|unique:email',
            'password' => 'required',
        ];
    }
}
