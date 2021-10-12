<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    
    
    public function AddExam(Request $request)
    {
        $exams=Exam::create([
            'name'=>$request->name
        ]);
        return response()->json(['success'=>'successfull'], 200);

    }

    public function UpdateExam(Request $request,$id)
    {
        $exams=Exam::find($id)->update([
            'name'=>$request->name
        ]);
        return response()->json(['updated'=>'successfull'], 200);
    }

   
    public function DeleteExam(Request $request,$id)
    {
        $exams=Exam::find($id)->delete();
        return response()->json(['deleted'=>'successfull'], 200);

        
    }
}
