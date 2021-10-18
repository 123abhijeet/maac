@extends('Customer.layouts.master')
@section('title','Modern Art And Crafts | About Us')
@section('body')
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->	
        
		<div class="section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h3 class="title">About Us</h3>
				</div>
				<div class="row mb-n25">
				
					<div class="col-lg-5 col-12 mb-25 order-lg-2">
						<img src="{{asset('customer/images/about/ab.webp')}}" alt="" />
					</div>
					
					<div class="col-lg-7 col-12 mb-25">
						<h4>The standard lorem ipsum passage</h4>
						<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<blockquote>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur illum qui dolorem.</p>
						</blockquote>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu.</p>
					</div>
					
				</div>
			</div>
		</div>
       
        <!-- Our Team Start -->		
		<div class="section-padding pt-0">
			<div class="container">
				<div class="section-title text-center">
					<h3 class="title">Meet the team</h3>
				</div>
				<div class="row">
				
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="team-image">
								<img width="250" height="250" src="{{asset('customer/images/about/1.webp')}}" class="img-responsive" alt="team4">
								<div class="mask">
									<div class="mask-inner">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
							<div class="team-info">
								<h5>Martin Demichelis</h5>
								<h6>PHP Developer</h6>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="team-image">
								<img width="250" height="250" src="{{asset('customer/images/about/2.webp')}}" class="img-responsive" alt="team4">
								<div class="mask">
									<div class="mask-inner">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
							<div class="team-info">
								<h5>Luka Biglia</h5>
								<h6>Programmer</h6>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="team-image">
								<img width="250" height="250" src="{{asset('customer/images/about/3.webp')}}" class="img-responsive" alt="team4">
								<div class="mask">
									<div class="mask-inner">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
							<div class="team-info">
								<h5>Havier Macherano</h5>
								<h6>Developer</h6>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="team-image">
								<img width="250" height="250" src="{{asset('customer/images/about/4.webp')}}" class="img-responsive" alt="team4">
								<div class="mask">
									<div class="mask-inner">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
							<div class="team-info">
								<h5>Martin Demichelis</h5>
								<h6>PHP Developer</h6>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
        <!-- Our Team Start -->	
@endsection