<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class CourseFilter extends ModelFilter
{
    public function name(string $name): self
    {
        return $this->whereLike('name', $name);
    }
}
