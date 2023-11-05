<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class StudentFilter extends ModelFilter
{
    public function name(string $name): self
    {
        return $this->whereLike('name', $name);
    }

    public function email(string $email): self
    {
        return $this->where('email', $email);
    }
}
