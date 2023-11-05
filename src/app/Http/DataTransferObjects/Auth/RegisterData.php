<?php
namespace App\Http\DataTransferObjects\Auth;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class RegisterData extends Data
{
    public $name;

    public $email;

    public $password;

    public static function fromRequest(Request $request): self
    {
        return self::from([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
    
}