<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Traits\PaginableCollection;

class StudentCollection extends ResourceCollection
{
    use PaginableCollection;
}
