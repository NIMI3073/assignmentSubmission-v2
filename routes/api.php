<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\AssignmentController;
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



Route::post('/login', [AuthController::class, 'login']);
Route::post('/registration', [UserController::class, 'store']);
Route::post('/contact', [ContactController::class, 'store']);
Route::post('/add_course', [CourseController::class, 'store']);
Route::post('/add-score', [SubmissionController::class, 'addScore'])->name('add-score');
Route::post('/assignment', [AssignmentController::class, 'store'])->name('assignment');
Route::post('/assignment-submission-post',[SubmissionController::class,'submitAssignment'])->name('assignment-submission');


