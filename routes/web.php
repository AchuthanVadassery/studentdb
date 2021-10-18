<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseBladeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('register',[CourseBladeController::class,'index'])->name('course.register');
Route::post('/coursestore',[CourseBladeController::class,'store'])->name('course.store');
Route::get('/courseedit/{id}',[CourseBladeController::class,'edit'])->name('course.edit');
Route::post('/courseupdate/{id}',[CourseBladeController::class,'update'])->name('course.update');
Route::get('/coursedelete/{id}',[CourseBladeController::class,'delete'])->name('course.delete');

// subject route
Route::get('subject_register',[SubjectBladeController::class,'index'])->name('subject.register');
Route::post('/subject_store',[SubjectBladeController::class,'store'])->name('subject.store');
Route::get('/subject_edit/{id}',[SubjectBladeController::class,'edit'])->name('subject.edit');
Route::post('/course_update/{id}',[SubjectBladeController::class,'update'])->name('subject.update');
//search route
Route::get('/search',[CourseBladeController::class,'search'])->name('search');