<?php
namespace App\http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Traits\PaginableCollection;

class CourseCollection extends ResourceCollection
{
    use PaginableCollection;
}
