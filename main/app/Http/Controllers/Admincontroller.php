<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Teacher;
use App\ParentClass;
use App\student_teacher;
use DB;
use App\Assignment;

class Admincontroller extends Controller
{
    public function index()
    {
    	return view('admin.charts');
    }
<<<<<<< HEAD
    public function showadmin(Request $request)
    {
        $currentuserId = Auth::id();
        $admin = DB::table('users')->where('id',$currentuserId)->first();
        
        
        if($admin->permission == "student")
        {
            return redirect()->route('student');
        }
        if($admin->permission == "teacher")
        {
            return redirect()->route('teacher');
        }
        if($admin->permission == "parent")
        {
            return redirect()->route('parent');
        } 
    }
        
=======
    
>>>>>>> f77f3b0f62b2abea99e393bdec2cc0736cf7ebbb
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
        
        if($request->category == "student")
        {
            $student = DB::table('students')->where('user_id',$currentuserId)->first();
            $id = $student->id;
            $teacher=Teacher::where('class_id',$request->classcode)->first();
            if($teacher){
                
                $quote = new student_teacher;
                $quote->fill($request->all());
                $quote->teacher_id = $teacher->class_id;
                $quote->student_id = $student->student_id; 
                $quote->save();

                $quote1 = Student::find($id);
                
                $quote1->class = 1;
                $quote1->save();  
            }

            return redirect()->route('showadmin');

       }
       if($request->category == "parent")
        {
            $matchThese = ['student_id' => $request->childcode, 'teacher_id' => $request->classcode];
            $student = DB::table('student_teachers')->where($matchThese)->get();
            
            if($student){
                
                $quote = new ParentClass;
                $quote->fill($request->all());
                $quote->class=1;
                $quote->save();  
            }

            return redirect()->route('showadmin');

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