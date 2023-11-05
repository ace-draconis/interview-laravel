<?php
namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|bail',
            'email' => 'required|email|unique:users,email|bail',
            'password' => 'required|string|min:8|confirmed',
        ];
    }
}
