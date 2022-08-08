<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Assignment;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.assignment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => ['integer', 'required'],
            'question' => ['string', 'required'],
            'total_score' => ['string', 'required'],
        ]);
       $assignment = Assignment::create($validated);
       if($assignment){
        return response([
      'data'=> $assignment,
      'message'=> 'successful'
    ]);

   }else{
       return response([
           'data'=> null,
           'errorMessage' => 'Unknown error occur',
       ], Response::HTTP_UNAUTHORIZED);
   }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAddNewAssignmentForm()
    {
        return view('dashboard.assignment')->with([
            'courses' => Course::where('user_id', auth()->user()->id)->get(['course_title', 'id'])
        ]);
    }



    public function searchCourse(Request $request)
    {
        $request->validate([
            'course_id' => 'string|required|exists:course,course_id'
        ]);
        $course = Course::where('course_id', $request->course_id)->first();
        return view('dashboard.assignment-upload')->with(['course' => $course, 'index' => 1]);
    }


    public function submitAssignment(Request $request)
    {
        $request->validate([
            'course_title' => 'string|required',
        ]);
        $submit = Submission::where('course_title', $request->course_title)->first();
        return view('dashboard.assignment-submission')->with(['submission' => $submit, 'index' => 1]);
    }

    // admin (get all students submissions on a courseAssignment)

    public function studentSubmissions(Request $request)
    {
        $request->validate([
            'user_id' => 'integer|exists:submission,user_id'
        ]);

        $studentSubmission = Submission::with(['assignment'])->where('user_id', $request->user_id)->get();
        return view('dashboard.student-submissions')->with([
            'submissions' => $studentSubmission, 
            'student'=> User::find($request->user_id),
            'index' => 1
        ]);
    }



    public function lecturerAssignments(Request $request){
        $request->validate([
            'lecturer_id' => 'required|integer|exists:users,id',
        ]);

        $lecturerAssignments = Assignment::whereHas('course', function($query) use($request){
            $query->where('user_id', $request->lecturer_id);
        })->get();
        // dd($lecturerAssignments);
        return view('dashboard.lecturer-assignments')->with([
            'lecturerAssignments'=>$lecturerAssignments,
            'index'=> 1
        ]);
    }
    

    public function submissionsOnAssignments (Request $request){
        $request->validate([
            'assignment_id'=> 'required|string|exists:submission,assignment_id'
        ]);
    $assignmentSubmissions = Submission::with(['assignment'])->where('assignment_id', $request->assignment_id)->get();
    return view('dashboard.student-assignmentSubmissions')->with([
        'studentAssignmentSubmissions'=> $assignmentSubmissions,
        'index'=> 1,
    ]);

    }


    public function editAssignmentQuestion (Request $request){
        $request->validate([
            'id'=> 'required|integer|exists:assignment,id'
        ]);
        $editQuestion =  Assignment::with(['course'])->where('id',$request->id)->first();
        return view('dashboard.edit-question')->with([
            'assignment' => $editQuestion
        ]);

    }


    public function editAssignment(Request $request)
    {
        $request->validate([
            'id' => 'integer|required|exists:assignment,id',
            'question' => 'string|required'
        ]);
        $assignment = Assignment::where('id',$request->id)->first();
        if ($assignment) {
            $assignment->update(['question' => $request->question]);
        }         
        
        return view('dashboard.edit-question')->with([
            'assignment' => $assignment,
            'successMessage'=>'Assignment updated Successfully'
        ]);
}



public function deleteAssignment (Request $request){
    $request->validate([
        'id'=> 'required|integer|exists:assignment,id',
    
    ]);
   
    $deleteAssignment = Assignment::where('id',$request->id)->first();
    $courseId = $deleteAssignment->course_id;
 if($deleteAssignment){
    
    // submission
    Submission::where('assignment_id',$deleteAssignment->id)->delete();

   $deleteAssignment->delete(); 
 }
    
 return view('dashboard.course-assignments')->with([
    'assignments' => Assignment::where('course_id',$courseId)->get(),
    'successMessage'=>'Assignment deleted Successfully',
    'index' => 1
]);


}


}








