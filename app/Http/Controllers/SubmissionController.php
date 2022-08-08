<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Assignment;
use App\Models\Submission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Http\Response;


class SubmissionController extends Controller
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
            'answer' => ['string', 'required'],
            'score_obtained' => ['string', 'required'],
            'status' => ['enum', 'required'],
        ]);
        $validated['user_id'] = auth()->user()->id;
        Submission::create($validated);
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
        //
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

    public function showAllAssignmentSubmissions(Request $request)
    {
        $request->validate([
            'assignment_id' => ['string', 'required']
        ]);
        $assignmentSubmissions = Submission::where('id', $request->assignment_id)->with(['assignment'])->get();
        return view('dashboard.assignment-submissions')->with([
            'submissions' => $assignmentSubmissions,
            'index' => 1,
        ]);
    }

    public function showMarkAssignment(Request $request)
    {
        $request->validate([
            'id' => ['integer', 'required', 'exists:submission,id']
        ]);

        $submission = Submission::with(['student'])->find($request->id);
        return view('dashboard.mark-assignment')->with([
            'submission' => $submission,
            'index' => 1,
        ]);
    }

    public function addScore(Request $request)
    {
        $request->validate([
            'score' => 'integer|required',
            'submission_id' => 'integer|required|exists:submission,id'
        ]);
        $submission = Submission::with(['assignment'])->find($request->submission_id);

        // Checking for error

        if ($request->score > $submission->assignment->total_score) {
           return redirect()->back()->with('error', "Score Cannot be greater than {$submission->assignment->total_score}");
        }
        Submission::where('id', $request->submission_id)->update(
            [
                'score_obtained' => $request->score,
                'status' => 'marked',
                
            ]
        );


        return redirect()->back();
    }


    public function submitAssignment (Request $request)
    {
        $request->validate([
            'answer' => ['string', 'required'],
            
            'assignment_id' => ['string', 'required', 'exists:assignment,id']
        ]);
        
        $submission = Submission::with(['assignment'])
        ->where('assignment_id', $request->assignment_id)
        ->where('user_id', auth()->user()->id)
        ->first();
        if ($submission) {
            return response([
              $submission->update(['answer' => $request->answer]), 
              'message'=> 'Assignment submitted successfully'
            ]);
            
        } else {
            return response([
              $submission =  Submission::create([
                'assignment_id' => $request->assignment_id,
                'answer' => $request->answer,
                'score_obtained' => 0,
                'status' => 'submitted',
                'user_id'=> auth()->user()->id,
                'message' => 'Unknown error occurred'
              ], Response::HTTP_UNAUTHORIZED) 
        ]);
            
        }
  }

      
    

    public function assignmentSubmissionForm(Request $request)
    {
        // Validation
        $request->validate([
            'assignment_id' => ['required', 'integer', Rule::exists('assignment', 'id')]
        ]);
        // Retrieving Assignment Model from Database
        $assignment = Assignment::find($request->assignment_id);
        // $assignment = Assignment::where('id', $request->assignment_id)->first();
        // $assignment = Assignment::where('id', $request->assignment_id)->get();
        // Check if Student has submitted Before
        if($assignment->submissions()->where('user_id', auth()->user()->id)->exists()){
            return view('dashboard.assignment-upload')
            ->with([
                'course' => $assignment->course, 'index' => 1, 
                'submissionError' => 'You cannot submit on the same assignment twice'
            ]);
        }
        // Passing Model to View
        return view('dashboard.assignment-submission')->with([
            'assignment' => $assignment
        ]);
        
    }

    public function showAllStudentSubmissions(Request $request)
    {
        $request->validate([
            'assignment_id' => ['string','required']
        ]);
        $studentAssignmentSubmissions = Submission::where('id', $request->assignment_id)->with(['assignment'])->get();
        return view('dashboard.assignment-submissions')->with([
            'submissions' => $studentAssignmentSubmissions,
            'index' => 1,
        ]);
    }

    public function editScore(Request $request)
    {
        $request->validate([
            'id' => 'integer|required|exists:submission,id',
            'score_obtained' => 'integer|required'
        ]);
        $editScore = Submission::where('id',$request->id)->first();
        // dd($editScore);
        if ($editScore) {
            $editScore->update(['score_obtained' => $request->score_obtained]);
        }         
        
        return view('dashboard.edit-score')->with([
            'assignment' => $editScore,
            'successMessage'=>'Successful'
        ]);
    
}

}



