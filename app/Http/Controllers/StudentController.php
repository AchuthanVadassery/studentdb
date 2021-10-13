<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Validator;

class StudentController extends Controller
{
    // function to register a student
    public function RegisterStudent(Request $request)
    { 
        // validating students details
        $rules=array(
            'name'=>'required|max:255',
            'email'=>'required|email|unique:students',
            'dob'=> 'required|date',
            'address'=>'required',
            'pincode'=>'required',
            'course_id'=>'required',
        );
        $validated=Validator::make($request->all(),$rules);
        if($validated->fails())
            return $validated->errors();
        else{
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
    public function DeleteStudent(Request $request,$id)
    {
        $students=Student::find($id)->delete();
        return response()->json(['deletion'=>'successfull'], 200);

    }
}
