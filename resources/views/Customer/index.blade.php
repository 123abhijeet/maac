@extends('Customer.layouts.master')
@section('title','Modern Art And Crafts | Home')
@section('body')
@include('Customer.layouts.slider')
		<!--Service Area Start-->
		<div class="service-area section-padding">
		    <div class="container">
		        <div class="row mb-n20">
                
		            <div class="col-md-4 col-sm-6 mb-20">
		                <div class="service">
		                    <i class="pe-7s-download"></i>
		                    <h4>FREE SHIPPING</h4>
		                    <p>All order on products</p>
		                </div>
		            </div>
		            
		            <div class="col-md-4 col-sm-6 mb-20">
		                <div class="service">
		                    <i class="pe-7s-refresh-2"></i>
		                    <h4>FREE RETURNS</h4>
		                    <p>Only in 30 days</p>
		                </div>
		            </div>
		            
		            <div class="col-md-4 col-sm-6 mb-20">
		                <div class="service">
		                    <i class="pe-7s-chat"></i>
		                    <h4>SUPPORT 24/7</h4>
		                    <p>Active support</p>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
		<!--Service Area End-->
		<!-- Coder@bhijeet -->
		<!--Featured Area Start-->
		<div class="featured-area section-padding">
		    <div class="container">
		    
				<div class="section-title title-shape text-center">
					<h4 class="title">Featured products</h4>
				</div>
            
		        <div class="custom-row">
					<!--Product Slider Start-->
					<div class="product-slider indicator-style owl-carousel">
					
						<!--Single Product -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Dress">
											<img src="{{asset('customer/images/featured/1.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 61.19</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--Single Product -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Summer Dress">
											<img src="{{asset('customer/images/featured/2.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<span class="sale-label">Sale!</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 34.78</span>
										<span class="old-price">£ 36.61</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--Single Product -->
                        	<!-- Coder@bhijeet -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Summer Dress">
											<img src="{{asset('customer/images/featured/3.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 36.60</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--Single Product -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
                                	<!-- Coder@bhijeet -->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Chiffon Dress">
											<img src="{{asset('customer/images/featured/4.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 21.65</span>
										<span class="old-price">£ 24.60</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--Single Product -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Dress">
											<img src="{{asset('customer/images/featured/5.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 31.20</span>
									</div>
								</div>
							</div>
						</div>
						
					</div><!--Product Slider End-->
		        </div>
		    </div>
		</div>
		<!--Featured Area End-->
		
		<!--Deal Area Start-->
		<div class="deal-area section-padding">
		    <div class="container">
		    
				<div class="section-title white title-shape text-center">
					<h4 class="title">Deal of the day</h4>
				</div>
            
		        <div class="custom-row">
					<div class="product-slider-2 indicator-button owl-carousel">
					
						<!--Deal Single Product -->
                        	<!-- Coder@bhijeet -->
						<div class="custom-col">
                            <div class="deal-single-product">
                                <div class="row gx-0">
                                    <div class="col-sm-6">
                                        <div class="left-item">
                                                <!--Product Image-->
                                                <a href="product-details.html" title="Printed Summer Dress">
                                                    <img src="{{asset('customer/images/featured/2.webp')}}" alt="">
                                                </a>
                                                <span class="new-label">New</span>
                                                <span class="sale-label">Sale!</span>
                                                <!--Product Cuntdown-->
                                                <div class="product-cuntdown">
                                                    <div class="timer">
                                                        <div data-countdown="2022/06/01"></div>
                                                    </div>	
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-sm-6">
                                        <div class="deal-product-content">
                                            <h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with...</p>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 34.78</span>
                                                <span class="old-price">£ 36.61</span>
                                            </div>
                                            <!--Product Action-->
                                            <div class="deal-product-action">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                </a>
                                                <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						
						<!--Deal Single Product -->
						<div class="custom-col">
                            <div class="deal-single-product">
                                <div class="row gx-0">
                                    <div class="col-sm-6">
                                        <div class="left-item">
                                            <!--Product Image-->
                                            <a href="product-details.html" title="Printed Chiffon Dress">
                                                <img src="{{asset('customer/images/featured/4.webp')}}" alt="">
                                            </a>
                                            <span class="new-label">New</span>
                                            <!--Product Cuntdown-->
                                            <div class="product-cuntdown">
                                                <div class="timer">
                                                    <div data-countdown="2022/09/01"></div>
                                                </div>	
                                            </div>									
                                        </div>
                                    </div>								
                                    <div class="col-sm-6">
                                        <div class="deal-product-content">
                                            <h5 class="title"><a href="product-details.html" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with...</p>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                            <!--Product Action-->
                                            <div class="deal-product-action">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                </a>
                                                <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						
						<!--Deal Single Product -->
						<div class="custom-col">
                            <div class="deal-single-product">
                                <div class="row gx-0">
                                    <div class="col-sm-6">
                                        <div class="left-item">
                                            <!--Product Image-->
                                            <a href="product-details.html" title="Faded Short Sleeves T-shirt">
                                                <img src="{{asset('customer/images/featured/7.webp')}}" alt="">
                                            </a>
                                            <span class="new-label">New</span>
                                            <!--Product Cuntdown-->
                                            <div class="product-cuntdown">
                                                <div class="timer">
                                                    <div data-countdown="2022/06/01"></div>
                                                </div>	
                                            </div>									
                                        </div>
                                    </div>							
                                    <div class="col-sm-6">
                                        <div class="deal-product-content">
                                            <h5 class="title"><a href="product-details.html" title="Faded Short Sleeves T-shirt">Faded Short Sleeves T-shirt</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable...</p>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 16.84</span>
                                                <span class="old-price">£ 19.81</span>
                                            </div>
                                            <!--Product Action-->
                                            <div class="deal-product-action">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                </a>
                                                <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						
					</div>
		        </div>
		    </div>
		</div>
		<!--Deal Area End-->
		
		<!--New products Area Start-->
		<div class="new-product-area section-padding">
		    <div class="container">
		    
				<div class="section-title title-shape text-center">
					<h4 class="title">New products</h4>
				</div>
				
		        <div class="custom-row">
					<!--Product Slider Start-->
					<div class="product-slider indicator-style owl-carousel">
					
						<!--Single Product -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Dress">
											<img src="{{asset('customer/images/featured/1.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 61.19</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--Single Product -->
                        	<!-- Coder@bhijeet -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Summer Dress">
											<img src="{{asset('customer/images/featured/2.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<span class="sale-label">Sale!</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 34.78</span>
										<span class="old-price">£ 36.61</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--Single Product -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Summer Dress">
											<img src="{{asset('customer/images/featured/3.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 36.60</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--Single Product -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Chiffon Dress">
											<img src="{{asset('customer/images/featured/4.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 21.65</span>
										<span class="old-price">£ 24.60</span>
									</div>
								</div>
							</div>
						</div>
						
						<!--Single Product -->
						<div class="custom-col">
							<div class="single-product">
								<!--product Content-->
								<div class="product-img-content">
									<!--Product Image-->
									<div class="product-img">
										<a href="product-details.html" title="Printed Dress">
											<img src="{{asset('customer/images/featured/5.webp')}}" alt="">
										</a>		                                    
									</div>
									<span class="new-label">New</span>
									<!--Product Action-->
									<div class="product-action">
										<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
										<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
										<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
										<a href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa fa-expand"></i></a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
									<!--Product Rating-->
									<div class="rating-icon">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<!--Product Price-->
									<div class="product-price">
										<span class="new-price">£ 31.20</span>
									</div>
								</div>
							</div>
						</div>
						
					</div><!--Product Slider End-->
		        </div>	
		    </div>
		</div>
		<!--New products Area End-->
		
		<!--Banner Area Start-->
		<div class="banner-area section-padding pt-0">
			<div class="container">
				<div class="row mb-n30">
					<div class="col-md-4 col-12 mb-30">
						<div class="banner-image mb-30">
							<a href="#">
								<img src="{{asset('customer/images/banner/1.webp')}}" alt="">
							</a>
						</div>
						<div class="banner-image">
							<a href="#">
								<img src="{{asset('customer/images/banner/2.webp')}}" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-12 mb-30">
						<div class="banner-image">
							<a href="#">
								<img src="{{asset('customer/images/banner/3.webp')}}" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-12 mb-30">
						<div class="banner-image">
							<a href="#">
								<img src="{{asset('customer/images/banner/4.webp')}}" alt="">
							</a>
						</div>
					</div>			
				</div>
			</div>
		</div>
		<!--Banner Area End-->
		
		<!--Category Product Area Start-->
		<div class="category-product section-padding pt-0">
		    <div class="container">
		        <div class="row mb-n30">
                
		            <div class="col-lg-4 col-md-6 mb-30">
						<div class="block-title"><h5 class="title">Bedroom</h5></div>
                        <div class="product-slider-3 owl-carousel">
                            <div class="single-p-item mb-n25">
                                <!-- Single Product -->
                                <div class="single-product row gx-2 gx-lg-4 mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Faded Short Sleeves T-shirt">
                                                <img src="{{asset('customer/images/featured/1.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                    <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Faded Short Sleeves T-shirt">Faded Short Sleeves T-shirt</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 16.84</span>
                                                <span class="old-price">£ 19.81</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 	
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Blouse">
                                                <img src="{{asset('customer/images/featured/2.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Blouse">Blouse</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 32.40</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 	
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Dress">
                                                <img src="{{asset('customer/images/featured/3.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 32.20</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 									
                            </div>
                            <div class="single-p-item mb-n25">
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Dress">
                                                <img src="{{asset('customer/images/featured/4.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 61.19</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->	
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Summer Dress">
                                                <img src="{{asset('customer/images/featured/5.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 34.78</span>
                                                <span class="old-price">£ 36.61</span>
                                            </div>		
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->	
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Summer Dress">
                                                <img src="{{asset('customer/images/featured/6.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 36.60</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->									
                            </div>	
                            <div class="single-p-item mb-n25">
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Chiffon Dress">
                                                <img src="{{asset('customer/images/featured/7.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>		
                                        </div>
                                    </div>
                                </div> 	
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Summer Dress">
                                                <img src="{{asset('customer/images/featured/2.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 	
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Dress">
                                                <img src="{{asset('customer/images/featured/5.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 					
                            </div>								
                        </div>
					</div>
                
		            <div class="col-lg-4 col-md-6 mb-30">
                        <div class="block-title"><h5 class="title">Livingroom</h5></div>
                        <div class="product-slider-3 owl-carousel">
                            <div class="single-p-item mb-n25">
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Dress">
                                                <img src="{{asset('customer/images/featured/4.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 61.19</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->	
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Summer Dress">
                                                <img src="{{asset('customer/images/featured/5.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 34.78</span>
                                                <span class="old-price">£ 36.61</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->	
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Summer Dress">
                                                <img src="{{asset('customer/images/featured/6.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 36.60</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->									
                            </div>	
                            <div class="single-p-item mb-n25">
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Faded Short Sleeves T-shirt">
                                                <img src="{{asset('customer/images/featured/1.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Faded Short Sleeves T-shirt">Faded Short Sleeves T-shirt</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 16.84</span>
                                                <span class="old-price">£ 19.81</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 	
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Blouse">
                                                <img src="{{asset('customer/images/featured/2.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Blouse">Blouse</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 32.40</span>
                                            </div>		
                                        </div>
                                    </div>
                                </div> 	
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Dress">
                                                <img src="{{asset('customer/images/featured/3.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5><a href="#" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 32.20</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 									
                            </div>								
                            <div class="single-p-item mb-n25">
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Chiffon Dress">
                                                <img src="{{asset('customer/images/featured/7.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5><a href="#" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Dress">
                                                <img src="{{asset('customer/images/featured/3.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5><a href="#" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 31.45</span>
                                                <span class="old-price">£ 34.60</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Summer Dress">
                                                <img src="{{asset('customer/images/featured/6.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 26.60</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 					
                            </div>								
                        </div>
					</div>
                
		            <div class="col-lg-4 col-md-6 mb-30">
						<div class="block-title"><h5 class="title">Lighting</h5></div>
                        <div class="product-slider-3 owl-carousel">
                            <div class="single-p-item mb-n25">
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Faded Short Sleeves T-shirt">
                                                <img src="{{asset('customer/images/featured/1.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Faded Short Sleeves T-shirt">Faded Short Sleeves T-shirt</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 16.84</span>
                                                <span class="old-price">£ 19.81</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 	
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Blouse">
                                                <img src="{{asset('customer/images/featured/2.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Blouse">Blouse</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 32.40</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 	
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Dress">
                                                <img src="{{asset('customer/images/featured/3.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 32.20</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 									
                            </div>
                            <div class="single-p-item mb-n25">
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Dress">
                                                <img src="{{asset('customer/images/featured/4.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 61.19</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->	
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Summer Dress">
                                                <img src="{{asset('customer/images/featured/5.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 34.78</span>
                                                <span class="old-price">£ 36.61</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->	
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Summer Dress">
                                                <img src="{{asset('customer/images/featured/6.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 36.60</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->									
                            </div>	
                            <div class="single-p-item mb-n25">
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Chiffon Dress">
                                                <img src="{{asset('customer/images/featured/7.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Dress">
                                                <img src="{{asset('customer/images/featured/5.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 40.65</span>
                                                <span class="old-price">£ 44.60</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 	
                                <!-- Single Product -->
                                <div class="single-product row mb-3">
                                    <div class="col-4 mb-2">
                                        <div class="product-img">
                                            <a href="product-details.html" title="Printed Summer Dress">
                                                <img src="{{asset('customer/images/featured/2.webp')}}" alt="">
                                            </a>		                                    
                                        </div>                                        
                                    </div>
                                   <div class="col-8 mb-2">
                                        <div class="product-content d-flex flex-column">
                                            <h5 class="title"><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 23.65</span>
                                            </div>	
                                        </div>
                                    </div>
                                </div> 					
                            </div>								
                        </div>
					</div>
            
		        </div>
		    </div>
		</div>
		<!--Category Product Area End-->
		
		<!--News Letter Area Start-->	
		<div class="newsletter-area section-padding pt-0">
		    <div class="container">
		        <div class="row mb-n30">
		            <div class="col-lg-7 col-12 mb-30">
						<div class="banner-image">
							<a href="#">
								<img src="{{asset('customer/images/news-letter.webp')}}" alt="">
							</a>
						</div>		                
		            </div>
		            <div class="col-lg-5 col-12 mb-30">
		                <div class="letter-box">
		                    <div class="letter-title">
		                        <h4>Newsletter</h4>
		                        <i class="fa fa-envelope-o"></i>
		                    </div>
		                    <p>Subscribe to our email newsletter & receive updates right in your inbox.</p>
		                    <form  class="search-box" action="#" method="POST">
		                        <div>
									<input type="text" name="s" id="search-letter" placeholder="Enter your e-mail">
		                            <button type="submit" id="search-letter-btn" class="btn btn-search">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </button>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--News Letter Area End-->
		
		<!--Testimonial Area Start-->
		<div class="testimonial-area section-padding">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-9 col-md-10 col-12 mx-auto">
                        <!--Testimonial List-->
		                <div class="testimonial-slider indicator-button owl-carousel">
                           
                            <!--Single Testimonial-->
		                    <div class="single-testimonial">
		                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Lorem ipsum dolor sit amet.</p>
		                        <div class="testimonial-img">
		                            <img src="{{asset('customer/images/testimonial/1.webp')}}" alt="">
		                        </div>
		                        <div class="testimonial-title">
		                            <h4>Bootexpert<span>-</span> demo@demo.com</h4>
		                        </div>
		                    </div>
                           
                            <!--Single Testimonial-->
		                    <div class="single-testimonial">
		                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		                        <div class="testimonial-img">
		                            <img src="{{asset('customer/images/testimonial/2.webp')}}" alt="">
		                        </div>
		                        <div class="testimonial-title">
		                            <h4>Bootexpert <span>-</span> demo@demo.com</h4>
		                        </div>
		                    </div>
                           
                            <!--Single Testimonial-->
		                    <div class="single-testimonial">
		                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Lorem ipsum dolor sit.</p>
		                        <div class="testimonial-img">
		                            <img src="{{asset('customer/images/testimonial/3.webp')}}" alt="">
		                        </div>
		                        <div class="testimonial-title">
		                            <h4>Bootexpert <span>-</span> demo@demo.com</h4>
		                        </div>
		                    </div>
		                    
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Testimonial Area End-->
@endsection