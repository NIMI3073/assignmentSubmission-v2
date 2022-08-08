<?php
namespace App\Http\Controllers;

use App\Models\User;
use Hamcrest\Core\IsEqual;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Foundation\Auth\User as AuthUser;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
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
            'full_name'=> ['required','string', 'min:6'],
            'email'=> ['required', 'string', Rule::unique('users','email')],
            'phone'=>['required','string', Rule::unique('users','phone')],
            'type'=>['required','string'], 
            'password'=>['required','confirmed','min:6']
        ]);
        // die (var_dump($validated));
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        if($user){
             return response([
           'data'=> $user,
           'message'=> 'Registration complete'
         ]);

        }else{
            return response([
                'data'=> null,
                'message' => 'Unknown error occurred'
            ], Response::HTTP_UNAUTHORIZED);
        }
        //to pop a message after the form has been completely filled//
        // 
      
              
    }
    

    /**
     * Display the specified resource.
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

    public function showAllStudents(){
        $allStudents = User::where('type', 'student')->withCount(['submissions'])->get();
        return view('dashboard.student-page')->with([
            'students' => $allStudents,
            'index' => 1,
        ]);
        
    }

public function showAllLecturers(){
    $allLecturers = User::where('type','lecturer')->withCount(['courses'])->get();
    return view('dashboard.lecturer-page')->with([

        'lecturers'=>$allLecturers,
        'index'=>1
    ]);
}



public function studentProfiles(Request $request){
    $request->validate([
        'user_id' => 'string|exists:submission,user_id'
    ]);

    // $studentProfile = Submission::where('user_id', $request->user_id)->get();
    return view('dashboard.student-profiles')->with ([
        // 'students'=>$studentProfile,
        'student'=> User::find($request->user_id),
        'index'=>1]);
}


public function lecturerProfiles(Request $request){ 
    $request->validate([
        'user_id' => 'string|required|exists:course,user_id'
    ]);
    return view('dashboard.lecturer-profiles')->with([
        'lecturer'=> User::find($request->user_id),
        'index'=> 1,
    ]);
}


}