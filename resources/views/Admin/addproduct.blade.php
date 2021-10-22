@extends('Admin.layouts.master')
@section('title','Modern Art And Crafts | Add Product')
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                            @endif
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Product Category</label>
                                            <select class="form-control" name="category_name" id="category_name">
                                                <option value="">Choose Category</option>
                                                @foreach($category as $categorydata)
                                                <option value="{{$categorydata->name}}">{{$categorydata->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Product Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Product Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Product MRP</label>
                                            <input type="text" name="mrp" class="form-control" placeholder="Enter MRP">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Product Selling Price</label>
                                            <input type="text" name="sellingprice" class="form-control"
                                                placeholder="Enter Selling Price">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Product Warranty (In Month)</label>
                                            <input type="text" name="warranty" class="form-control"
                                                placeholder="Enter Warranty">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Product Brand</label>
                                            <input type="text" name="brand" class="form-control"
                                                placeholder="Enter Brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Dimensions of Product (In Inches)</label>
                                            <input type="text" name="dimension" class="form-control"
                                                placeholder="Enter dimensions">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Weight of Product</label>
                                            <input type="text" name="weight" class="form-control"
                                                placeholder="Enter Weight">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Color of Product</label>
                                            <input type="text" name="color" class="form-control"
                                                placeholder="Enter Color">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Assembly</label>
                                            <input type="text" name="assembly" class="form-control"
                                                placeholder="Enter assembly">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Primary Material</label>
                                            <input type="text" name="material" class="form-control"
                                                placeholder="Enter Primary Material">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Room Type</label>
                                            <input type="text" name="room_type" class="form-control"
                                                placeholder="Enter Room Type">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Collection</label>
                                            <input type="text" name="collection" class="form-control"
                                                placeholder="Enter Collection">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Storage</label>
                                            <input type="text" name="storage" class="form-control"
                                                placeholder="Enter Storage">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Recommended Mattress Size</label>
                                            <input type="text" name="mattress_size" class="form-control"
                                                placeholder="Enter Mattress Size">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">SKU</label>
                                            <input type="text" name="sku" class="form-control" placeholder="Enter SKU">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Seating Height</label>
                                            <input type="text" name="seating_height" class="form-control"
                                                placeholder="Enter Seating Height">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Enter Quantity</label>
                                            <input type="text" name="quantity" class="form-control"
                                                placeholder="Enter Quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Set Content</label>
                                            <input type="text" name="set_content" class="form-control"
                                                placeholder="Enter Set Content">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="">Fabric</label>
                                            <input type="text" name="fabric" class="form-control"
                                                placeholder="Enter Fabric">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="">Thread Count</label>
                                            <input type="text" name="thread_count" class="form-control"
                                                placeholder="Enter Thread Count">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Product Description</label>
                                            <textarea name="description" cols="30" rows="5" class="form-control"
                                                placeholder="Enter Product Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// $(document).ready(function() {
//     $("#category_name").change(function() {
//         var category_name = $("#category_name").val();

//     });
// });
</script>
@endsection