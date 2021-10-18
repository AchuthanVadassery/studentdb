<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;


class ExamBladeController extends Controller
{
    public function index(){
        $exams=Exam::all();
        return view('exam_main',compact('exams'));
    }
    public function store(Request $request)
    {  
        $request->validate([
            'name' => 'required|unique:exams,name']);
        $exams = Exam::create([
                'name' => $request->name

                
            ]);
            return redirect()->route('exam.register');

    
    }
    public function edit($id)
    {
       $exams=Exam::find($id);
       return view('exam_edit',compact('exams'));
     }
    public function update(Request $request, $id)
     {
         $update=Exam::find($id)->update([
             'name'=>$request->name,
             
         ]);
         return redirect()->route('exam.register');
        }
    public function delete($id)
        {
          $delete=Exam::find($id)->forceDelete();
          return redirect()->route('exam.register');
        }
}
