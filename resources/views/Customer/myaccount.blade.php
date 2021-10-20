@extends('Customer.layouts.master')
@section('title','Modern Art And Crafts | My Account')
@section('body')
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
            <li class="active">My Account</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs Area End -->

<!-- Account Area Start -->
<div class="account-area section-padding-sm">
    <div class="container">
        <div class="row mb-n30">

            <!-- My Account Tab Menu Start -->
            <div class="col-lg-3 col-12 mb-30">
                <div class="myaccount-tab-menu nav" role="tablist">
                    <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>Dashboard</a>
                    <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                    <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>
                    <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Payment Method</a>
                    <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
                    <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                    <a href="">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item" style="margin-left:-15px;"><i
                                    class="fa fa-sign-out"></i> <b>Logout</b> </button>
                        </form>
                    </a>
                </div>
            </div>
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
            <div class="col-lg-9 col-12 mb-30">
                <div class="tab-content" id="myaccountContent">

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Dashboard</h5>
                            <div class="welcome">
                                <p>Hello, <strong>{{Auth::user()->name}}!</strong></p>
                            </div>
                            <p class="mb-0">From your account dashboard. you can easily check &amp; view your recent
                                orders, manage your shipping and billing addresses and edit your password and account
                                details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Orders</h5>
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Moisturizing Oil</td>
                                            <td>Aug 22, 2018</td>
                                            <td>Pending</td>
                                            <td>$45</td>
                                            <td><a href="cart.html" class="btn btn-round">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Katopeno Altuni</td>
                                            <td>July 22, 2018</td>
                                            <td>Approved</td>
                                            <td>$100</td>
                                            <td><a href="cart.html" class="btn btn-round">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Murikhete Paris</td>
                                            <td>June 12, 2017</td>
                                            <td>On Hold</td>
                                            <td>$99</td>
                                            <td><a href="cart.html" class="btn btn-round">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="download" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Downloads</h5>
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Expire</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Moisturizing Oil</td>
                                            <td>Aug 22, 2018</td>
                                            <td>Yes</td>
                                            <td><a href="#" class="btn btn-round">Download File</a></td>
                                        </tr>
                                        <tr>
                                            <td>Katopeno Altuni</td>
                                            <td>Sep 12, 2018</td>
                                            <td>Never</td>
                                            <td><a href="#" class="btn btn-round">Download File</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Payment Method</h5>
                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Billing Address</h5>
                            <form action="{{route('address.update')}}" method="POST">
                                @csrf
                                <address>
                                    <p><strong>{{Auth::user()->name}}</strong></p>
                                    <textarea name="address">{{Auth::user()->address}}</textarea>
                                    <p>Mobile: {{Auth::user()->phone}}</p>
                                </address>
                                <button type="submit" class="btn btn-round d-inline-block"><i
                                        class="fa fa-edit"></i>Edit Address</button>
                            </form>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Account Details</h5>
                            <div class="account-details-form">
                                <form action="{{route('update.profile')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-12 mb-30">
                                            <input id="first-name" placeholder="Name" type="text" name="name"
                                                value="{{$profile->name}}">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input id="email" placeholder="Email Address" type="email" name="email"
                                                value="{{$profile->email}}">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input id="display-name" placeholder="Phone Number" type="text" name="phone"
                                                value="{{$profile->phone}}">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <h6 class="mb-0">Password change</h6>
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input id="current-pwd" placeholder="Current Password" type="password"
                                                name="current_password" value="{{ old('password')}}">
                                            @error('current_password')
                                            <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="new-pwd" placeholder="New Password" type="password"
                                                name="password" value="{{ old('password')}}">
                                            @error('password')
                                            <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="confirm-pwd" placeholder="Confirm Password" type="password"
                                                name="password_confirmation">
                                            @error('password_confirmation')
                                            <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-round btn-lg">Save Changes</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                </div>
            </div>
            <!-- My Account Tab Content End -->

        </div>
    </div>
</div>
<!-- Account Area End -->
@endsection