<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Providers\WelcomeNewUserEvent;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);

         $user = new User;
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->password = Hash::make($request->input('password'));
         $user->user_image = public_path('public/user_image/noimage.jpg');
         $user->save();

        event(new WelcomeNewUserEvent($user));
        return back()->with('success','Registered Successfully');
    }


}
