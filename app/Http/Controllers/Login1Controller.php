<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Session;

class Login1Controller extends Controller
{
    /**
     * Create a constructor for the guard
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function showLoginForm()
    // {
    //     return view('pages.index');
    // }

    public function login(Request $request)
    {
        $validate = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $remember_token = $request->has('remember_me') ? true : false;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_token)) {
            //if successfull then redirect to the intended view
            Session::put('email', $request->input('email'));
            $user = User::where('email', $email)->first();
            $id = $user->id;
            return back()->with('id', $id)->with('success', 'You are logged in');
            //return response()->with('id', $id)->json(['success', 'You are logged in']);
        } else {
            Session::flash('error', 'Email and Password does not match any data,Kindly re-enter your details');
            return redirect()->back();
        }
    }



    public function logout(Request $request)
    {

        Auth::logout();
        return back()->with('Success', 'You logged out');
    }
}
