@extends('frontend.layouts.main')
@section('main-container')
		<!-- Banner/Slider -->
		<div id="slider" class="banner banner-slider carousel slide carousel-fade">
			<!-- Wrapper for Slides -->
			<div class="carousel-inner">
				<div class="item active">
					<!-- Set the first background image using inline CSS below. -->
					<div class="fill" style="background-image:url({{url('frontend/image/slider-oil-a.jpg')}});">
						<div class="banner-content">
							<div class="container">
								<div class="row">
									<div class="banner-text al-left pos-left dark">
										<div class="animated fadeInRight">
											<h2 class="ucap">Leading Provider of Industrial Solutions</h2>
											<p>Ullamcorper fringi tortor consec adipis elit sed do eiusmod tempor.</p>
											<div class="banner-cta">
												<a class="btn" href="solution-single.html">Learn More</a>
												<a class="btn btn-alt btn-outline" href="contact.html">Contact Us</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<!-- Set the second background image using inline CSS below. -->
					<div class="fill" style="background-image:url({{url('frontend/image/slider-welding-b.jpg')}});">
						<div class="banner-content">
							<div class="container">
								<div class="row">
									<div class="banner-text al-left pos-left light">
										<div class="animated fadeInRight">
											<h2 class="ucap">Highest standards <br>of conduct</h2>
											<p>Massa sit amet ullamcorper fringilla tortor consec adipis elit sedsmod.</p>
											<div class="banner-cta">
												<a class="btn" href="solution-single-alter.html">Learn More</a>
												<a class="btn btn-light btn-outline" href="contact.html">Contact Us</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<!-- Set the third background image using inline CSS below. -->
					<div class="fill" style="background-image:url({{url('frontend/image/slider-mine-a.jpg')}});">
						<div class="banner-content">
							<div class="container">
								<div class="row">
									<div class="banner-text al-left pos-left light">
										<div class="animated fadeInRight">
											<h2 class="ucap">We are team of the professionals</h2>
											<p>Praesent gravida massa sit amet ullamcorper fringilla tortor consec.</p>
											<div class="banner-cta">
												<a class="btn" href="solution-single-extend.html">Learn More</a>
												<a class="btn btn-light btn-outline" href="contact.html">Contact Us</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- #end Banner/Slider -->
	</header>
	<!-- End Header -->

	<!-- Service Section -->
	<div class="section section-services section-pad">
	    <div class="container">
	        <div class="content row">
	        	<!-- Feature Row  -->
				<div class="feature-row feature-service-row row">
					<div class="col-md-4 col-sm-6 even first">
						<!-- feature box -->
						<div class="feature boxed">
							<a href="solution-single.html">
								<div class="fbox-photo">
									<img src="{{url('frontend/image/photo-sm-main-a.jpg')}}" alt="">
								</div>
							</a>
							<div class="fbox-content">
								<h3><a href="solution-single.html">Agricultural Engineering</a></h3>
								<p>Agricultural engineers may perform tasks such as planning consec adipis elit sed do eiusmod tempor incididut et dolore labore.</p>
								<p><a href="solution-single.html" class="btn-link">Learn More</a></p>
							</div>
						</div>
						<!-- End Feature box -->
					</div>
					<div class="col-md-4 col-sm-6 odd">
						<!-- feature box -->
						<div class="feature boxed">
							<a href="solution-single-alter.html">
								<div class="fbox-photo">
									<img src="{{url('frontend/image/photo-sm-main-b.jpg')}}" alt="">
								</div>
							</a>
							<div class="fbox-content">
								<h3><a href="solution-single-alter.html">Chemical Research Engineering</a></h3>
								<p>Areas tackled in the most fundamental parts of medical research consec adipis elit sed do eiusmod tempor incididut labore dolore.</p>
								<p><a href="solution-single-alter.html" class="btn-link">Learn More</a></p>
							</div>
						</div>
						<!-- End Feature box -->
					</div>
					<div class="col-md-4 col-sm-6 even">
						<!-- feature box -->
						<div class="feature boxed">
							<a href="solution-single-extend.html">
								<div class="fbox-photo">
									<img src="{{url('frontend/image/photo-sm-main-c.jpg')}}" alt="">
								</div>
							</a>
							<div class="fbox-content">
								<h3><a href="solution-single-extend.html">Material Science and Engineering</a></h3>
								<p>Metal profile sheet systems provide an efficient and reliable consec adipis elit sed do eiusmod tempor incididut labore et dolore.</p>
								<p><a href="solution-single-extend.html" class="btn-link">Learn More</a></p>
							</div>
						</div>
						<!-- End Featur box -->
					</div>
					<div class="col-md-4 col-sm-6 odd">
						<!-- featured box -->
						<div class="feature boxed">
							<a href="solution-single.html">
								<div class="fbox-photo">
									<img src="{{url('frontend/image/photo-sm-main-d.jpg')}}" alt="">
								</div>
							</a>
							<div class="fbox-content">
								<h3><a href="solution-single.html">Mechanical Engineering</a></h3>
								<p>Engineering is a professional discipline that deals with the consec adipis elit sed do eiusmod tempor incididut labore et dolore.</p>
								<p><a href="solution-single.html" class="btn-link">Learn More</a></p>
							</div>
						</div>
						<!-- End Feature box -->
					</div>
					<div class="col-md-4 col-sm-6 odd">
						<!-- featured box -->
						<div class="feature boxed">
							<a href="solution-single-alter.html">
								<div class="fbox-photo">
									<img src="{{url('frontend/image/photo-sm-main-e.jpg')}}" alt="">
								</div>
							</a>
							<div class="fbox-content">
								<h3><a href="solution-single-alter.html">Oil and Gas</a></h3>
								<p>Oil and gas exploration is the search by petroleum geologists and adipis elit sed do eiusmod tempor incididut labore et dolore.</p>
								<p><a href="solution-single-alter.html" class="btn-link">Learn More</a></p>
							</div>
						</div>
						<!-- End Feature box -->
					</div>
					<div class="col-md-4 col-sm-6 odd">
						<!-- featured box -->
						<div class="feature boxed">
							<a href="solution-single-extend.html">
								<div class="fbox-photo">
									<img src="{{url('frontend/image/photo-sm-main-f.jpg')}}" alt="">
								</div>
							</a>
							<div class="fbox-content">
								<h3><a href="solution-single-extend.html">Power and Energy</a></h3>
								<p>Energy source that is an alternative to fossil dolor sit amet consec adipis elit sed do eiusmod tempor incididut labore et dolore.</p>
								<p><a href="solution-single-extend.html" class="btn-link">Learn More</a></p>
							</div>
						</div>
						<!-- End Feature box -->
					</div>
				</div>
				<!-- Feture Row  #end -->
	        </div>
	    </div>
	</div>
	<!-- End Section -->

	<!--Content  -->
	<div class="bg-light section-pad">
		<div class="container">
			<div class="content row">

				<div class="wide-sm center">
					<h1>A hight level service provider that recommended to any companies, firms or industries.</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a enim aliquam, condimentum nisl a, laoreet lectus. Aliquam convallis sed elit nec vehicula. Praesent gravida, massa sit amet ullamcorper fringilla, tortor nunc ultrices dui porttitor mi non, elementum dui.</p>
				</div>

			</div>
		</div>
	</div>
	<!-- End conetnt -->

	<!-- Content -->
	<div class="section section-about section-pad">
		<div class="container">
			<div class="content row">

				<div class="row row-vm">
					<div class="col-md-6 res-m-bttm">
						<h2>We are team of the professionals who will build everything for you</h2>
						<p>Vivamus finibus accumsan ultricies orem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend consequat metus, ac egestas tortor placerat vehicula. Nulla tincidunt risus nisl, sed iaculis elit dapibus id. Suspendisse quis lorem nibh. Fusce a magna sollicitudin, semper justo a sagittis.</p>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curay. Fusce a magna sollicitudin, semper justo a sagittis est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curay.</p>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<img src="{{url('frontend/image/photo-sm-main-g.jpg')}}" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End content -->

	<!-- CTA-Parallax -->
	<div class="call-action has-parallax cta-large" style="background-image: url({{url('frontend/image/plx-dark-default.jpg')}});">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-content wide-sm center">
						<h2>We provide innovative product solutions for sustainable progress.</h2>
						<p>Here is important that you state all your requirements and our team of engineers with a lot of experience will present you with the possible solution for your needs</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Call Action -->
	<div class="call-action cta-small">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h3>Any kind of business solution or consultation don’t hesitate to contact.</h3>
						<a class="btn btn-light" href="contact.html">Contact Us</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Project Section -->
	<div class="section section-projects recent-project section-pad">
	    <div class="container">
	        <div class="content row">

				<h2 class="heading-section center">Ongoing Project</h2>
	        	<!-- Projects/Feature Row  -->
				<div class="feature-row feature-project-row mgfix">
					<div class="owl-carousel loop has-carousel" data-items="4" data-navs="true">
						<div class="even">
							<!-- featured box  -->
							<div class="feature feature-project boxed">
								<a href="project-single.html">
									<div class="fbox-photo">
										<img src="{{url('frontend/image/work-sm-a.jpg')}}" alt="">
									</div>
								</a>
								<div class="fbox-content">
									<h3><a href="project-single.html">Altria Warehouse Complex</a></h3>
								</div>
							</div>
							<!-- End -->
						</div>
						<div class="odd">
							<!-- featured box -->
							<div class="feature feature-project boxed">
								<a href="project-single.html">
									<div class="fbox-photo">
										<img src="{{url('frontend/image/work-sm-c.jpg')}}" alt="">
									</div>
								</a>
								<div class="fbox-content">
									<h3><a href="project-single.html">Apollo Hill Project</a></h3>
								</div>
							</div>
							<!-- End -->
						</div>
						<div class="even">
							<!-- featured box -->
							<div class="feature feature-project boxed">
								<a href="project-single.html">
									<div class="fbox-photo">
										<img src="{{url('frontend/image/work-sm-b.jpg')}}" alt="">
									</div>
								</a>
								<div class="fbox-content">
									<h3><a href="project-single.html">Balko Wind Power</a></h3>
								</div>
							</div>
							<!-- End -->
						</div>
						<div class="odd">
							<!-- featured box -->
							<div class="feature feature-project boxed">
								<a href="project-single.html">
									<div class="fbox-photo">
										<img src="{{url('frontend/image/work-sm-e.jpg')}}" alt="">
									</div>
								</a>
								<div class="fbox-content">
									<h3><a href="project-single.html">Rocky Forge Refinary</a></h3>
								</div>
							</div>
							<!-- End -->
						</div>
						<div class="odd">
							<!-- featured box -->
							<div class="feature feature-project boxed">
								<a href="project-single.html">
									<div class="fbox-photo">
										<img src="{{url('frontend/image/work-sm-f.jpg')}}" alt="">
									</div>
								</a>
								<div class="fbox-content">
									<h3><a href="project-single.html">Mingo Village Mining</a></h3>
								</div>
							</div>
							<!-- End -->
						</div>
					</div>
				</div>
				<!-- Projects/Feature Row  #end -->

	        </div>
	    </div>
	</div>
	<!-- End Section -->

	<!-- Testimonials -->
	<div class="section section-quotes section-pad bg-light">
		<div class="container">
			<div class="content row">

				<div class="col-md-offset-2 col-md-8 center">
					<h2 class="heading-section">What Our Client Says</h2>
				</div>
				<div class="gaps"></div>
				<div class="testimonials">
					<div id="testimonial" class="quotes-slider col-md-8 col-md-offset-2">
						<div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true">
							<div class="item">
								<!-- Each Quotes -->
								<div class="quotes">
									<div class="quotes-text center">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.</p>
									</div>
									<div class="profile">
										<h5>John Doe</h5>
										<h6>CEO, Company Name</h6>
									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<!-- End Slide -->
							<!-- Each Slide -->
							<div class="item">
								<!-- Each Quotes -->
								<div class="quotes">
									<div class="quotes-text center">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam.</p>
									</div>
									<div class="profile">
										<h5>John Doe</h5>
										<h6>CEO, Company Name</h6>
									</div>
								</div>
								<!-- End Quotes -->
							</div>
						</div>
						<!-- End Slide -->
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Latest News -->
	<div class="section section-news section-pad">
		<div class="container">
			<div class="content row">

				<h2 class="heading-section center">Industry Latest News</h2>

				<div class="row">
					<!-- Blog Post Loop -->
					<div class="blog-posts">
						<div class="post post-loop  col-md-4">
							<div class="post-thumbs">
								<a href="news-details.html"><img alt="" src="{{url('frontend/image/post-thumb-a.jpg')}}"></a>
							</div>
							<div class="post-entry">
								<div class="post-meta"><span class="pub-date">15, Jun 2017</span></div>
								<h2><a href="news-details.html">Power Technology solar programme welcomes</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip ex ea commodo consequat...</p>
								<a class="btn btn-alt" href="#">Read More</a>
							</div>
						</div>
						<div class="post post-loop col-md-4">
							<div class="post-thumbs">
								<a href="news-details.html"><img alt="" src="{{url('frontend/image/post-thumb-b.jpg')}}"></a>
							</div>
							<div class="post-entry">
								<div class="post-meta"><span class="pub-date">04, Mar 2017</span></div>
								<h2><a href="news-details.html">Is your home/place suitable for solar energy?</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip ex ea commodo consequat...</p>
								<a class="btn btn-alt" href="#">Read More</a>
							</div>
						</div>
						<div class="post post-loop col-md-4">
							<div class="post-thumbs">
								<a href="news-details.html"><img alt="" src="{{url('frontend/image/post-thumb-c.jpg')}}"></a>
							</div>
							<div class="post-entry">
								<div class="post-meta"><span class="pub-date">26, Nov 2016</span></div>
								<h2><a href="news-details.html">Renewables become the largest source of power capacity</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip ex ea commodo consequat...</p>
								<a class="btn btn-alt" href="#">Read More</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Client logo -->
	<div class="section section-logos section-pad-md bdr-top bg-light">
		<div class="container">
			<div class="content row">

				<div class="owl-carousel loop logo-carousel">
					<div class="logo-item"><img alt="" width="190" height="82" src="{{url('frontend/image/cl-logo1.png')}}"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="{{url('frontend/image/cl-logo2.png')}}"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="{{url('frontend/image/cl-logo3.png')}}"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="{{url('frontend/image/cl-logo4.png')}}"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="{{url('frontend/image/cl-logo5.png')}}"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="{{url('frontend/image/cl-logo6.png')}}"></div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Call Action -->
	<div class="call-action bg-primary">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h3>Looking an Adequate Solution for your Company?</h3>
						<p>Contact us today for free conslutaion or more information.</p>
						<a class="btn btn-outline" href="get-a-quote.html">Get In Touch</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->
@endsection
