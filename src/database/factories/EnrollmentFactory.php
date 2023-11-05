<?php

namespace Database\Factories;

use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Enrollment::class;

    public function definition()
    {
        $studentId = Student::inRandomOrder()->first()->id;
        $courseId = Course::inRandomOrder()->first()->id;

        return [
            'student_id' => $studentId,
            'course_id' => $courseId,
        ];
    }
}
