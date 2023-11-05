<?php

namespace App\Http\DataTransferObjects\Course;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class FilterData extends Data
{
    public $name;
    
    public static function fromRequest(Request $request): self
    {
        return self::from([
            'name' => $request->name,
        ]);
    }
}
