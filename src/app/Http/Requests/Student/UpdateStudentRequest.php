<?php
namespace App\Http\Requests\Student;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|bail',
        ];
    }
}
