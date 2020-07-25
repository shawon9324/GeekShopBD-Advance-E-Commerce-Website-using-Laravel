@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Add Category Form</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name"
                                    placeholder="Enter Category Name">
                            </div>
                            <div class="form-group">
                                <label>Select Category Level</label>
                                <select name="parent_id" class="form-control select2" style="width: 100%;">
                                    <option value="0">Main Category</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Select Section</label>
                                <select name="section_id" class="form-control select2" style="width: 100%;">
                                    <option value="">Select</option>
                                    @foreach($getSections as $section)
                                    <option>{{$section->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_image">Category Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="category_image">
                                        <label class="custom-file-label" for="category_image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="category_image">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                        <div class="form-group">
                                <label for="category_discount">Category Discount</label>
                                <input type="text" class="form-control" id="category_discount" name="category_discount"
                                    placeholder="Enter Category Discount">
                            </div>
                            <div class="form-group">
                                <label for="category_description">Category Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter Category Description ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category_description">Meta Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter Meta Description ..."></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                        <div class="form-group">
                                <label for="meta-description">Category Url</label>
                                <input type="text" class="form-control" id="meta-description" name="meta-description"
                                    placeholder="Enter Category Url">
                            </div>
                            <div class="form-group">
                                <label for="category_description">Meta Title</label>
                                <textarea class="form-control" rows="3" placeholder="Enter Meta Description ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="meta-keywords">Meta Keywords</label>
                                <textarea class="form-control" rows="3" placeholder="Enter Meta Keywords ..."></textarea>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



@endsection