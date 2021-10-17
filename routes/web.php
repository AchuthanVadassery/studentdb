<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseBladeController;

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


