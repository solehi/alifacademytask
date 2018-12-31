<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
   // protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'info'
    ];
    public $timestamps = true;

    /**
     * For ajax requests, returns data to JSON format.
     *
     * @var array
     */

    public $result = [];

    protected $guarded = [];
    public function StudentCourse()
    {
        return $this->hasOne("StudentCourse");
    }

    public function students()
    {
        return $this->belongsToMany('App\Student')->withTimestamps();
    }

}
