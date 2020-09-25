@extends('layouts.admin_layout.admin_layout')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Catalogues</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Brands</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('success_message'))
                            <div class="alert  alert-success">
                                {{ session('success_message') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Brands Information</h3>
                                <a href="{{ url('admin/add-edit-brand') }}" style="max-width:150px; float:right;">
                                    <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add
                                        Brand</button></a>
                            </div>
                            <div class="card-body">
                                <table id="brands" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $brand)
                                            <tr>
                                                <td>{{ $brand->id }}</td>
                                                <td>{{ $brand->name }}</td>
                                                <td>

                                                    <a class="btn btn-success" title="Edit Brand"
                                                        href="{{ url('admin/add-edit-brand/' . $brand->id) }}"><i
                                                            class="fa fa-pencil-square-o"></i> </a>&nbsp;&nbsp;
                                                    <a title="Delete Brand" class="confirmDelete btn btn-danger"
                                                        record_type="brand" record_id="{{ $brand->id }}"
                                                        href="javascript:void(0)"><i class="fas fa-trash"></i></a>

                                                    @if ($brand->status == 1)
                                                        <a title="Status" class="updateBrandStatus btn btn-info"
                                                            id="brand-{{ $brand->id }}" brand_id="{{ $brand->id }}"
                                                            href="javascript:void(0)"><i class="fas fa-toggle-on fa-lg"
                                                                style="color:cyan"
                                                                status="Active"></i></a>&nbsp;&nbsp;
                                                    @else
                                                        <a title="Status" class="updateBrandStatus btn btn-info"
                                                            id="brand-{{ $brand->id }}" brand_id="{{ $brand->id }}"
                                                            href="javascript:void(0)"><i class="fas fa-toggle-off fa-lg"
                                                                status="Inactive"></i></a>&nbsp;&nbsp;
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('sweetalert::alert')
    </div>
@endsection
