@extends('layouts.body')

@section('content')


        <!--Banner Wrap Start-->
        <div class="kf_inr_banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    	<!--KF INR BANNER DES Wrap Start-->
                        <div class="kf_inr_ban_des">
                        	<div class="inr_banner_heading">
								<h3>Contact US</h3>
                        	</div>

                            <div class="kf_inr_breadcrumb">
								<ul>
									<li><a href="index">Home</a></li>
									<li><a href="#">contact us</a></li>
								</ul>
							</div>
                        </div>
                        <!--KF INR BANNER DES Wrap End-->
                    </div>
                </div>
            </div>
        </div>

        <!--Banner Wrap End-->

    	<!--Content Wrap Start-->
    	<div class="kf_content_wrap">
    		<div class="kf_location_wrap">
				<div id="map-canvas" class="map-canvas"></div>
    		</div>
    		<section>
    			<div class="container">
    				<div class="row">
    					<div class="contct_wrap">
    						<form action="{{route('contacting')}}" method="POST">
                                @csrf
		    					<div class="col-md-8">
		    						<div class="contact_heading">
		    							<h4>Sent A Message</h4>
		    						</div>
		    						<div class="row">
		    							<div class="col-md-6">
		    								<div class="contact_des">
		    									<div class="inputs_des">
		    										<span><i class="fa fa-user"></i>Name</span>
		    										<input type="text" name="name" value="{{old('name')}}">
		    									</div>

		    									<div class="inputs_des">
		    										<span><i class="fa fa-envelope-o"></i>E-mail</span>
		    										<input type="text" name="email" value="{{old('email')}}">
		    									</div>

		    									<div class="inputs_des">
		    										<span><i class="fa fa-file-text-o"></i>Subject</span>
		    										<input type="text" name="subject" value="{{old('subject')}}">
		    									</div>
		    									<button>Submit</button>
		    								</div>
		    							</div>
		    							<div class="col-md-6">
		    								<div class="inputs_des">
		    									<span><i class="fa fa-comments-o"></i>Comemnts</span>
		    									<textarea name="message">{{old('message')}}</textarea>
		    								</div>
		    							</div>
		    						</div>
		    					</div>

		    					<div class="col-md-4">
		    						<div class="contact_heading">
		    							<h4>Contact info</h4>
		    							<p>Sed ut imperdiet nisi. Proin condimentum . Etiam pharetra erat sed fermentum feugiat velit mauris egestas quam ut aliquam .</p>
		    						</div>
		    						<ul class="contact_meta">
										<li><i class="fa fa-home"></i>99123 Street Down Town, California, USA</li>
										<li><i class="fa fa-phone"></i><a href="#"> 5 (012) 4565 789</a></li>
										<li><i class="fa fa-envelope-o"></i><a href="#"> Info@info.com</a></li>
									</ul>
									<div class="contact_heading social">
		    							<h4>Get Social</h4>
		    						</div>
		    						<ul class="cont_socil_meta">
										<li><a href="#"><i class="fa fa-envelope"></i></a></li>
										<li><a href="#"><i class="fa fa-skype"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									</ul>
		    					</div>
		    				</form>
	    				</div>
    				</div>
    			</div>
    		</section>
    	</div>
        <!--Content Wrap End-->

@endsection
