<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\MarkController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[CourseController::class,'registerCourse']);
Route::post('course_update/{id}',[CourseController::class,'update']);
Route::delete('course_delete/{id}',[CourseController::class,'delete']);

//Api for adding,updating and deleting exams details
Route::post('add_exam',[ExamController::class,'AddExam']);
Route::post('update_exam/{id}',[ExamController::class,'UpdateExam']);
Route::delete('delete_exam/{id}',[ExamController::class,'DeleteExam']);

//Api for registering,updating and deleting students details 
Route::post('register_student',[StudentController::class,'RegisterStudent']);
Route::post('update_student/{id}',[StudentController::class,'UpdateStudent']);
Route::delete('delete_student/{id}',[StudentController::class,'DeleteStudent']);

//subject route
Route::post('subject_store',[SubjectController::class,'store']);
Route::post('subject_update/{id}',[SubjectController::class,'update']);
Route::delete('subject_delete/{id}',[SubjectController::class,'destroy']);

// Api for adding,updating,deleting mark of a student
Route::post('createORupdate/{id?}',[MarkController::class,'createORupdate']);
Route::delete('delete_mark/{id}',[MarkController::class,'DeleteMark']);

