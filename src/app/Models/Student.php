<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\ModelFilters\StudentFilter;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'students';

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
    ];

    public function modelFilter()
    {
        return $this->provideFilter(StudentFilter::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'enrollments');
    }
}
