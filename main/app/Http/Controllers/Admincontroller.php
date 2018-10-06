<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;

class Admincontroller extends Controller
{
    public function index()
    {
    	return view('admin.charts');
    }
    public function formindex()
    {
    	return view('admin.forms');
    }
    public function createuser()
    {
    	return view('admin.user.create');
	}
    public function student($id)
    {
        $user=User::find($id);
        $user->permission="student";
        $user->save();
        return redirect()->back();
    }
    public function code()
    {
        
        return view('student_teacher.index')->with('users',User::all());
    }
	
}
