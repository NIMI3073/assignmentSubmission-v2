<?php

namespace App\Http\Controllers;

use App\Models\UploadAssignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class UploadAssignmentController extends Controller
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
        return view('dashboard/uploadAssignment');
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

            'matric-no'=>['string','required'],
            'department'=>['string','required'],
            'course-code'=>['string','required'],
            'course-title'=>['string','required'],
            'assignment-title'=>['string','required'],
            'file' => ['required','file']
        ]);
        // die (var_dump($validated));
       $fileName = Str::slug(auth()->user()->full_name).".".$request->file->getClientOriginalExtension();
       Storage::putFileAs("public/uploads/dp", $request->file,$fileName);

       unset($validated['file']);
       $validated['file_name'] = $fileName;
        UploadAssignment::create($validated);
        return view('dashboard.uploadAssignment')->with([
            "uploadAssignmentSuccessMessage" => ' Assignment Upload Successful'
        ]);
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
}
