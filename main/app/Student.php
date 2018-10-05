<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function teacher()
    {
        return $this->belongsToMany('App\Teacher');
    }
    public function parent()
    {
        return $this->belongsTo('App\Parent');
    }

}
