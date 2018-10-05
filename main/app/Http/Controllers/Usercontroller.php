<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class Usercontroller extends Controller
{
    
    public function showuser(){

    	return view('admin.user.index')->with('users',User::all());
    }
     public function manager($id)
    {
        $user=User::find($id);
        $user->permission="manager";
        $user->save();
        return redirect()->back();
    }
    
    public function visitor($id)
    {
         $user=User::find($id);
        $user->permission="visitor";
        $user->save();
        return redirect()->back();
    }
    
}
