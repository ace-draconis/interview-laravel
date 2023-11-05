<?php

namespace App\Traits;

trait PaginableCollection
{
    public function toArray($request)
    {
        return [
            'records' => $this->collection,
            'pagination' => [
                'current_page' => $this->currentPage(),
                'last_page' => $this->lastPage(),
                'total_record' => $this->total(),
                'page_size' => $this->perPage(),
            ]
        ];
    }
}
