
@extends('layouts.frontend')

@section('title')
  Home
 

@endsection

@section('content')
@include('layouts.inc.navbar')
<!--=====================================
=            Homepage Banner            =
======================================-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    @yield('title') | Iron Box
    </title>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{asset('home/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <!-- themify icon -->
  <link href="{{asset('home/plugins/themify-icons/themify-icons.css')}}" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="{{asset('home/plugins/slick/slick.css')}}" rel="stylesheet">
  <!-- Slick Carousel Theme -->
  <link href="{{asset('home/plugins/slick/slick-theme.css')}}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{asset('home/css/style.css')}}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{asset('home/images/favicon.png')}}" rel="stylesheet">
</head>

<!-- <img class="img-fluid" src="{{asset('home/ironbox-web-banner-01.jpg')}}" alt="iphone-banner"> -->
<section class="banner" style="background-color:red;" id="home">
	<div class="container">
		<div class="row">
	
			<div class="col-md-7 align-self-center">
			
				<div class="content-block">
					<h1 style="font-size:3em;">Download Our App From PlayStore</h1>
					<!-- <h5>Let you track everything in your life with a simple way</h5> -->
			
					<div class="app-badge" >
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="https://play.google.com/store/apps/details?id=co.mindwhiz.ironbox" target="_blank" class="btn btn-download"><i class="ti-android"></i>
									<div>Get it on the<span>GOOGLE PLAY</span></div>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" target="_blank"  class="btn btn-download"><i class="ti-apple"></i>
									<div>Available on the<span>Apple store</span></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-5">
		
				<div class="image-block">
					<img class="img-fluid phone-thumb" src="{{asset('home/images/phones/banner-main.png')}}" alt="iphone-banner">
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Homepage Banner  ====-->

<!--===========================
=            About            =
============================-->

<!-- <section class="about section bg-2" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center text-center">
	
				<div class="image-block">
					<img class="phone-thumb-md" src="{{asset('home/images/phones/iphone-feature.png')}}" alt="iphone-feature" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6 col-md-10 m-md-auto align-self-center ml-auto">
				<div class="about-block">
				
					<div class="about-item">
						<div class="icon">
							<i class="ti-palette"></i>
						</div>
						<div class="content">
							<h5>Creative Design</h5>
							<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
								and I will give you a complete accounta</p>
						</div>
					</div>
				
					<div class="about-item active">
						<div class="icon">
							<i class="ti-panel"></i>
						</div>
						<div class="content">
							<h5>Easy to Use</h5>
							<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
								and I will give you a complete accounta</p>
						</div>
					</div>
				
					<div class="about-item">
						<div class="icon">
							<i class="ti-vector"></i>
						</div>
						<div class="content">
							<h5>Best User Experience</h5>
							<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
								and I will give you a complete accounta</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!--====  End of About  ====-->

<!--==============================
=            Features            =
===============================-->

<!-- <section class="section feature" id="feature">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>App Features</h2>
					<p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee idea of
						denouncing pleasure and praising</p>
				</div>
			</div>
		</div>
		<div class="row bg-elipse">
			<div class="col-lg-4 align-self-center text-center text-lg-right">
			
				<div class="feature-item">
				
					<div class="icon">
						<i class="ti-brush-alt"></i>
					</div>
				
					<div class="content">
						<h5>Beautiful Interface Design</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
				
				<div class="feature-item">
				
					<div class="icon">
						<i class="ti-gift"></i>
					</div>
			
					<div class="content">
						<h5>Unlimited Features</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center">
			
				<div class="feature-item mb-0">
		
					<div class="icon">
						<i class="ti-comments"></i>
					</div>
				
					<div class="content">
						<h5>Full free chat</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
				<div class="app-screen">
					<img class="img-fluid" src="{{asset('home/images/phones/i-phone-screen.png')}}" alt="app-screen">
				</div>
		
				<div class="feature-item">
				
					<div class="icon">
						<i class="ti-support"></i>
					</div>
				
					<div class="content">
						<h5>24/7 support by real people</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center text-lg-left align-self-center">
		
				<div class="feature-item">
				
					<div class="icon">
						<i class="ti-image"></i>
					</div>
				
					<div class="content">
						<h5>Retina ready greaphics</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
	
				<div class="feature-item">
		
					<div class="icon">
						<i class="ti-pie-chart"></i>
					</div>
			
					<div class="content">
						<h5>IOS & android version </h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!--====  End of Features  ====-->


<!--=============================================
=            Call to Action Download            =
==============================================-->

<!-- <section class="cta-download bg-3 overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 text-center">
				<div class="image-block"><img class="phone-thumb img-fluid" src="{{asset('home/images/phones/iphone-chat.png')}}" alt=""></div>
			</div>
			<div class="col-lg-7">
				<div class="content-block">
					<h2>Free Download Now</h2>
					<p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee idea of
						denouncing pleasure and praising</p>
			
					<div class="app-badge">
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#" class="btn btn-download"><i class="ti-android"></i>
									<div>Get it on the<span>GOOGLE PLAY</span></div>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-download"><i class="ti-apple"></i>
									<div>Available on the<span>Apple store</span></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!--====  End of Call to Action Download  ====-->

<!--=============================
=            Counter            =
==============================-->

<!-- <section class="section counter bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
				<div class="counter-item">
					<h3><span class="count" data-count="29">220</span>k</h3>
					<p>Download</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
				<div class="counter-item">
					<h3><span class="count" data-count="200">130</span>k</h3>
		
					<p>Active Account</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
				<div class="counter-item">
			
					<h3><span class="count" data-count="60">1200</span>k<sup>+</sup></h3>
			
					<p>Happy User</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
				<div class="counter-item">
				
					<h3><span class="count" data-count="300">700</span><sup>+</sup></h3>
			
					<p>Trainers</p>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!--====  End of Counter  ====-->

<!--====  End of Testimonial  ====-->

<!-- <section class="section cta-subscribe" id="contact">
	<div class="container">
		<div class="row bg-elipse-red">
			<div class="col-lg-4">
				<div class="image"><img class="phone-thumb" src="{{asset('home/images/phones/iphone-banner.png')}}" alt="iphone-app"></div>
			</div>
			<div class="col-lg-8 align-self-center">
				<div class="content">
					<div class="mb-4">
						<h2>Join Us As Trainer</h2>
					</div>
					<div class="description">
						<p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee idea of denouncing pleasure and praising.Demoralized by the, so blinded by desire, that they cannot foresee idea. that they cannot foresee idea.</p>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</section> -->

<!--============================
=            Footer            =
=============================-->

<!-- <footer class="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mr-auto">
        <div class="footer-logo">
          <img src="{{asset('home/images/ironbox_logo.png')}}" width="100" height="100" alt="footer-logo">
        </div>
        <div class="copyright">
          <p>Copyright © 2021 IRONBOX | Design and Developed By : <a href="https://mindwhiz.co/" target="_blank">Mindwhiz Pvt Ltd.</a>
          </p>
        </div>
      </div>
      <div class="col-lg-6 text-lg-right">

        <ul class="social-icons list-inline">
          <li class="list-inline-item">
            <a target="_blank" href="https://facebook.com/themefisher"><i class="text-primary ti-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a target="_blank" href="https://twitter.com/themefisher"><i class="text-primary ti-twitter-alt"></i></a>
          </li>
          <li class="list-inline-item">
            <a target="_blank" href="https://github.com/themefisher"><i class="text-primary ti-linkedin"></i></a>
          </li>
          <li class="list-inline-item">
            <a target="_blank" href="https://instagram.com/themefisher"><i class="text-primary ti-instagram"></i></a>
          </li>
        </ul>
      
        <ul class="footer-links list-inline">
          <li class="list-inline-item">
            <a class="scrollTo" href="#home">ABOUT</a>
          </li>
          <li class="list-inline-item">
            <a class="scrollTo" href="/privacy-policy">PRIVACY POLICY</a>
          </li>
          <li class="list-inline-item">
            <a class="scrollTo" href="/faqs">FAQ's</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer> -->

@endsection

@section('scripts')

<!-- home js start -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>

<script src="{{asset('home/plugins/jquery/jquery.js')}}"></script>
<script src="{{asset('home/plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('home/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('home/js/custom.js')}}"></script>

<!-- home js end -->
@endsection
