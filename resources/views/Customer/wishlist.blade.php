@extends('Customer.layouts.master')
@section('title','Modern Art And Crafts | My Wishlist')
@section('body')
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Wishlist</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->
        		
		<!-- Wish List Area Start -->
        <div class="section-padding-sm">
            <div class="container">
                <div class="block-title">
                    <h4 class="title">My Wishlists</h4>
                </div>
                <div class="cart-wishlist-table table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Remove</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Unit Price</th>
                                <th>Stock Status</th>
                                <th>Add to Cart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#"><i class="fa fa-times"></i></a></td>
                                <td><a href="product-details.html" title="Printed Dress"><img src="{{asset('customer/images/blog/single/s1.webp')}}" alt="" /></a></td>
                                <td><a href="product-details.html" title="Printed Dress">Printed Dress</a></td>
                                <td>£34.78</td>
                                <td>In Stock</td>
                                <td><a href="cart.html" class="btn" title="Add to cart">Add to Cart</a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><i class="fa fa-times"></i></a></td>
                                <td><a href="product-details.html" title="Blouse"><img src="{{asset('customer/images/blog/single/s2.webp')}}" alt="" /></a></td>
                                <td><a href="product-details.html" title="Blouse">Blouse</a></td>
                                <td>£32.40</td>
                                <td>In Stock</td>
                                <td><a href="cart.html" class="btn" title="Add to Cart">Add to Cart</a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="wishlist-share">
                                        <h4 class="wishlist-share-title">Share on:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"></a></li>
                                            <li><a class="twitter" href="#"></a></li>
                                            <li><a class="pinterest" href="#"></a></li>
                                            <li><a class="googleplus" href="#"></a></li>
                                            <li><a class="email" href="#"></a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>	
            </div>
        </div>		
		<!-- Wish List Area End -->
@endsection