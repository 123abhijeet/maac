@extends('Admin.layouts.master')
@section('title','Modern Art And Crafts | All Category')
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
                    <h1>DataTables</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S. No</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Category Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $key=>$categorydata)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$categorydata->name}}</td>
                                        <td>{{$categorydata->status}}</td>
                                        <td>{{$categorydata->description}}</td>
                                        <td><img src="{{ asset('storage/'.$categorydata->image)}}" width="200px"
                                                height="80px"></td>
                                        <td><a href="{{route('edit.category',$categorydata->id)}}"><i
                                                    class="fas fa-edit"></i></a>&nbsp;
                                            <a onclick="return confirm('Are you sure want to delete?')"
                                                href="{{route('delete.category',$categorydata->id)}}"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S. No</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Category Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>


@endsection