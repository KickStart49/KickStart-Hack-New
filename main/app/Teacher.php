<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function student()
    {
        return $this->belongsToMany('App\Student');
    }

}
