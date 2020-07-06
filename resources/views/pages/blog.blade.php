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
								<h3>our blog</h3>
                        	</div>

                            <div class="kf_inr_breadcrumb">
								<ul>
									<li><a href="index">Home</a></li>
									<li><a href="#">blog</a></li>
                                    @if(isset(Auth::user()->id))
									    <li><a href="/blogs/create">add-post</a></li>
                                    @endif
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
    	<div class="inner-content-holder">
			<div class="container">
				<div class="row">
					<!--EDUCATION BLOG PAGE START-->
					<div class="col-md-8">
						<div class="edu2_blog_page">
    							<!--EDUCATION BLOG PAGE WRAP START-->
    						{{-- <div class="edu2_blogpg_wrap">
    							<div class="blog_slider_thumb">
									<div id="owl-demo-blog" class="owl-carousel owl-theme">
										<div class="item">
											<figure>
		    									<img src="extra-images/ourblog-1.jpg" alt=""/>
		    								</figure>
										</div>
										<div class="item">
											<figure>
		    									<img src="extra-images/ourblog-2.jpg" alt=""/>
		    								</figure>
										</div>
										<div class="item">
											<figure>
		    									<img src="extra-images/ourblog-3.jpg" alt=""/>
		    								</figure>
										</div>
									</div>

									<div class="customNavigation">
										<a class="btn prev"><i class="fa fa-angle-left"></i></a>
										<a class="btn next"><i class="fa fa-angle-right"></i></a>
									</div>
								</div>

								<div class="edu2_blogpg_des">
									<figure><img src="extra-images/ourblog-des-1.jpg" alt=""></figure>
									<ul>
										<li><i class="fa fa-calendar"></i>07 Jan, 2015</li>
										<li><i class="fa fa-comments-o"></i><a href="#">69 Comments</a></li>
										<li><i class="fa fa-user"></i><a href="#">John Doe</a></li>
									</ul>
									<h5>Excepteur sint occaecat cupidatat non proident</h5>
									<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
									<a href="blogs/show" class="blog-readmore">read more</a>
								</div>
							</div> --}}
							<!--EDUCATION BLOG PAGE WRAP END-->

							<!--EDUCATION BLOG PAGE WRAP START-->
                            @foreach ($blogs as $blog)
                            <div class="edu2_blogpg_wrap">
								<figure>
									<img src="/storage/blog_image/{{$blog->blog_image}}" alt="" style="width: 750px; height:500px"/>
								</figure>
								<div class="edu2_blogpg_des">
									<figure><img src="/storage/user_image/{{$blog->user->user_image}}" alt=""></figure>
									<ul>
										<li><i class="fa fa-calendar"></i>{{\Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</li>
										<li><i class="fa fa-comments-o"></i><a href="/blogs/{{$blog->id}}">{{count($blog->comments) + count($blog->replies)}} Comments</a></li>
										<li><i class="fa fa-user"></i><a href="/blogs/{{$blog->id}}">{{$blog->user->name}}</a></li>
									</ul>
									<h5>{{$blog->title}}</h5>
                                    <p>
                                        @if(strlen($blog->main_body) > 300)
                                            {{substr($blog->main_body,0,300)}}
                                            <a href="blogs/{{$blog->id}}" class="blog-readmore">read more</a>
								        @else
                                            {{$blog->main_body}}
                                            <a href="blogs/{{$blog->id}}" class="blog-readmore">read more</a>
								        @endif
                                    </p>
								</div>
							</div>
                            @endforeach
							<!--EDUCATION BLOG PAGE WRAP END-->


						</div>


						<div class="row">
	    					<div class="col-md-12">
								<!--KF_PAGINATION_WRAP START-->
								<div class="kf_edu_pagination_wrap">
									{{-- <ul class="pagination">
										<li>
											<a href="#" aria-label="Previous">
											<span aria-hidden="true"><i class="fa fa-angle-left"></i>PREV</span>
											</a>
										</li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li>
											<a href="" aria-label="Next">
											<span aria-hidden="true">Next<i class="fa fa-angle-right"></i></span>
											</a>
										</li>
                                    </ul> --}}
                                    {{$blogs->links()}}
								</div>
								<!--KF_PAGINATION_WRAP END-->
							</div>
	    				</div>

					</div>
					<!--EDUCATION BLOG PAGE END-->

				    <!--KF_EDU_SIDEBAR_WRAP START-->
					<div class="col-md-4">
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
                                        <a href="#"><i class="fa fa-angle-right"></i>January</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right"></i>February</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right"></i>March</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right"></i>April</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right"></i>May</a>
                                    </li>
                                </ul>
                            </div>
                            <!--KF_SIDEBAR_ARCHIVE_WRAP END-->


                            <!--KF SIDEBAR RECENT POST WRAP START-->
                            <div class="widget widget-recent-posts">
                                <h2>Recent Posts</h2>
                                @foreach ($blogs as $blog)
                                    <ul class="sidebar_rpost_des">
                                        <!--LIST ITEM START-->
                                        <li>
                                            <figure>
                                                <img src="/storage/blog_image/{{$blog->blog_image}}" alt="">
                                                <figcaption><a href="blogs/{{$blog->id}}"><i class="fa fa-search-plus"></i></a></figcaption>
                                            </figure>
                                            <div class="kode-text">
                                                <h6><a href="blogs/{{$blog->id}}">{{$blog->title}}</a></h6>
                                                <span><i class="fa fa-clock-o"></i>{{$blog->created_at->diffForHumans()}}</span>
                                            </div>
                                        </li>
                                        <!--LIST ITEM START-->
                                    </ul>
                                @endforeach
                            </div>
                            <!--KF SIDEBAR RECENT POST WRAP END-->

                            <!--KF EDU SIDEBAR COURSES CATEGORieS WRAP START-->
                            <div class="widget widget-categories">
                                <h2>categories</h2>
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Business &amp; Economics</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Politics &amp; History</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Medical Sciences &amp; Health</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Fine Arts</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Tourism &amp; Culture</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Sports</a></li>
                                </ul>
                            </div>
                            <!--KF EDU SIDEBAR COURSES CATEGORieS WRAP END-->

                            <!--KF SIDE BAR COURSES LIST WRAP START WRAP START-->
                            <div class="widget widget-courses-list">
                                <h2>Latest Courses</h2>
                                <ul>
                                    <li>
                                        <figure>
                                            <img src="extra-images/courseslist1.jpg" alt=""/>
                                            <a href="#">View Detail</a>
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <img src="extra-images/courseslist2.jpg" alt=""/>
                                            <a href="#">View Detail</a>
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <img src="extra-images/courseslist3.jpg" alt=""/>
                                            <a href="#">View Detail</a>
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <img src="extra-images/courseslist4.jpg" alt=""/>
                                            <a href="#">View Detail</a>
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <img src="extra-images/courseslist5.jpg" alt=""/>
                                            <a href="#">View Detail</a>
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <img src="extra-images/courseslist6.jpg" alt=""/>
                                            <a href="#">View Detail</a>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                            <!--KF SIDE BAR COURSES LIST WRAP START WRAP END-->

                            <!--KF SIDE BAR TAG CLOUD WRAP START-->
                            <div class="widget widget-tag-cloud">
                                <h2>Tags Cloud</h2>
                                <ul>
                                    <li><a href="#">Science</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Fine Arts</a></li>
                                    <li><a href="#">Research</a></li>
                                    <li><a href="#">Admissions</a></li>
                                    <li><a href="#">PHD</a></li>
                                    <li><a href="#">History &amp; Politics</a></li>
                                    <li><a href="#">Sports</a></li>
                                </ul>

                            </div>
                            <!--KF SIDE BAR TAG CLOUD WRAP END-->

                        </div>
                    </div>
					<!--KF EDU SIDEBAR WRAP END-->

				</div>
			</div>
    	</div>
        <!--Content Wrap End-->

@endsection
