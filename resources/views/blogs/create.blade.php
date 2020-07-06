@extends('layouts.body')

@section('content')
    
<div class="kf_content_wrap">
 <!--Banner Wrap Start-->
 <div class="kf_inr_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--KF INR BANNER DES Wrap Start-->
                <div class="kf_inr_ban_des">
                    <div class="inr_banner_heading">
                        <h3>Create blog</h3>
                    </div>
                   
                    <div class="kf_inr_breadcrumb">
                        <ul>
                            <li><a href="/index">Home</a></li>
                            <li><a href="/blogs">our-blog</a></li>
                            <li><a href="/blogs/create">add-post</a></li>
                        </ul>
                    </div>
                </div>
                <!--KF INR BANNER DES Wrap End-->
            </div>
        </div>
    </div>
 </div>
</div>

<!--Banner Wrap End-->



 <div class="contct_wrap">
    <div class="row">
        <div class="col-md-10" style="margin-left:100px; margin-top:50px">
            <form action="/blogs" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="contact_des">
                    <h4>Add Post</h4>
                    <div class="inputs_des des_2">
                        <input type="text" placeholder="Title" name="title"><i class="fa fa-user"></i>
                    </div>

                    <div class="inputs_des des_3">
                        <textarea placeholder="body" name="main_body"></textarea>
                        <i class="fa fa-comments-o"></i>
                    </div>

                    <div class="inputs_des des_3">
                        <textarea placeholder="quotes from your post" name="quotes"></textarea>
                        <i class="fa fa-comments-o"></i>
                    </div>

                    <div class="inputs_des des_2">
                        <input type="File" name="blog_image">
                    </div>

                    <div class="inputs_des des_2">
                        <button>Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
