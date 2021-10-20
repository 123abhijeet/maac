@extends('Admin.layouts.master')
@section('title','Modern Art And Crafts | Add Category')
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
                    <h1>Add Category</h1>
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
                            <h3 class="card-title">Add Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('store.category')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Category Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="Input2">Category Image :-</label>
                                    <input type="file" name="image" class="form-control" id="Input2" required>
                                </div>
                                <div class="form-group">
                                    <label>Status :-</label> &nbsp;
                                    <input type="radio" name="status" id="active" value="active" checked>
                                    <label for="active">Active </label>&nbsp;
                                    <input type="radio" name="status" id="inactive" value="inactive">
                                    <label for="inactive">Inactive</label>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description :-</label>
                                    <textarea class="form-control" name="description" id="description"
                                        placeholder="Description"></textarea>
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
@endsection