<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Validator;

class ExamController extends Controller
{
    // function to add an exam type
    public function AddExam(Request $request)
    {
        $rules=array(
            'name'=>'required|unique:exams|max:255'
        );
        $validated=Validator::make($request->all(),$rules);
        if($validated->fails())
            return $validated->errors();
        else{
            $exams=Exam::create([
                'name'=>$request->name
            ]);
            return response()->json(['registration'=>'successfull'], 200);
        }
    }

    // function to update an exam type
    public function UpdateExam(Request $request,$id)
    {
        $exams=Exam::find($id)->update([
            'name'=>$request->name
        ]);
        return response()->json(['updation'=>'successfull'], 200);
    }

    // function to delete an exam type
    public function DeleteExam(Request $request,$id)
    {
        $exams=Exam::find($id)->delete();
        return response()->json(['deletion'=>'successfull'], 200); 
    }
}
