<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Blog;
use App\User;
use App\Comment;
use Illuminate\Http\Request;

class ReplysController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'reply_body' => 'required',
            'comment_id' => 'required',
            'blog_id' => 'required',
            'user_id' => ' ',
        ]);

        $reply = new Reply;
        $reply->reply_body = $request->input('reply_body');
        $reply->comment_id = $request->input('comment_id');
        $reply->blog_id = $request->input('blog_id');
        $reply->user_id = auth()->user()->id;

        $reply->save();

        return back();
        //return response()->json(['success'=>'Successful']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    // public function show(Reply $reply)
    // {
    //     $replies = Reply::find($reply);

    //     return view('blogs.show')->with('replies',$replies);
    // }
}
