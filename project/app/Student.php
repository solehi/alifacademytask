<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    public $timestamps = true;
    public $result = [];
    protected $guarded = [];
    public function StudentCourse()
    {
        return $this->hasOne("StudentCourse");
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course')->withTimestamps();
    }

}
