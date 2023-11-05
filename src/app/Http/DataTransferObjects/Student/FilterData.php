<?php

namespace App\Http\DataTransferObjects\Student;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class FilterData extends Data
{
    public $name;

    public $email;
    
    public static function fromRequest(Request $request): self
    {
        return self::from([
            'name' => $request->name,
            'email' => $request->email,
        ]);
    }
}
