<?php

use App\Models\Course;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;     
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\ForgotPasswordController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/',fn()=>view('index'));

Route::get('/apply',fn()=>view('apply'));
Route::get('/registration',fn()=>view('registration'));
Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::get('/contact',fn()=>view('contact'));
Route::get('/about',fn()=>view('about'));
Route::post('/registration',[UserController::class,'store']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('web')->name('logout');
Route::post('/contact',[ContactController::class,'store']);


Route::get('email-token',[ForgotPasswordController::class,'showEmailTokenForm'])->name('email-token.get');
Route::post('email-token',[ForgotPasswordController::class,'tokenForm'])->name('email-token');
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot-password');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgot-password.post');
Route::get('reset-password', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset-password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset-password');


//--  Dashboard Routes
Route::prefix('panel')->middleware(['auth:web'])->group(function(){
Route::get('/', fn()=> view('dashboard.index'))->name('dashboard');
Route::get('/add_course',fn()=>view('dashboard.add_course'));
Route::get('/all-students',fn()=>view('dashboard.all-students'));
Route::get('/lecturer',fn()=>view('dashboard.lecturer'));
Route::get('/add-lecturer',fn()=>view('dashboard.add-lecturer'));
Route::get('/student-profile',fn()=>view('dashboard.student-profile'));
Route::post('/assignment-submission-post',[SubmissionController::class,'submitAssignment'])->name('assignment-submission');
Route::get('/assignment-submission',[SubmissionController::class,'assignmentSubmissionForm'])->name('assignment-submission-form');
Route::get('/assignment-upload',fn()=>view('dashboard.assignment-upload'))->name('assignment-upload');
Route::get('/assignment',[AssignmentController::class, 'showAddNewAssignmentForm']);
Route::get('/mark-assignment',[SubmissionController::class,'showMarkAssignment'])->name('mark-assignment');
Route::post('/add-score',[SubmissionController::class,'addScore'])->name('add-score');
Route::post('/search-course',[AssignmentController::class,'searchCourse'])->name('search-course');
Route::get('/add-student',fn()=>view('dashboard.add-student'));
Route::post('/add-student', [AuthController::class,'student']);
Route::get('/course-assignments',[CourseController::class,'showAllCourseAssignments']);
Route::get('/assignment-submissions',[SubmissionController::class,'showAllAssignmentSubmissions']);
Route::get('/all-courses',[CourseController::class, 'showAllLecturerCourses']);
Route::post('/add_course',[CourseController::class,'store']);
Route::post('/assignment',[AssignmentController::class,'store'])->name('assignment');

// Admin Dashboard routes

Route::prefix('admin')->group(function(){
    Route::get('/super-admin',fn()=>view('dashboard.super-admin'));
    Route::get('/student-submissions',fn()=>view('dashboard.student-submissions'));
    Route::get('/lecturer-assignments',fn()=>view('dashboard.lecturer-assignments'));
    Route::get('/student-page',[UserController::class,'showAllStudents']);
    Route::get('/lecturer-page',[UserController::class,'showAllLecturers']);
    Route::get('/student-submissions',[AssignmentController::class,'studentSubmissions'])->name('student-submissions');
    Route::get('/student-profiles',[UserController::class,'studentProfiles'])->name('student-profiles');
    Route::get('/lecturer-profiles',[UserController::class,'lecturerProfiles'])->name('lecturer-profiles');
    Route::get('/lecturer-assignments',[AssignmentController::class,'lecturerAssignments'])->name('lecturer-assignments');
    Route::get('/student-assignmentSubmissions',[AssignmentController::class,'submissionsOnAssignments'])->name('student-assignmentSubmissions');
    Route::get('/lecturer-courses',[CourseController::class,'allLecturerCourses'])->name('lecturer-courses');
    Route::get('/edit-question',[AssignmentController::class,'editAssignmentQuestion'])->name('edit-question');
    Route::post('/edit-assignment-post',[AssignmentController::class,'editAssignment'])->name('edit-assignment');
    Route::get('/delete-assignment',[AssignmentController::class,'deleteAssignment'])->name('delete-assignment');
    Route::get('/edit-score',[SubmissionController::class,'edit-score'])->name('edit-score');
});

});
