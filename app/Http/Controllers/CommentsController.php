<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Blog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }


    public function store(Request $request)
    {
        $this->validate($request,[
            'comment_body' => 'required|max:100',
            'blog_id' => 'required'
        ]);

        $comments = new Comment;
        $comments->comment_body = $request->input('comment_body');
        $comments->user_id = Auth::user()->id;
        $comments->blog_id = $request->input('blog_id');
        $comments->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        $comments = Comment::find($comment);
        // $blogs = Blog::find($comment);
        // $user = User::find($comment);

        return view('blogs.show')->with('comments',$comments);
    }
    
    // public function destroy(Comment $comment)
    // {
    //     $comments = Comment::find($comment);

    //     $comments->delete();
    //     return back();
    // }
}
