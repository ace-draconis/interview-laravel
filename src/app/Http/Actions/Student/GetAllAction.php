<?php

namespace App\Http\Actions\Student;

use App\Http\DataTransferObjects\Student\FilterData;
use App\Models\Student;
use App\Http\Resources\StudentCollection;

class GetAllAction
{
    private $students;

    public function __construct(Student $students)
    {
        $this->students = $students;
    }

    public function execute(FilterData $filterData, int $pageSize)
    {
        return new StudentCollection($this->students->filter($filterData->toArray())->paginate($pageSize));
    }
}
