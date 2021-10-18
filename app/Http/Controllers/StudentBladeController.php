<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentBladeController extends Controller
{
    public function ShowStudent()
    {
        $students=Student::with('courseFind')->get();
        $courses=Course::pluck('name','id');
        return view('student_main',compact('students','courses'));

    }

    // function to register a student
    public function RegisterStudent(Request $request)
    { 
        // validating students details
        $validated=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:students',
            'dob'=> 'required|date',
            'address'=>'required',
            'pincode'=>'required',
            'course_id'=>'required'
        ],
        [
            'name.required' => 'Please enter the name',
            'dob.required'=>'Age should be >18',
            'email.required'=>'please enter a valid email ID',
            'pincode.required'=>'*Required',
            'address.required'=>'*Required',
            'course_id.required'=>'*Required'
        ]);

            $students = Student::create([
                'name' => $request->name,
                'email' => $request->email,
                'dob' => $request->dob,
                'address' => $request->address,
                'pincode' => $request->pincode,
                'course_id' => $request->course_id
                ]);
        return redirect()->route('student.show');
    }

    public function EditStudent($id)
    {
        $students=Student::find($id);
        $courses=Course::pluck('name','id');
        return view('student_edit',compact('students','courses'));
    }

    // function to update an excisting student data
    public function UpdateStudent(Request $request,$id)
    {
        $students=Student::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'address' => $request->address,
            'pincode' => $request->pincode,
            'course_id' => $request->course_id
        ]);
        return Redirect()->route('student.show');

    }

    // function to delete a student data
    public function DeleteStudent(Request $request,$id)
    {
        $students=Student::find($id)->delete();
        return Redirect()->route('student.show');

    }
}
