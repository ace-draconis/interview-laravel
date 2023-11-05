<?php
namespace App\Http\DataTransferObjects\Auth;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class LoginData extends Data
{
    public $email;

    public $password;
    
    public static function fromRequest(Request $request): self
    {
        return self::from([
            'email' => $request->email,
            'password' => $request->password
        ]);
    }
}
