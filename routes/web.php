<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseBladeController;
use App\Http\Controllers\StudentBladeController;
use App\Http\Controllers\ExamBladeController;

use App\Http\Controllers\SubjectBladeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('register',[CourseBladeController::class,'index'])->name('course.register');
Route::post('/coursestore',[CourseBladeController::class,'store'])->name('course.store');
Route::get('/courseedit/{id}',[CourseBladeController::class,'edit'])->name('course.edit');
Route::post('/courseupdate/{id}',[CourseBladeController::class,'update'])->name('course.update');
Route::get('/coursedelete/{id}',[CourseBladeController::class,'delete'])->name('course.delete');

// route to register,edit,update and delete student details
Route::get('/',[StudentBladeController::class,'ShowStudent'])->name('student.show');
Route::post('/store_student',[StudentBladeController::class,'RegisterStudent'])->name('student.store');
Route::get('/edit_student/{id}',[StudentBladeController::class,'EditStudent'])->name('student.edit');
Route::post('/update_student/{id}',[StudentBladeController::class,'UpdateStudent'])->name('student.update');
Route::get('/delete_student/{id}',[StudentBladeController::class,'DeleteStudent'])->name('student.delete');
Route::get('/students_registered',[StudentBladeController::class,'RegisteredStudents'])->name('students.registered');
Route::get('/student_profile/{id}',[StudentBladeController::class,'StudentProfile'])->name('student.profile');

// route to add exam details
Route::get('exam_register',[ExamBladeController::class,'index'])->name('exam.register');
Route::post('/exam_store',[ExamBladeController::class,'store'])->name('exam.store');
Route::get('/exam_edit/{id}',[ExamBladeController::class,'edit'])->name('exam.edit');
Route::post('/exam_update/{id}',[ExamBladeController::class,'update'])->name('exam.update');
Route::get('/exam_delete/{id}',[ExamBladeController::class,'delete'])->name('exam.delete');

// subject route
Route::get('subject_register',[SubjectBladeController::class,'index'])->name('subject.register');
Route::post('/subject_store',[SubjectBladeController::class,'store'])->name('subject.store');
Route::get('/subject_edit/{id}',[SubjectBladeController::class,'edit'])->name('subject.edit');
Route::post('/course_update/{id}',[SubjectBladeController::class,'update'])->name('subject.update');

//search route
Route::get('/search',[CourseBladeController::class,'search'])->name('search');