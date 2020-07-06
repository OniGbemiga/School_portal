<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function edit($id)
    {
        $users = User::find($id);
        //dd($blog);
        return view('users/edit')->with('users',$users);
    }

    public function update(Request $request, $id){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'user_profile' => 'required|max:100',
            'user_image' => 'file|image|required|max:4999'
        ]);

        if($request->hasFile('user_image')){
            //get filename with extension
            $filenameWithExt = $request->file('user_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('user_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('user_image')->storeAs('public/user_image', $fileNameToStore);
            //$image = Image::make(public_path("storage/{$fileNameToStore}"))->fit(20,20);
         }
          else {
              $fileNameToStore = 'noimage.jpg';
              //return redirect('/posts')->with('error', 'Image not Created');
          }

          $users = User::find($id);
          $users->name = $request->input('name');
          $users->email = $request->input('email');
          $users->user_profile = $request->input('user_profile');
          if ($request->hasFile('user_image')) {
            $users->user_image = $fileNameToStore;
          }
          $users->save();

          return redirect('/index')->with('success', 'Profile Successfully updated');

    }
}
