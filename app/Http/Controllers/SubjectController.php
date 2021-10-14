<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Helpers\ApiHelper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SubjectController extends Controller
{   
    use ApiHelper;
 

   
 //function to register a subject
  
    public function store(Request $request)
    {   
       $rules=array(
           'name'=>"required|min:2",
           'course_id'=>"required"
       );
       $validator=Validator::make($request->all(),$rules);
       if ($validator->fails())
       {
           return $validator->errors();
       }
       else {
        $subject= Subject::create([
            'course_id'=>$request->course_id,
            'name' => $request->name,
            

        ]);
        return $this->sendResponse(true,[ ],'registration successful',200);
    }
      
        
    }

    
//   function to update a subject
    public function update(Request $request, $id)
    {  
        $subject=Subject::find($id)->update([
            'course_id'=>$request->course_id,
            'name'=>$request->name,
        ]);
        return $this->sendResponse(true,[],'updation successful',200);
        
    }
    // function to delete a subject

    public function destroy($id)
    { 
        $subject=Subject::find($id);
        $subject->delete();
        return $this->sendResponse(true,[ ],'Deletion successful',200);

        
    }
}
