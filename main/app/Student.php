<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = [
        'student_id'
    ];
    
    public function teacher()
    {
        return $this->belongsToMany('App\Teacher');
    }
    public function parent()
    {
        return $this->belongsTo('App\Parent');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
