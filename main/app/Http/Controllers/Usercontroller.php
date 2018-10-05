<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Usercontroller extends Controller
{
    
    public function showuser()
    {
    	return view('admin.user.index')->with('users',User::all());
    }
     public function manager($id)
    {
         $user=User::find($id);
        $user->manager=1;
        $user->visitor=0;
        $user->save();
        return redirect()->back();
    }
    
    public function visitor($id)
    {
         $user=User::find($id);
        $user->visitor=1;
        $user->manager=0;
        $user->save();
        return redirect()->back();
    }
    
}
