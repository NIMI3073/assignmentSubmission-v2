<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CourseController extends Controller
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
        return view('dashboard.add-course');
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
            'course_title' => ['string', 'required'],
            'course_code' => ['string', 'required'],
            'course_unit' => ['integer', 'required'],
        ]);
        $validated['user_id'] = auth()->user()->id;
        $validated['course_id'] = $this->generateCourseId();
        $course = Course::create($validated);

        if ($course) {
            return response([
                'data' => $course,
                'message' => 'course created successfully'
            ]);
        } else {
            return response([
                'data' => null,
                'message' => 'Unknown error occurred'
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    /**
     * 
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

    public function generateCourseId()
    {

        $code =  substr(str_shuffle('123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5);
        return Course::where('course_id', $code)->exists()
            ? $this->generateCourseId()
            : $code;
    }

    public function showAllLecturerCourses()
    {
        $lecturerCourses = Course::where('user_id', auth()->user()->id)->get();
        return view('dashboard.all-courses')->with([
            'courses' => $lecturerCourses,
            'index' => 1
        ]);
    }

    public function showAllCourseAssignments(Request $request)
    {
        $request->validate([
            'course_id' => ['required', 'string', 'exists:course,id']
        ]);

        $courseAssignments = Assignment::where('course_id', $request->course_id)->get();
        // dd($courseAssignments);
        return view('dashboard.course-assignments')->with([
            'assignments' => $courseAssignments,
            'index' => 1
        ]);
    }


    public function allLecturerCourses(Request $request)
    {
        $request->validate([
            'user_id' => 'integer|required|exists:course,user_id',
        ]);

        $lecturerCourses = Course::where('user_id', $request->user_id)->get();
        return view('dashboard.lecturer-courses')->with([
            'courses' => $lecturerCourses,
            'index' => 1,
        ]);
    }
}
