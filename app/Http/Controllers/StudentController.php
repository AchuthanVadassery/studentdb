<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // function to register a student
    public function RegisterStudent(Request $request)
    {
        $students = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'address' => $request->address,
            'pincode' => $request->pincode,
            'course_id' => $request->course_id
            ]);
            return response()->json(['registration'=>'successfull'], 200);
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
        return response()->json(['updation'=>'successfull'], 200);

    }

    // function to delete a student data
    public function DeleteStudent(Student $request,$id)
    {
        $students=Student::find($id)->delete();
        return response()->json(['deletion'=>'successfull'], 200);

    }
}
