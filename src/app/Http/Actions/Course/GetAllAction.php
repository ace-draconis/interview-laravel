<?php

namespace App\Http\Actions\Course;

use App\Http\DataTransferObjects\Course\FilterData;
use App\Models\Course;
use App\Http\Resources\CourseCollection;

class GetAllAction
{
    private $courses;

    public function __construct(Course $courses)
    {
        $this->courses = $courses;
    }

    public function execute(FilterData $filterData, int $pageSize)
    {
        return new CourseCollection($this->courses->filter($filterData->toArray())->paginate($pageSize));
    }
}
