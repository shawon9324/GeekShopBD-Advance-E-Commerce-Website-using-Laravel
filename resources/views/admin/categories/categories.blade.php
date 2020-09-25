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
                            <li class="breadcrumb-item active">Categories</li>
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
                        {{-- @if (Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert"
                                style="margin-top:10px">
                                {{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif --}}
                        @include('sweetalert::alert')
                        @if (session('success_message'))
                        <div class="alert  alert-success">
                            {{ session('success_message') }}
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Categories Information</h3>
                                <a href="{{ url('admin/add-edit-category') }}" style="max-width:150px; float:right;">
                                    <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add
                                        Category</button></a>

                            </div>
                            <div class="card-body">
                                <table id="categories" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Parent Category</th>
                                            <th>Section</th>
                                            <th>URL</th>
                                            <th>Discount(%)</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            @if (!isset($category->parentcategory->category_name))
                                                <?php $parent_category = 'Main'; ?>
                                            @else
                                                <?php $parent_category =
                                                $category->parentcategory->category_name; ?>
                                            @endif
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->category_name }}</td>
                                                @if ($parent_category=='Main')
                                                <td><small class="badge badge-danger" style="font-size: 15px;">{{ $parent_category }}</small></td>
                                                @else
                                                <td><small class="badge badge-primary" style="font-size: 15px;">{{ $parent_category }}</small></td>
                                                @endif
                                                <td><small class="badge badge-secondary" style="font-size: 17px;">{{ $category->section->name }}</small></td>
                                                <td>{{ $category->url }}</td>
                                                <td><small class="badge badge-success" style="font-size: 15px;">{{ $category->category_discount }}</small></td>
                                                <td>{{ $category->description }}</td>

                                                <td>
                                                    @if ($category->status == 1)
                                                        <a class="updateCategoryStatus btn btn-info"
                                                            id="category-{{ $category->id }}"
                                                            category_id="{{ $category->id }}" href="javascript:void(0)"><i
                                                                class="fas fa-toggle-on fa-lg" style="color:cyan"
                                                                status="Active"></i></a>&nbsp;&nbsp;
                                                    @else
                                                        <a class="updateCategoryStatus btn btn-info"
                                                            id="category-{{ $category->id }}"
                                                            category_id="{{ $category->id }}" href="javascript:void(0)"><i
                                                                class="fas fa-toggle-off fa-lg"
                                                                status="Inactive"></i></a>&nbsp;&nbsp;
                                                    @endif
                                                    <a title="Edit Category" class=" btn btn-success"
                                                        href="{{ url('admin/add-edit-category/' . $category->id) }}"><i
                                                            class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
                                                    <a title="Delete Category" class="confirmDelete  btn btn-danger"
                                                        record_type="category" record_id="{{ $category->id }}"
                                                        href="javascript:void(0)"><i class="fas fa-trash"></i></a>
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
        
    </div>
@endsection
