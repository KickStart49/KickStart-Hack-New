<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
	protected $fillable = [
         'about', 'avatar',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
