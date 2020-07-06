<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Reply;
use App\Comment;
use DB;
use App\User;

class BlogsController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth')->except(['index','show']);
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$blog = DB::select('SELECT * FROM blogs');
        $blog = Blog::orderBy('id','desc')->paginate(2);

         //dd($blog->toArray());
        return view('pages.blog')->with('blogs',$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'main_body' => 'required',
            'quotes' => 'nullable',
            'blog_image' => 'File|image|nullable|max:4999'
        ]);


        if($request->hasFile('blog_image')){
            //get filename with extension
            $filenameWithExt = $request->file('blog_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('blog_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('blog_image')->storeAs('public/blog_image', $fileNameToStore);
            //$image = Image::make(public_path("storage/{$fileNameToStore}"))->fit(20,20);
         }
          else {
              $fileNameToStore = 'noimage.jpg';
              //return redirect('/posts')->with('error', 'Image not Created');
          }

        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->main_body = $request->input('main_body');
        $blog->quotes = $request->input('quotes');
        $blog->blog_image = $fileNameToStore;
        $blog->user_id = auth()->user()->id;
        $blog->save();

        return redirect('blogs')->with('success', 'Successfully added Post.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id)->load('comments.replies');
        //dd($blog);
        return view('blogs.show')->with('blogs',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        if (auth()->user()->id !== $blog->user_id){
            return back()->with('error', 'Unauthorized User');
        }

        //dd($blog);
        return view('blogs.edit')->with('blogs', $blog);
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
        $this->validate($request, [
            'title' => 'required',
            'main_body' => 'required',
            'quotes' => 'nullable',
            'blog_image' => 'File|image|nullable|max:4999'
        ]);


        if($request->hasFile('blog_image')){
            //get filename with extension
            $filenameWithExt = $request->file('blog_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('blog_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('blog_image')->storeAs('public/blog_image', $fileNameToStore);
            //$image = Image::make(public_path("storage/{$fileNameToStore}"))->fit(20,20);
         }
          else {
              $fileNameToStore = 'noimage.jpg';
              //return redirect('/posts')->with('error', 'Image not Created');
          }

        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->main_body = $request->input('main_body');
        $blog->quotes = $request->input('quotes');
        if ($request->hasFile('blog_image')) {
            $post->blog_image = $fileNameToStore;
        }
        $blog->save();

        return redirect('blogs')->with('success', 'Successfully updated Post.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        // if (auth()->user()->id !== $blog->user_id) {
        //     return redirect('/blogs')->with('error', 'Unauthourized User.');
        // }

        // if ($blog->blog_image != 'noimage.jpg') {
        //     Storage::delete('public/cover_image/'.$blog->blog_image);
        // }
        if (Auth::user()->id !== $blog->user_id) {
            return back()->with('errror', 'Unauthorized User');
        }
        if ($blog->blog_image != 'noimage.jpg') {
            Storage::delete('public/blog_image/'.$blog->cover_image);
        }
        $blog->delete();
        return redirect('/blogs')->with('success', 'Post Deleted.');
    }
}
