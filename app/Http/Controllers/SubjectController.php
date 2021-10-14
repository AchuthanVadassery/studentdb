<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Helpers\ApiHelper;
use Illuminate\Http\Request;

class SubjectController extends Controller
{   
    use ApiHelper;
    public function store(Request $request)
    { 
        $subject= Subject::create([
            'course_id'=>$request->course_id,
            'name' => $request->name,
        ]);
        return $this->sendResponse(true,[ ],'registration successful',200);   
    }

    public function update(Request $request, $id)
    {  
        $subject=Subject::find($id)->update([
            'course_id'=>$request->course_id,
            'name'=>$request->name,
        ]);
        return $this->sendResponse(true,[],'updation successful',200);    
    }

    public function destroy($id)
    { 
        $subject=Subject::find($id);
        $subject->delete();
        return $this->sendResponse(true,[ ],'Deletion successful',200); 
    }
}
