<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Course;

class SubjectBladeController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        $data = Course::all();
        return view('subject_main', compact('subjects', 'data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:subjects',
            'course_id' => 'required'

        ]);


        $subjects = Subject::create([
            'name' => $request->name,
            'course_id' => $request->course_id,


        ]);
        return redirect()->route('subject.register');
    }
    public function edit($id)
    {
        $data = Course::all();

        $subjects = Subject::find($id);
        return view('subject_edit', compact('subjects', 'data'));
    }
    public function update(Request $request, $id)
    {
        $update = Subject::find($id)->update([
            'name' => $request->name,
            'course_id' => $request->course_id,

        ]);
        return redirect()->route('subject.register');
    }
}
