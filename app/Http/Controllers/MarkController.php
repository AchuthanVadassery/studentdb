<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;

class MarkController extends Controller
{
    // combined function to create and update mark details of a student
    public function createORupdate(Request $request)
    {
        $rules=array(
            'student_id'=>'required',
            'subject_id'=>'required',
            'exam_id'=> 'required',
            'mark'=>'required'
        );
        $validated=Validator::make($request->all(),$rules);
        if($validated->fails())
            return $validated->errors();
        else if($request->id)
        {
            $marks=Mark::find($request->id)->update([
                'student_id' => $request->student_id,
                'subject_id' => $request->subject_id,
                'exam_id' => $request->exam_id,
                'mark' => $request->mark
            ]);
            return response()->json(['updation'=>'successfull'], 200);
        }
        else
        {
            $marks=Mark::create([
                'student_id' => $request->student_id,
                'subject_id' => $request->subject_id,
                'exam_id' => $request->exam_id,
                'mark' => $request->mark
            ]);
            return response()->json(['addition'=>'successfull'], 200);
        }
    }
    // function to delete mark details of a student
    public function DeleteMark(Request $request,$id)
    {
        $marks=Mark::find($id)->delete();
        return response()->json(['deletion'=>'successfull'], 200);
    }
}
