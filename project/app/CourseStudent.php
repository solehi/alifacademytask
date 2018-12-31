<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    protected $table = 'course_student';
    protected $guarded = [];
    public function User()
    {
        return $this->belongsTo('User');
    }

    public function Student()
    {
        return $this->belongsTo('Student');
    }

    public function Course()
    {
        return $this->belongsTo('Course');
    }
}
