<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Helpers\ApiHelper;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{   
    use ApiHelper;
    
    // function to register course
    public function registerCourse(Request $request){
        $rules=array(
            'name'=>"required|min:2"
        );
        $validator=Validator::make($request->all(),$rules);
        if ($validator->fails())
        {
            return $validator->errors();
        }
        else{
        $course= Course::create([
            'name' => $request->name
    ]);
        return $this->sendResponse(true,[ ],'registration successful',200);
    }
    }

    // function to update course
    public function update(Request $request,$id){
        
        $course=Course::find($id)->update([
            'name'=>$request->name,
        ]);
        return $this->sendResponse(true,[],'updation successful',200);
     }

    // function to delete course
    public function delete(Request $request,$id){
        $course=Course::find($id);
        $course->delete();
        return $this->sendResponse(true,[ ],'Deletion successful',200);
    }
}
