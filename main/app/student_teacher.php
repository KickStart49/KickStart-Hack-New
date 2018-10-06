<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_teacher extends Model
{
    protected $fillable = [
        'student_id','class_id'
    ];
}
