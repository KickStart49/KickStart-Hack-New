<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	protected $fillable = [
        'class_id','stu_arr' => 'array',
    ];
    public function student()
    {
        return $this->belongsToMany('App\Student');
    }
    



}
