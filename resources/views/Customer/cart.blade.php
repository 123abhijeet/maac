@extends('Customer.layouts.master')
@section('title','Modern Art And Crafts | Cart')
@section('body')
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->
        
		<!--Cart Main Area Start-->	
		<div class="section-padding-sm">
			<div class="container">
               
                <div class="block-title">
                    <h1 class="title">Shopping Cart Summary</h1>
                </div>
                
                <div class="cart-wishlist-table table-responsive">
                    <table class="table table-bordered mb-30">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="product-details.html"><img src="{{asset('customer/images/cart-assets/images/1.html')}}" alt="" /></a></td>
                                <td><a href="product-details.html">Exclusive Shoes</a></td>
                                <td>£165.00</td>
                                <td>
                                    <div class="cart-quantity product-quantity">
                                        <button class="dec qtybtn">-</button>
                                        <input type="text" value="1">
                                        <button class="inc qtybtn">+</button>	
                                    </div>
                                </td>
                                <td>£165.00</td>
                                <td><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="product-details.html"><img src="{{asset('customer/images/cart-assets/images/2.html')}}" alt="" /></a></td>
                                <td><a href="product-details.html">Summer Cap</a></td>
                                <td>£50.00</td>
                                <td>
                                    <div class="cart-quantity product-quantity">
                                        <button class="dec qtybtn">-</button>
                                        <input type="text" value="1">
                                        <button class="inc qtybtn">+</button>	
                                    </div>
                                </td>
                                <td>£165.00</td>
                                <td><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="row mb-n30">
                   
                    <div class="col-md-8 col-sm-7 col-xs-12 mb-30">
                        <div class="d-flex flex-wrap mb-n2">
                            <input type="submit" value="Update Cart" class="me-3 mb-2">
                            <a class="btn mb-2" href="#">Continue Shopping</a>
                        </div>
                        <div class="coupon mt-4">
                            <h6>Coupon</h6>
                            <p>Enter your coupon code if you have one.</p>
                            <div class="row mb-n20">
                                <div class="col-xl-4 col-lg-5 col-md-6 col-12 mb-20">
                                    <input type="text" placeholder="Coupon code">
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <input type="submit" value="Apply Coupon">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-5 col-xs-12 mb-30">
                        <div class="block-title text-end mb-2">
                            <h4 class="title">Cart Totals</h4>
                        </div>
                        <div class="cart-total-wrap">
                            <div class="table-responsive">
                                <table class="table table-borderless text-end mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td><strong>£215.00</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>
                                                <ul>
                                                    <li><label class="checkbox"><input type="radio" />Flat Rate: <strong>£7.00</strong></label></li>
                                                    <li><label class="checkbox"><input type="radio" />Free Shipping</label></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="h5">Total</th>
                                            <td class="h5"><strong>£215.00</strong></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="pb-0"><a class="btn" href="{{route('checkout')}}">Proceed to Checkout</a></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
			</div>
		</div>
		<!--Cart Main Area End-->
@endsection