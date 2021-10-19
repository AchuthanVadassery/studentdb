<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subject;

class MarkBladeController extends Controller
{
    public function test()
    {
        
        $data = Course::all();
        return view('mark_main', compact( 'data'));
    }
    public function getSubject($id)
    {
        $subjects = Subject::where('course_id', $id)->get();
        $cap=array('subjects'=>$subjects);
        $output='<option>Select Subject</option>';
        foreach($subjects as $key){
            $output.='<option value="'.$key->id.'">'.$key->name.'</option>';
        }
        echo json_encode($output);
        // return response()->json($subjects);
    }
}
