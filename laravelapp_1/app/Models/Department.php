<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;
use App\Models\Course;
class Department extends Model
{
    use HasFactory;
    protected $primaryKey='d_id';
    public function students(){
        return $this->hasMany(student::class,'dept_id');
    }
    public function courses(){
        return $this->hasMany(course::class,'offered_by');
    }
}
