@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Categories</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-10 offset-md-2 offset-sm-1">
                <div class="card shadow-lg rounded p-3">
                    <div class="card-body">
                        <table id="products-table" class="table table-bordered table-striped table-hover">
                            <thead>
                                <th scope="col">id</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th scope="col"></th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>0</td>
                                    <td>Memory</td>
                                    <td>Not Available</td>
                                    <td>Jan 11, 2021</td>
                                    <td>asas</td>
                                    <td>
                                        <a href="#" class="">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>0</td>
                                    <td>Storage</td>
                                    <td>Available</td>
                                    <td>Feb 01, 2021</td>
                                    <td>asas</td>
                                    <td>
                                        <a href="#" class="">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection