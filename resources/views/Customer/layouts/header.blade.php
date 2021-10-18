<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from template.hasthemes.com/goetze/goetze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Oct 2021 07:27:15 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">  

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('customer/images/favicon.webp')}}">

        <!-- CSS
        ============================================ -->

        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="{{asset('customer/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('customer/css/pe-icon-7-stroke.css')}}">

        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{asset('customer/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('customer/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('customer/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('customer/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('customer/css/venobox.css')}}">

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{asset('customer/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('customer/css/responsive.css')}}">

    </head>
    <body>
       
        <!-- Header Area Start -->
        <div class="header-area">
        
			<!-- Header Top Start -->
        	<div class="header-top">
        		<div class="container">
					<div class="row justify-content-lg-between">
					
                        <!--Left Start-->
						<div class="col-lg-auto d-none d-lg-block">
							<div class="header-text">
								<p>Default Welcome Msg!</p>
							</div>
						</div><!--Left End-->
						
                        <!--Right Start-->
						<div class="col-lg-auto col-12 d-flex justify-content-center">
                            <ul class="header-top-menu">
                                <li class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle">GBP</a>
                                    <ul class="dropdown-menu header-top-dropdown">
										<li><a href="#">Dollar (USD)</a></li>
										<li><a href="#">Pound (GBP)</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle">English</a>
                                    <ul class="dropdown-menu header-top-dropdown">
										<li><a href="#">English</a></li>
										<li><a href="#">Arabic(Arabic)</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('myaccount')}}"><i class="fa fa-user"></i>My account</a></li>
                                <li><a href="{{route('wishlist')}}"><i class="fa fa-heart"></i>My wishlist</a></li>
                                <li><a href="login-register.html"><i class="fa fa-unlock-alt"></i>Sign in</a></li>
                                <li><a href="{{route('checkout')}}"><i class="fa fa-share-square-o"></i>Check out</a></li>
                            </ul>
						</div><!--Right End-->
						
					</div>
        		</div>
        	</div>
			<!-- Header Top End -->
				<!-- Coder@bhijeet -->
			<!-- Header Bottom Start -->
        	<div class="header-bottom">
        	    <div class="container">
        	        <div class="row position-relative justify-content-between align-items-center">
                       
                        <!--Logo Start-->
                        <div class="header-logo col-auto">
                            <a href="{{route('index')}}"><img src="{{asset('customer/images/logo.webp')}}" alt="Logo"></a>
                        </div><!--Logo End-->
						
                        <!--Main Menu Start-->
						<div class="position-static col-auto d-none d-lg-block">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul class="mega-menu">
                                            <li>
                                                <a class="mega-title" href="#">Shop Pages</a>
                                                <ul>
                                                    <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="mega-title" href="#">Shop Other Pages</a>
                                                <ul>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="login-register.html">Login & Register</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-img w-50">
                                                <a href="#"><img src="{{asset('customer/images/news-letter.webp')}}" alt=""></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="mega-menu">
                                            <li>
                                                <a class="mega-title" href="#">Column One</a>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="blog.html">Blog Page</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="mega-title" href="#">Column Two</a>
                                                <ul>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="mega-title" href="#">Column Three</a>
                                                <ul>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="404.html">404 Error</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-img">
                                                <a href="#"><img src="{{asset('customer/images/banner/23.webp')}}" alt="" /></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
						</div><!--Main Menu Start-->
                   
                        
						<!--Header Bottom Right Start-->
						<div class="col-auto d-flex">
                            
                            <!--Header Search Start-->
                            <div class="header-search dropdown">
                                <button data-bs-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-search"></i></button>
                                <div class="header-search-dropdown dropdown-menu">
                                    <form action="#">
                                        <input type="text" placeholder="Search" autocomplete="off">
                                        <button class="btn-search"><i class="fa fa-search"></i></button>
                                    </form>	
                                </div>
                            </div>
                            <!--Header Search End-->
                            
                            <!--Header Mini Cart Start-->
                            <div class="header-cart dropdown">
                                <button data-bs-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-shopping-cart"></i><span class="num">2</span></button>
                                <div class="header-cart-dropdown dropdown-menu">
                                    <ul class="header-cart-product">
                                        <li>
                                            <a href="product-details.html" class="image"><img src="{{asset('customer/images/cart-img/1.webp')}}" alt=""></a>
                                            <div class="content">
                                                <a href="product-details.html" class="title">Printed Dress</a>
                                                <span class="details">S, Orange</span>
                                                <span class="price">1 x £ 16.00</span>
                                                <a href="#" class="remove"><i class="fa fa-close"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="product-details.html" class="image"><img src="{{asset('customer/images/cart-img/2.webp')}}" alt=""></a>
                                            <div class="content">
                                                <a href="product-details.html" class="title">Printed Summer Dress</a>
                                                <span class="details">S, Orange</span>
                                                <span class="price">2 x £ 36.00</span>
                                                <a href="#" class="remove"><i class="fa fa-close"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="header-cart-total">
                                        <h6 class="total">Total: <span class="total">£ 86.00</span></h6>
                                    </div>
                                    <div class="header-cart-buttons">
                                        <a class="button" href="{{route('checkout')}}">Checkout <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--Header Mini Cart End-->

                            <!--Header Toggle Cart End-->
                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <!--Header Toggle Cart End-->
                            
						</div>                   
        	        </div>
        	    </div>
        	</div>
        	<!--Header Bottom End-->
        	
        </div>
		<!-- Header Area End -->
        	<!-- Coder@bhijeet -->
		<!-- Offcanvas Area Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <nav class="offcanvas-menu">
                    <ul>
                        <li><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Version 1</a></li>
                                <li><a href="index-2.html">Home Version 2</a></li>
                                <li><a href="index-3.html">Home Version 3</a></li>
                                <li><a href="index-4.html">Home Version 4</a></li>
                                <li><a href="index-5.html">Home Version 5</a></li>
                                <li><a href="index-6.html">Home Version 6</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a>
                            <ul class="mega-menu">
                                <li>
                                    <a class="mega-title" href="#">Shop Pages</a>
                                    <ul class="menu-item">
                                        <li><a href="shop.html">Shop Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="mega-title" href="#">Shop Other Pages</a>
                                    <ul class="menu-item">
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login-register.html">Login & Register</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-img">
                                    <a href="#"><img src="{{asset('customer/images/news-letter.webp')}}" alt=""></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="mega-menu">
                                <li>
                                    <a class="mega-title" href="#">Column One</a>
                                    <ul class="menu-item">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="blog.html">Blog Page</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="mega-title" href="#">Column Two</a>
                                    <ul class="menu-item">
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="mega-title" href="#">Column Three</a>
                                    <ul class="menu-item">
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-img">
                                    <a href="#"><img src="{{asset('customer/images/banner/23.webp')}}" alt="" /></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
		<!-- Offcanvas Area End -->