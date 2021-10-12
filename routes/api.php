<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

use App\Http\Controllers\ExamController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register',[CourseController::class,'registerCourse']);
Route::post('course_update/{id}',[CourseController::class,'update']);
Route::delete('course_delete/{id}',[CourseController::class,'delete']);
Route::post('add_exam',[ExamController::class,'AddExam']);
Route::post('update_exam/{id}',[ExamController::class,'UpdateExam']);
Route::delete('delete_exam/{id}',[ExamController::class,'DeleteExam']);
