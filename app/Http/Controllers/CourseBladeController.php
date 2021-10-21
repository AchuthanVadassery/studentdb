<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;



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



    public function searching(Request $req)
    {


        $method = $req->method();


        if ($req->isMethod('post')) {
            $validated = $req->validate([
                'from' => 'required',
                'to' => 'required'
            ]);
            $from = $req->input('from');
            $to   = $req->input('to');
            if ($req->has('search')) {
                // select search
                $search = Student::where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to)->get();

                return view('import', ['ViewsPage' => $search]);
            } elseif ($req->has('export')) {
                // select PDF
                $pdfreport = Student::where('created_at', '>=', $from)
                    ->where('created_at', '<=', $to)->get();
                $pdf = PDF::loadView('PDF_report', ['pdfreport' => $pdfreport])->setPaper('a4', 'landscape');
                return $pdf->download('PDF-report.pdf');
            }
        } else {
            //select all
            $ViewsPage = Student::where('deleted_at', '=', Null)->get();

            return view('import', ['ViewsPage' => $ViewsPage]);
        }
    }
}
