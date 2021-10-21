<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\Course;


class MarkBladeController extends Controller
{
    // function to show the form for adding marks of a student
    public function ShowMark()
    {
        $marks=Mark::get();
        $students=Student::pluck('name','id');
        $exams=Exam::pluck('name','id');
        $courses=Course::pluck('name','id');
        return view('mark_main',compact('marks','students','exams','courses'));
    }

    public function getSubject($id) 
    {
        $subjects = Subject::get()->where("course_id",$id)->pluck("name","id");
        return json_encode($subjects);
    } 

    public function getStudent($id)
    {
        $students = Student::get()->where("course_id",$id)->pluck("name","id");
        return json_encode($students);
    }

    // functiom to store the mark of a student
    public function StoreMark(Request $request)
    {
        // validating mark entry details
        $validated=$request->validate([
            'student_id'=>'required',
            'subject_id'=>'required',
            'exam_id'=> 'required',
            'mark'=>'required'
        ],
        [
            'student_id.required' => '*Required',
            'subject_id.required'=>'*Required',
            'exam_id.required'=>'*Required',
            'mark.required'=>'*Required'
        ]);

            $marks = Mark::create([
                'student_id' => $request->student_id,
                'subject_id' => $request->subject_id,
                'exam_id' => $request->exam_id,
                'mark' => $request->mark,
                ]);
        return redirect()->route('mark.add');
    }
}
