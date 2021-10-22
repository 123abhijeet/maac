@extends('Admin.layouts.master')
@section('title','Modern Art And Crafts | Edit Sub Category')
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
                    <h1>Edit Sub Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sub Category</li>
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
                            <h3 class="card-title">Edit Sub Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        
                        <form action="{{route('update.subcategory',$subcategory->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Choose Category</label>
                                    <select name="category_id" class="form-control">
                                    @foreach($category as $categorydata)
                                        <option value="{{$categorydata->id}}" @if ($categorydata->id == $subcategory->category_id)
                                            {{ 'selected' }}
                                            @endif >{{ $categorydata->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Category Name <?php echo $subcategory->id;?> :-</label>
                                    <input type="text" name="subcategory_name" class="form-control" Placeholder="Enter Sub Category Name" value="{{$subcategory->subcategory_name}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="Input2">Sub Category Image :-</label>
                                    <input type="file" name="image" class="form-control" id="Input2">
                                </div>
                                <div class="form-group">
                                    <label>Status :-</label> &nbsp;
                                    <input type="radio" name="status" id="active" value="active" @if ($subcategory->status == 'active'){{ 'checked' }} @endif >
                                    <label for="active">Active </label>&nbsp;
                                    <input type="radio" name="status" id="inactive" value="inactive" @if ($subcategory->status == 'inactive'){{ 'checked' }} @endif >
                                    <label for="inactive">Inactive</label>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description :-</label>
                                    <textarea class="form-control" name="description" id="description"
                                        placeholder="Description">{{$subcategory->description}}</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
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