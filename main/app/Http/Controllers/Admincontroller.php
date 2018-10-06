<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Teacher;
use App\student_teacher;
use DB;
use App\Assignment;

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
        $currentuserId = Auth::id();
        $student = DB::table('students')->where('user_id',$currentuserId)->first();
        $teacher=Teacher::where('class_id',$request->classcode)->first();
        
        if($request->category == "student")
        {
            
            if($teacher){
                
                $quote = new student_teacher;
                $quote->fill($request->all());
                $quote->teacher_id = $teacher->class_id;
                $quote->student_id = $student->student_id; 
                $quote->save();  
            }

            return redirect()->back();

       }
    }
    public function assi_add(Request $request){
        
        // $this->validate($request, [
        // 'title' => 'required'
        // ]);
       
        
        $assignment = new Assignment();
        // $assignment->fill($request->all());
        $assignment->title = $request -> Assignment_title;
        $assignment->lastdate = $request->duedate;
        $assignment->about=$request->about;
        $featured=$request->featured;
        $featured_new_name=time().$featured->getClientOriginalName();
        $featured->move('uploads/assignment',$featured_new_name);
        $assignment->featured='uploads/assignment/'. $featured_new_name;
        $assignment->save();
         
    }
    // public function stu_search(Request $request)
    // {
    //     $re = $request->searchmembers;
        
    
    // if ($re){

        

    //     $search= student_teacher::all();
           
    //     $results = DB::table('users')->where('name','=',$re)->first();
    //     dd($results->all());
    // }
    // }
   

}