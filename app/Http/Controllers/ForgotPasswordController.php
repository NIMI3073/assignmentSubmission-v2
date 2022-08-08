<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use App\Mail\ForgetPasswordMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
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
        //
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


    
    public function showForgotPasswordForm()
    {
        return view('forgot-password');
    }



    public function showEmailTokenForm()
    {
        return view('email-token');
    }



   
    public function submitForgotPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = substr(str_shuffle('0123456789'), 0, 6);
        
        // $token = Str::random(6);
       
        

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

      

        Mail::to($request->email)->send(new ForgetPasswordMail($token));

        return view('email-token')->with([
            'message' =>'Token has been sent to your mail',
            'email'=> $request->email
        ]);
       
    }




    public function tokenForm(Request $request)
    {
        
        $request->validate([
            'email' =>  'email|required',
            'token' => 'string|required|exists:password_resets'
        ]);
        $user = User::whereEmail($request->email)->first();
        if($user){
             return view('reset-password')->with([
                'email' => $request->email,
                'user' =>$user


             ]);

        }else{
            return response([
                'message'=> 'invalid token'. $request->email
            ]);
        }
             
          
        }
    


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm(Request $request)
    {
    
            $request->validate([
                'id' => ['required', 'email', Rule::exists('user', 'id')]
            ]);
            
            $user = User::find($request->id);
            return view('reset-password')->with([
                'user' => $user
            ]);

    
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        
        $updatePassword = DB::table('password_resets')
            ->whereEmail([
                'email' => $request->email,
                'token' => $request->token
            ])

            ->first();

        if (!$updatePassword) {
            return back()->with('error', 'Invalid!');
        }

        User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return view('/login')->with([
        'message'=> 'Your password has been changed!'
        ]);
    }


}
