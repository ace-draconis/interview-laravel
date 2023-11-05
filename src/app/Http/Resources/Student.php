<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Student extends JsonResource
{
 
    public function toArray($request)
    {

        $courses = $this->courses->map(function ($course) {
            return [
                'id' => $course->id,
                'name' => $course->name,
            ];
        });

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'courses' => $courses,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
