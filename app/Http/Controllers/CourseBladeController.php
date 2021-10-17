<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseBladeController extends Controller
{
    public function index(){
        $courses=Course::all();
        return view('course_main',compact('courses'));
    }
    public function store(Request $request)
    {  
        $request->validate([
            'name' => 'required|unique:courses,name']);
        $courses = Course::create([
                'name' => $request->name

                
            ]);
            return redirect()->route('course.register');

    
    }
    public function edit($id)
    {
       $courses=Course::find($id);
       return view('course_edit',compact('courses'));
     }
    public function update(Request $request, $id)
     {
         $update=Course::find($id)->update([
             'name'=>$request->name,
             
         ]);
         return redirect()->route('course.register');
        }
    public function delete($id)
        {
          $delete=Course::find($id)->forceDelete();
          return redirect()->route('course.register');
        }

    

}
