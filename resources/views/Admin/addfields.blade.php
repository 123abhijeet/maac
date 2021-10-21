@extends('Admin.layouts.master')
@section('title','Modern Art And Crafts | Add Fields')
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product Fields</h1>
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
                            <h3 class="card-title">Add Fields</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Category</label>
                                    <select class="form-control" name="" id="category_name">
                                        <option value="">Choose Category</option>
                                        @foreach($category as $categorydata)
                                        <option value="{{$categorydata->name}}">{{$categorydata->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="" id="input_option">
                                        <option value="">Choose Type</option>
                                        <option value="input">Single Line Box</option>
                                        <option value="textarea">Multiple Line Box</option>
                                        <option value="dropdown">Dropdown</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-plus text-success" aria-hidden="true" id="plus"></i>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span>Attribute Name</span>
                                        </div>
                                        <div class="col-md-6">
                                            <span>Attribute Field</span>
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
$(document).ready(function() {
    var wrapper = $(".card-body");
    $("#plus").click(function(e) {
        e.preventDefault();
        var input_option = $("#input_option").val();
        if (input_option == 'input') {
            $(wrapper).append(
                '<div><input type="text" name="mytext[]"/>  <i class="fa fa-times text-danger" id="cross"></i></div>'
                );
        } else if (input_option == 'textarea') {
            $(wrapper).append(
                '<div><textarea name="" id="" cols="60" rows="3"></textarea>  <i class="fa fa-times text-danger" id="cross"></i></div>'
                );
        } else if (input_option == 'dropdown') {
            $(wrapper).append(
                '<div><select class="form-control" name="" id=""><option value=""></option><option value=""></option> </select>  <i class="fa fa-times text-danger" id="cross"></i></div>'
                );
        } else {
            alert('Please choose type');
        }
    });
    $(wrapper).on("click", "#cross", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
    })
});
</script>
@endsection