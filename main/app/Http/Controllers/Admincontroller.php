<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Teacher;
use DB;
use App\Assignment;

class Admincontroller extends Controller
{
    public function index()
    {
    	return view('admin.charts');
    }
    public function teacher()
    {
    	return view('admin.user.teacher');
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
    // public function verification(Request $request)
    // {
    //     if($request->category == "student")
    //     {

    //         $t=Teacher::where('class_id',$request->classcode)->first();
    //         $tval=$request->classcode;
    //         $tarray = array('0');
    //         array_push($tarray,$tval)
    //         $t->stu_arr = $tarray;
    //         $t->save();
    //         return redirect()->route('categories');

    //         // $class_id=$request->classcode;
        
    //         // $teacher = DB::table('teachers')->where('class_id',$class_id)->first();
            
    //         // if ($teacher) {

    //         //     $id = Auth::id();
    //         //     array_add($teacher->stu_arr,'userid', $id);
    //         //     Teacher::insert();
                   
    //         // }
    //     }
    // }
    public function assi_add(Request $request)
    {
        dd($request->all());
        $assignment=Assignment::create([
            'title'=>$request->title,
            'about'=>$request->about,
            'date'=>$request->lastdate,
            ]);
        
    }
}