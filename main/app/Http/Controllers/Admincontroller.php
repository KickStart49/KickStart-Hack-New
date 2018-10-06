<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Teacher;
use DB;

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
 //    public function createuser()
 //    {
 //    	return view('admin.user.create');
	// }
 //    public function student($id)
 //    {
 //        $user=User::find($id);
 //        $user->permission="student";
 //        $user->save();
 //        return redirect()->back();
 //    }
    public function code()
    {
        
        return view('student_teacher.index')->with('users',User::all());
    }
    public function verification(Request $request)
    {
        if($request->category == "student")
        {
            
            $currentuserid = Auth::id();
            $users = User::all();
            $user = DB::table('users')->where('id',$currentuserid)->first();
            
            $t=Teacher::where('class_id',$request->classcode)->first();
            
            if($t){
                $t->student()->attach($st);
            }

            return redirect()->route('categories');

            // $class_id=$request->classcode;
        
            // $teacher = DB::table('teachers')->where('class_id',$class_id)->first();
            
            // if ($teacher) {

            //     $id = Auth::id();
            //     array_add($teacher->stu_arr,'userid', $id);
            //     Teacher::insert();
                   
            // }
        }
    }
}