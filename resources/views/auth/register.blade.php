@extends('Customer.layouts.master')
@section('title','Modern Art And Crafts | Sign Up')
@section('body')
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->
        	
		<!-- Account Area Start -->
		<div class="section-padding-sm">
			<div class="container">
				<div class="row mb-n30">

                    <div class="col-lg-6 col-12 mb-30">
                        <div class="block-title">
                            <h5 class="title">Create an account</h5>
                        </div>
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="row mb-n20">
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Mobile number</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Retype Password</label>
                                    <input type="password" name="password_confirmation">
                                </div>
                                <div class="col-12 mb-20">					
                                    <button type="submit" class="btn">Sign up</button>
                                </div>
                            </div>
                        </form>
                    </div>     
				</div>
			</div>
		</div>
		<!-- Account Area End -->
@endsection