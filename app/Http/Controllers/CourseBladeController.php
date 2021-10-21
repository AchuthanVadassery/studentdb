<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use Barryvdh\DomPDF\Facade as PDF;



class CourseBladeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course_main', compact('courses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:courses,name'
        ]);
        $courses = Course::create([
            'name' => $request->name


        ]);
        return redirect()->route('course.register');
    }
    public function edit($id)
    {
        $courses = Course::find($id);
        return view('course_edit', compact('courses'));
    }
    public function update(Request $request, $id)
    {
        $update = Course::find($id)->update([
            'name' => $request->name,

        ]);
        return redirect()->route('course.register');
    }
    public function delete($id)
    {
        $delete = Course::find($id)->forceDelete();
        return redirect()->route('course.register');
    }
    public function search(Request $request)
    {
        $data = Course::all();

        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Student::query()
            ->where('created_at', '<=', "{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('posts', 'data'));
    }
    public function downloadPDF(Request $request){
        

        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Student::query()
        ->where('created_at', '<=', "{$search}%")
        ->get();

        $pdf=PDF::loadView('search_student',compact('posts'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('students.pdf');

    }
}
