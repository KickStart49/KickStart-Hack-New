<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class profilecontroller extends Controller
{
    public function user(Request $request){
    	$url = $request->url();
    	$username = str_slug(str_after($url,'192.168.43.124:8000/in/'));

    	$user = DB::table('users')->where('name', $username)->first();

    	$authuser = Auth::user();

    	if($user){
    		
    		if(isset($authuser)){

		    	if($authuser->name == $user->name)
		    	{
		    		return view('profile.profile')->with('user',$user)
		    						->with('edit','true');
		    	}else{
		    		return view('profile.profile')->with('user',$user);
		    }
		    
		    }else{
		    	return view('profile.profile')->with('user',$user);
		    }
    	
    	}else{
    		abort(404);
    	}
    }
}
