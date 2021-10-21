<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
       'subject_id',
       'exam_id',
       'mark'
    ];

    // function to get the exam name in blade
    public function findExam()
    {
        return $this->hasOne(Exam::class,'id','exam_id');
    }

    // function to get the student name in blade
    public function findStudent()
    {
        return $this->hasOne(Student::class,'id','student_id');
    }

    // function to get the subject name in blade
    public function findSubject()
    {
        return $this->hasOne(Subject::class,'id','subject_id');
    }

}
