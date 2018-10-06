<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	protected $fillable = [
        'class_id','subject','name'
    ];
    public function student()
    {
        return $this->belongsToMany('App\Student');
    }
    

}
