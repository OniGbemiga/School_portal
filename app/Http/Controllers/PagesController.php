<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function aboutus(){
        return view('pages.aboutus');
    }

    public function event(){
        return view('pages.our-event');
    }

    public function blog(){
        return view('pages.our-blog');
    }

    public function courses(){
        return view('pages.our-courses');
    }

    public function teacher(){
        return view('pages.our-teacher');
    }

    public function gallery(){
        return view('pages.filterable-gallery');
    }

    public function contactus(){
        return view('pages.contactus');
    }

    public function teacherShow(){
        return view('pages.teachershow');
    }
}
