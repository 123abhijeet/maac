@extends('Customer.layouts.master')
@section('title','Modern Art And Crafts | Sign In')
@section('body')
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Login</li>
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
                            <h5 class="title">Already registered?</h5>
                        </div>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="row mb-n20">
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
                                <label>Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                                <div class="col-12 mb-20">					
                                    <button type="submit" class="btn">Sign In</button>		
                                    <span>Not a member?</span>
                                    <a href="{{route('register')}}" class="btn">Sign up</a>	
                                </div>
                                <div class="col-12 align-self-end mb-20">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                                @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    
				</div>
			</div>
		</div>
		<!-- Account Area End -->
@endsection
