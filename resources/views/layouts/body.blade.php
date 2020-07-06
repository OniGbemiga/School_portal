<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodeforest.net/html/uoe/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2019 10:58:20 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Education</title>
	<!-- Bootstrap core CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Full Calender CSS -->
	<link href="{{asset('css/fullcalendar.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
	<!-- Bx-Slider StyleSheet CSS -->
	<link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet">
	<!-- Font Awesome StyleSheet CSS -->
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="{{asset('js/dl-menu/component.css')}}" rel="stylesheet">
	<link href="{{asset('svg/style.css')}}" rel="stylesheet">
	<!-- Widget CSS -->
	<link href="{{asset('css/widget.css')}}" rel="stylesheet">
	<!-- Typography CSS -->
	<link href="{{asset('css/typography.css')}}" rel="stylesheet">
	<!-- Shortcodes CSS -->
	<link href="{{asset('css/shortcodes.css')}}" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
	<link href="{{asset('style.css')}}" rel="stylesheet">
	<!-- Color CSS -->
	<link href="{{asset('css/color.css')}}" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	<!-- SELECT MENU -->
	<link href="{{asset('css/selectric.css')}}" rel="stylesheet">
	<!-- SIDE MENU -->
	<link rel="stylesheet" href="{{asset('css/jquery.sidr.dark.css')}}">
</head>

<body>

    	<!--KF KODE WRAPPER WRAP START-->
        <div class="kode_wrapper">
            <!-- register Modal -->
            <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
                {{-- @include('inc.messages') --}}
                <div class="modal-dialog">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-content">
                        <!--SIGNIN AS USER START-->
                        <div class="user-box">
                            <h2>Sign up as a User</h2>
                            <!--FORM FIELD START-->
                            <div class="form">
                                <form action="{{ route('register')}}" method="POST">
                                    @csrf
                                <div class="input-container">
                                    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="input-container">
                                    <input type="text" placeholder="E-mail" name="email" value="{{ old('email') }}">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="input-container">
                                    <input type="password" placeholder="Password" name="password">
                                    <i class="fa fa-unlock"></i>
                                </div>
                                <div class="input-container">
                                    <input type="password" placeholder="Comfirm Password" name="comfirm_password">
                                    <i class="fa fa-unlock"></i>
                                </div>
                                <div class="input-container">
                                    <label>
                                        <span class="radio">
                                            <input type="checkbox" name="foo" value="1" checked>
                                            <span class="radio-value" aria-hidden="true"></span>
                                        </span>
                                        <span>Remember me</span>
                                    </label>
                                </div>
                                <div class="input-container">
                                    <button class="btn-style">Sign Up</button>
                                </div>
                                </form>
                            </div>
                            <!--FORM FIELD END-->
                            <!--OPTION START-->
                            <div class="option">
                                <h5>Or Using</h5>
                            </div>
                            <!--OPTION END-->
                            <!--OPTION START-->
                            <div class="social-login">
                                <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                            </div>
                            <!--OPTION END-->
                        </div>
                        <!--SIGNIN AS USER END-->
                        <div class="user-box-footer">
                            Already have an account? <a href="/#" data-toggle="modal" data-target="#signin-box">Sign In</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- register Modal end-->

            <!-- SIGNIN MODEL START -->
            <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
                {{-- @include('inc.messages') --}}
                <div class="modal-dialog">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-content">
                        <div class="user-box">
                            <h2>Sign In</h2>
                            <!--FORM FIELD START-->
                            <div class="form">
                            <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                <div class="input-container">
                                    <input type="text" placeholder="E-mail" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="input-container">
                                    <input type="password" placeholder="Password" name="password">
                                    <i class="fa fa-unlock"></i>
                                </div>
                                <div class="input-container">
                                    <label>
                                        <span class="radio">
                                            <input type="checkbox" name="remember_me" value="1" checked>
                                            <span class="radio-value" aria-hidden="true"></span>
                                        </span>
                                        <span>Remember me</span>
                                    </label>
                                </div>
                                <div class="input-container">
                                    <button class="btn-style">Sign In</button>
                                </div>
                                </form>
                            </div>
                            <!--FORM FIELD END-->
                            <!--OPTION START-->
                            <div class="option">
                                <h5>Or Using</h5>
                            </div>
                            <!--OPTION END-->
                            <!--OPTION START-->
                            <div class="social-login">
                                <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                            </div>
                            <!--OPTION END-->

                        </div>
                        <div class="user-box-footer">
                            <p>Don't have an account?<br><a href="/#" data-toggle="modal" data-target="#reg-box">Sign up as a User</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- SIGNIN MODEL END -->

            <div id="sidr">
                <div class="logo_wrap">
                    <a href="index"><img src="{{asset('extra-images/logo.png')}}" alt=""></a>
                </div>
                <div class="clearfix clear"></div>
                <!-- Your content -->
                <div class="kf-sidebar">
                    <!--KF_SIDEBAR_SEARCH_WRAP START-->
                    <div class="widget widget-search">
                        <h2>Search Course</h2>
                        <form>
                            <input type="search" placeholder="Keyword...">
                        </form>
                    </div>
                    <!--KF_SIDEBAR_SEARCH_WRAP END-->

                    <!--KF_SIDEBAR_ARCHIVE_WRAP START-->
                    <div class="widget widget-archive ">
                        <h2>Archives</h2>
                        <ul class="sidebar_archive_des">
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i>January 2016</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i>February 2016</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i>March 2016</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i>April 2016</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i>May 2016</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i>June 2016</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i>August 2016</a>
                            </li>
                        </ul>
                    </div>
                    <!--KF_SIDEBAR_ARCHIVE_WRAP END-->

                    <p class="copy-right-sidr">Design and Developed by KodeForest @ All Rights Reserved by KodeForest</p>
                </div>
            </div>
                <!--HEADER START-->
                <header id="header_2">
                    {{-- @include('inc.messages') --}}
                    <!--kode top bar start-->
                    <div class="top_bar_2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="pull-left">
                                        <em class="contct_2"><i class="fa fa-phone"></i> Call Us  on 0800 123 46 4747</em>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="lng_wrap">
                                        @if (isset(Auth::user()->name))
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="glyphicon glyphicon-user"></i>{{auth()->user()->name}}
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="/users/{{Auth::user()->id}}/edit"><i></i>Update Profile</a></li>
                                                {{-- <form action="{{ route('logout') }}" method="POST" style="margin-left: 10px">
                                                    @csrf --}}
                                                    <li><a href="{{ route('logout') }}"><i></i>Logout</a></li>
                                                {{-- </form> --}}
                                            </ul>
                                        </div>
                                        @else
                                        <div>
                                            <button  class="btn btn-default">
                                            <i class="glyphicon glyphicon-user"></i>Welcome Guest
                                            </button>
                                           </div>
                                        @endif
                                    </div>
                                    @if (!isset(Auth::user()->name))
                                    <ul class="login_wrap">
                                        <li><a href="/#" data-toggle="modal" data-target="#reg-box"><i class="fa fa-user"></i>Register</a></li>
                                        <li><a href="/#" data-toggle="modal" data-target="#signin-box"><i class="fa fa-sign-in"></i>Sign In</a></li>
                                    </ul>


                                    @endif

                                    <ul class="top_nav">
                                        <li><a href="/blogs">News</a></li>
                                        <li><a href="/our-event">Event</a></li>
                                        <li><a href="/our-courses">Giving</a></li>
                                        <li><a href="/contactus">contact us</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--kode top bar end-->

                    <!--kode navigation start-->
                    <div class="kode_navigation">
                        @include('inc.messages')
                        <div id="mobile-header">
                            <a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="logo_wrap">
                                        <a href="index"><img src="{{asset('extra-images/logo_2.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <!--kode nav_2 start-->
                                    <div class="nav_2" id="navigation">
                                        <ul>
                                            <li><a href="/index">home</a></li>
                                            <li><a href="/aboutus">About Us</a></li>
                                            <li><a href="/our-event">Event</a></li>
                                            <li><a href="/blogs">Blog</a></li>
                                            <li><a href="/our-courses">Course</a></li>
                                            <li><a href="/our-teacher">Teacher</a></li>
                                            <li><a href="/filterable-gallery">Gallery</a></li>
                                            <li><a href="/contactus">Contact US</a></li>
                                            <li><a id="simple-menu" href="#sidr"><i class="fa fa-bars"></i></a></li>
                                        </ul>
                                        <!--DL Menu Start-->
                                        <div id="kode-responsive-navigation" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>
                                            <ul class="dl-menu">
                                                <li><a href="/index">home</a></li>
                                                <li><a href="/aboutus">about us</a></li>
                                                <li class="menu-item kode-parent-menu"><a href="our-event">Event</a></li>
                                                <li class="menu-item kode-parent-menu"><a href="blogs">Blog</a></li>
                                                <li class="menu-item kode-parent-menu"><a href="our-courses">Course</a></li>
                                                <li class="menu-item kode-parent-menu"><a href="our-teacher">Teacher</a></li>
                                                <li class="menu-item kode-parent-menu"><a href="filterable-gallery">Gallery</a></li>
                                                <li class="menu-item kode-parent-menu"><a href="contactus">Contact US</a></li>
                                            </ul>
                                        </div>
                                        <!--DL Menu END-->
                                    </div>
                                    <!--kode nav_2 end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--kode navigation end-->
                </header>
                <!--HEADER END-->






    <main>
        @yield('content')
    </main>





    <footer>
        <!--EDU2 FOOTER CONTANT WRAP START-->
            <div class="container">
                <div class="row">
                    <!--EDU2 FOOTER CONTANT DES START-->
                    <div class="col-md-3">
                        <div class="widget widget-links">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="aboutus">About us</a></li>
                                <li><a href="blogs">Our Stories</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Our History</a></li>
                                <li><a href="#">Sprcialist Info</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--EDU2 FOOTER CONTANT DES END-->

                    <!--EDU2 FOOTER CONTANT DES START-->
                    <div class="col-md-3">
                        <div class="widget widget-links">
                            <h5>Student Help</h5>
                            <ul>
                                <li><a href="#">My Info</a></li>
                                <li><a href="#">My Questions</a></li>
                                <li><a href="#">F.A.Q</a></li>
                                <li><a href="#">Serch Courses</a></li>
                                <li><a href="#">Latest Informations</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--EDU2 FOOTER CONTANT DES END-->

                    <!--EDU2 FOOTER CONTANT DES START-->
                    <div class="col-md-3">
                        <div class="widget wiget-instagram">
                            <h5>Instagram</h5>
                            <ul>
                                <li><a href="#"><img src="{{asset('extra-images/instagram-1.jpg')}}" alt=""/></a></li>
                                <li><a href="#"><img src="{{asset('extra-images/instagram-2.jpg')}}" alt=""/></a></li>
                                <li><a href="#"><img src="{{asset('extra-images/instagram-3.jpg')}}" alt=""/></a></li>
                                <li><a href="#"><img src="{{asset('extra-images/instagram-4.jpg')}}" alt=""/></a></li>
                                <li><a href="#"><img src="{{asset('extra-images/instagram-5.jpg')}}" alt=""/></a></li>
                                <li><a href="#"><img src="{{asset('extra-images/instagram-6.jpg')}}" alt=""/></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--EDU2 FOOTER CONTANT DES END-->

                    <!--EDU2 FOOTER CONTANT DES START-->
                    <div class="col-md-3">
                        <div class="widget widget-contact">
                            <h5>Contact</h5>
                            <ul>
                                <li>PO Box UN152468, 1 Street North, New Towm, California, USA</li>
                                <li>Phone : <a href="#"> 5 (012) 4565 789</a></li>
                                <li>Fax : <a href="#"> 5 (012) 4565 789</a></li>
                                <li>Email : <a href="#"> Info@info.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--EDU2 FOOTER CONTANT DES END-->
                </div>
            </div>
    </footer>
    <!--FOOTER END-->
    <!--COPYRIGHTS START-->
    <div class="edu2_copyright_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="edu2_ft_logo_wrap">
                        <a href="index"><img src="{{asset('extra-images/ft_logo.png')}}" alt=""/></a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="copyright_des">
                        <span>&copy; All Rights reserved. Powered By <a href="#">KODEFOREST</a></span>
                    </div>
                </div>

                <div class="col-md-3">
                    <ul class="cards_wrap">
                        <li><a href="#"><img src="{{asset('extra-images/visacard.png')}}" alt=""/></a></li>
                        <li><a href="#"><img src="{{asset('extra-images/mastercard.png')}}" alt=""/></a></li>
                        <li><a href="#"><img src="{{asset('extra-images/americancard.png')}}" alt=""/></a></li>
                        <li><a href="#"><img src="{{asset('extra-images/card.png')}}" alt=""/></a></li>
                        <li><a href="#"><img src="{{asset('extra-images/descoverycard.png')}}" alt=""/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--COPYRIGHTS START-->
</div>
<!--KF KODE WRAPPER WRAP END-->
<!--Bootstrap core JavaScript-->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!--Bx-Slider JavaScript-->
<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<!--Owl Carousel JavaScript-->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<!--Dl Menu Script-->
<script src="{{asset('js/dl-menu/modernizr.custom.js')}}"></script>
<!--Dl Menu Script-->
<script src="{{asset('js/dl-menu/jquery.dlmenu.js')}}"></script>
<!--Dl Menu Script-->
<script src="{{asset('js/dl-menu/modernizr.custom.js')}}"></script>
<!--Dl Menu Script-->
<script src="{{asset('js/dl-menu/jquery.dlmenu.js')}}"></script>
<!--Full Calender JavaScript-->
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/jquery.downCount.js')}}"></script>
<!--Image Filterable JavaScript-->
<script src="{{asset('js/jquery-filterable.js')}}"></script>
<!--Accordian JavaScript-->
<script src="{{asset('js/jquery.accordion.js')}}"></script>
<!--Number Count (Waypoints) JavaScript-->
<script src="{{asset('js/waypoints-min.js')}}"></script>
<!--v ticker-->
<script src="{{asset('js/jquery.vticker.min.js')}}"></script>
<!--select menu-->
<script src="{{asset('js/jquery.selectric.min.js')}}"></script>
<!--Side Menu-->
<script src="{{asset('js/jquery.sidr.min.js')}}"></script>
<!--Custom JavaScript-->
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('.comment_reply').on('click',function(){
            $('.replybox').hide();
            var commentboxid = $(this).attr('data-commentbox');
            $('#'+commentboxid).toggle();
        });

          $('.cancelbutton').on('click',function(){
              $('.replybox').hide();
          });

        // $.ajaxSetup({
        //      headers: {
        //          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //      }
        //  });


        //  $('.sendbutton').click(function(e){

        //      e.preventDefault();

        //      var reply_body = $("input[reply_body=reply_body]").var();
        //      var reply_id = $("input[reply_id=reply_id]").var();
        //      var comment_id = $("input[comment_id=comment_id]").var();

        //      $.ajax({
        //          type: "POST",
        //          url: " ",
        //          data: {reply_body:reply_body, reply_id:reply_id, comment_id:comment_id},
        //          dataType: 'json',
        //          success:function(data){
        //              alert(data.success);
        //          }
        //      }).error(function(){
        //          alert('An error occured');
        //      });
        //      //$('.replybox').hide();
        //  });
    });
</script>


</body>

<!-- Mirrored from kodeforest.net/html/uoe/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2019 11:04:26 GMT -->
</html>
