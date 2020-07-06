@extends('layouts.body')

@section('content')

<div class="contct_wrap">
    <div class="row">
        <div class="col-md-10" style="margin-left:100px; margin-top:50px">
            <form action="/users/{{$users->id}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="contact_des">
                    <h4>UPDATE PROFILE</h4>
                    <div class="inputs_des des_2">
                        <input type="text" placeholder="name" name="name" value="{{$users->name}}"><i class="fa fa-user"></i>
                    </div>

                    <div class="inputs_des des_2">
                        <input type="text" placeholder="email" name="email" value="{{$users->email}}"><i class="glyphicon glyphicon-envelope"></i>
                    </div>

                    <div class="inputs_des des_3">
                        <textarea placeholder="About Yourself" name="user_profile">{{$users->user_profile}}</textarea>
                        <i class="fa fa-comments-o"></i>
                    </div>

                    <div class="inputs_des des_2">
                        <input type="file" name="user_image">
                    </div>

                    <div>
                        <button>UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection