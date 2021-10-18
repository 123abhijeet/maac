@extends('Customer.layouts.master')
@section('title','Modern Art And Crafts | Contact')
@section('body')
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Contact us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->
        		
        <!-- Contact Area Area Start -->
		<div class="section-padding-sm">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                        
                        <div class="contact-wrap">
                            <h5 class="title">Send a Message</h5>
                            <form action="https://template.hasthemes.com/goetze/goetze/php/mail.php" method="post" id="contact-form">
                                <div class="row mb-n20">
                                    
                                    <div class="col-md-4 col-12 mb-20">
                                        <div class="row mb-n20">
                                            
                                            <div class="col-12 mb-20">
                                                <label>Your Name</label>
                                                <input type="text" name="name">
                                            </div>
                                            
                                            <div class="col-12 mb-20">
                                                <label>Your Email</label>
                                                <input type="email" name="email">
                                            </div>
                                            
                                            <div class="col-12 mb-20">
                                                <label>Subject</label>
                                                <select name="subject">
													<option selected="selected">-- Choose --</option>
													<option value="Customer service">Customer service</option>
													<option value="Webmaster">Webmaster</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-8 col-12 mb-20">
                                        <label>Message</label>
                                        <textarea name="message"></textarea>
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <input type="submit" value="send message">
                                    </div>
                                    
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                        
					</div>
				</div>
			</div>
		</div>
        <!-- Contact Area Area End -->
@endsection