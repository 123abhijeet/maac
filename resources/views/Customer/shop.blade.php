@extends('Customer.layouts.master')
@section('title','Modern Art And Crafts | Shop')
@section('body')
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="{{route('shop')}}">Categories</a></li>
                    <li class="active">Furniture</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->
        
        <!-- All Product Side Bar Area Start -->
        <div class="section-padding-sm">
            <div class="container">
                <div class="row mb-n30">
                    
                    <div class="col-lg-9 col-12 order-lg-2 mb-30">
                    
						<div class="page-category-banner mb-30"><img src="{{asset('customer/images/bedroom.webp')}}" alt="" /></div>
						
                        <!--Shop Toolbar Start-->
						<div class="shop-toolbar">
                               
                            <!-- Nav tabs -->
                            <ul class="shop-tab-list nav">
                                <li><a href="#grid" data-bs-toggle="tab" class="active"><i class="fa fa-th-large"></i></a></li>
                                <li><a href="#list" data-bs-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                                
                            <!--Shop Filters-->
                            <div class="shop-filters">
                                <div class="filter">
                                    <label>Sort by</label>
                                    <select>
                                        <option selected="selected">By Latest</option>
                                        <option>Price: Lowest first</option>
                                        <option>Price: Highest first</option>
                                        <option>Product Name: A to Z</option>
                                        <option>Product Name: Z to A</option>
                                        <option>In stock</option>
                                        <option>Reference: Lowest first</option>
                                        <option>Reference: Highest first</option>
                                    </select>
                                </div>
                                <div class="filter">
                                    <label>Show</label>
                                    <select>
                                        <option selected="selected">12</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </div>
                            
						</div><!--Shop Toolbar End-->
                        
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="grid">
								<div class="row mb-n30">
									<div class="col-md-4 col-sm-6 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="{{route('product.details')}}" title="Printed Dress">
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
												<h5 class="title"><a href="{{route('product.details')}}" title="Printed Dress">Printed Dress</a></h5>
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
													<span class="new-price">?? 61.19</span>
												</div>
											</div>
										</div>									
									</div>
									<div class="col-md-4 col-sm-6 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="{{route('product.details')}}" title="Printed Summer Dress">
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
												<h5 class="title"><a href="{{route('product.details')}}" title="Printed Summer Dress">Printed Summer Dress</a></h5>
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
													<span class="new-price">?? 34.78</span>
													<span class="old-price">?? 36.61</span>
												</div>
											</div>
										</div>								
									</div>
									<div class="col-md-4 col-sm-6 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="{{route('product.details')}}" title="Printed Summer Dress">
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
												<h5 class="title"><a href="{{route('product.details')}}" title="Printed Summer Dress">Printed Summer Dress</a></h5>
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
													<span class="new-price">?? 36.60</span>
												</div>
											</div>
										</div>								
									</div>
									<div class="col-md-4 col-sm-6 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="{{route('product.details')}}" title="Printed Chiffon Dress">
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
												<h5 class="title"><a href="{{route('product.details')}}" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
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
													<span class="new-price">?? 21.65</span>
													<span class="old-price">?? 24.60</span>
												</div>
											</div>
										</div>								
									</div>
									<div class="col-md-4 col-sm-6 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="{{route('product.details')}}" title="Printed Dress">
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
												<h5 class="title"><a href="{{route('product.details')}}" title="Printed Dress">Printed Dress</a></h5>
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
													<span class="new-price">?? 31.20</span>
												</div>
											</div>
										</div>									
									</div>
									<div class="col-md-4 col-sm-6 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="{{route('product.details')}}" title="Blouse">
														<img src="{{asset('customer/images/featured/6.webp')}}" alt="">
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
												<!--Product Name-->
												<h5 class="title"><a href="{{route('product.details')}}" title="Blouse">Blouse</a></h5>
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
													<span class="new-price">?? 32.40</span>
												</div>
											</div>
										</div>								
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="list">
								<div class="mb-n30">
									<div class="single-shop-product mb-30">
										<div class="row gx-0">
											<div class="col-md-4 col-sm-5 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="{{route('product.details')}}" title="Printed Summer Dress">
														<img src="{{asset('customer/images/featured/2.webp')}}" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-sm-7 mb-20">
												<div class="deal-product-content ">
													<h5 class="title"><a href="{{route('product.details')}}" title="Printed Summer Dress">Printed Summer Dress</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">?? 34.78</span>
														<span class="old-price">?? 36.61</span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<!--Product Action-->
													<p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
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
									<div class="single-shop-product mb-30">
										<div class="row gx-0">
											<div class="col-md-4 col-sm-5 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="{{route('product.details')}}" title="Blouse">
														<img src="{{asset('customer/images/featured/3.webp')}}" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-sm-7 mb-20">
												<div class="deal-product-content ">
													<h5 class="title"><a href="{{route('product.details')}}" title="Blouse">Blouse</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">?? 32.40 </span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<!--Product Action-->
													<p>Short-sleeved blouse with feminine draped sleeve detail. </p>
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
									<div class="single-shop-product mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-sm-5 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="{{route('product.details')}}" title="Printed Dress">
														<img src="{{asset('customer/images/featured/4.webp')}}" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-sm-7 mb-20">
												<div class="deal-product-content ">
													<h5 class="title"><a href="{{route('product.details')}}" title="Printed Dress">Printed Dress</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">?? 32.20 </span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<!--Product Action-->
													<p>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom.</p>
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
									<div class="single-shop-product mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-sm-5 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="{{route('product.details')}}" title="Printed Summer Dress">
														<img src="{{asset('customer/images/featured/6.webp')}}" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-sm-7 mb-20">
												<div class="deal-product-content ">
													<h5 class="title"><a href="{{route('product.details')}}" title="Printed Summer Dress">Printed Summer Dress</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">?? 34.61 </span>
														<span class="old-price">?? 36.78 </span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<!--Product Action-->
													<p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
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
									<div class="single-shop-product mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-sm-5 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="{{route('product.details')}}" title="Printed Summer Dress">
														<img src="{{asset('customer/images/featured/7.webp')}}" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-sm-7 mb-20">
												<div class="deal-product-content ">
													<h5 class="title"><a href="{{route('product.details')}}" title="Printed Summer Dress">Printed Summer Dress</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">?? 36.60</span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<!--Product Action-->
													<p>Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining. </p>
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
									<div class="single-shop-product mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-sm-5 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="{{route('product.details')}}" title="Printed Summer Dress">
														<img src="{{asset('customer/images/featured/4.webp')}}" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-sm-7 mb-20">
												<div class="deal-product-content ">
													<h5 class="title"><a href="{{route('product.details')}}" title="Printed Dress">Blouse</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">?? 32.40 </span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<!--Product Action-->
													<p>Short-sleeved blouse with feminine draped sleeve detail. </p>
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
                        
                        <div class="shop-toolbar mt-30">
                            <p class="showing">Showing 1 - 10 of 10 items</p>
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-left"></i>Previous</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        
					</div>
                   
                    <!--Shop Sidebar Start-->
                    <div class="col-lg-3 col-12 mb-30">
                        
                        <!--Sidebar Wrap Start-->
                        <div class="sidebar-wrap border p-3">
                       
                            <!--Sidebar Area Title Start-->
                            <h5 class="sidebar-area-title">Catalog</h5><!--Sidebar Area Title End-->
                            
                            <!--Sidebar Start-->
                            <div class="sidebar bg-light p-3">
                               
                                <h6 class="sidebar-title">Enabled filters:</h6>
                                
                                <ul class="sidebar-filters">
                                    <li>Size: S <a href="#" class="remove"><i class="fa fa-remove"></i></a></li>
                                    <li>Color: Beige <a href="#" class="remove"><i class="fa fa-remove"></i></a></li>
                                    <li>Price: ?? 36.09 - ?? 61.00</li>
                                </ul>
                                
                            </div><!--Sidebar End-->
                            
                            <!--Sidebar Start-->
                            <div class="sidebar">
                               
                                <h6 class="sidebar-title">Price</h6>
                                
                                <div class="sidebar-price">
                                    <span class="price-label">Range: <span class="price-amount"></span></span>
                                    <div class="price-range-wrap">
                                        <div id="price-range"></div>
                                    </div>
                                </div>
                                
                            </div><!--Sidebar End-->
                            
                            <!--Sidebar Start-->
                            <div class="sidebar">
                               
                                <h6 class="sidebar-title">Size</h6>
                                
                                <div class="sidebar-selects">
                                    <ul>
                                        <li><a href="#" class="active">S (4)</a></li>
                                        <li><a href="#">M (5)</a></li>
                                        <li><a href="#">L (3)</a></li>
                                    </ul>
                                </div>
                                
                            </div><!--Sidebar End-->
                            
                            <!--Sidebar Start-->
                            <div class="sidebar">
                               
                                <h6 class="sidebar-title">Color</h6>
                                
                                <div class="sidebar-selects">
                                    <ul>
                                        <li><a href="#" class="active">Beige (4)</a></li>
                                        <li><a href="#">White (5)</a></li>
                                        <li><a href="#">Yellow (3)</a></li>
                                        <li><a href="#">Pink (3)</a></li>
                                        <li><a href="#">Black (3)</a></li>
                                        <li><a href="#">Blue (3)</a></li>
                                        <li><a href="#">Green (3)</a></li>
                                        <li><a href="#">Orange (3)</a></li>
                                    </ul>
                                </div>
                                
                            </div><!--Sidebar End-->
                            
                        </div><!--Sidebar Wrap End-->
                        
                        <div class="banner-image">
                            <a href="#"><img alt="" src="{{asset('customer/images/banner/28.webp')}}"></a>
                        </div>
                        
                    </div><!--Shop Sidebar End-->
               
                </div>
            </div>
        </div>
        <!-- All Product Side Bar Area End -->
@endsection