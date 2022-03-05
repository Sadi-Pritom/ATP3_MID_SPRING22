<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Models\Department;
use Illuminate\Models\CourseStudent;

class Course extends Model
{
    use HasFactory;
    public function department(){
        return $this->belongsTo(Departmet::class, 'offered_by');
    }

    public function courseStudent()
    {
        return $this->hasMany(CourseStudent::class, 'c_id');
    }
}
