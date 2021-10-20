@extends('Admin.layouts.master')
@section('title','Modern Art And Crafts | Edit Category')
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                            <h3 class="card-title">Edit Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('update.category',$category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Category Name" value="{{$category->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="Input2">Category Image :-</label>
                                    <input type="file" name="image" class="form-control" id="Input2">
                                </div>
                                <div class="form-group">
                                    <label>Status :-</label> &nbsp;
                                    <input type="radio" name="status" id="active" value="active" @if ($category->status == 'active'){{ 'checked' }} @endif >
                                    <label for="active">Active </label>&nbsp;
                                    <input type="radio" name="status" id="inactive" value="inactive" @if ($category->status == 'inactive'){{ 'checked' }} @endif ">
                                    <label for="inactive">Inactive</label>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description :-</label>
                                    <textarea class="form-control" name="description" id="description"
                                        placeholder="Description">{{$category->description}}</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <img src="{{ asset('storage/'.$category->image)}}" width="200px" height="80px">
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="window.history.back();">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection