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

    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
            <div class="alert alert-danger" style="margin-top:10px">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- form start --}}
            <form name="categoryForm" id="categoryForm" action="{{ url('admin/add-edit-category') }}" method="post" enctype="multipart/form-data">@csrf
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
                            {{-- ROW 1 --}}
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="category_name">Category Name</label>
                                        <input type="text" class="form-control" id="category_name" name="category_name"
                                            placeholder="Enter Category Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Select Section</label>
                                        <select name="section_id" id="section_id" class="form-control select2" style="width: 100%;">
                                            <option value="">Select</option>
                                            @foreach($getSections as $section)
                                            <option value="{{$section->id}}">{{$section->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{-- ROW 2 --}}
                            <div class="row">
                                <div class="col-12 col-sm-6" id="appendCategoriesLevel">
                                        @include('admin.categories.append_categories_level')
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="category_image">Category Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="category_image" name="category_image" >
                                                <label class="custom-file-label" for="category_image">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            {{-- ROW 3 --}}
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="category_discount">Category Discount</label>
                                        <input type="text" class="form-control" id="category_discount" name="category_discount"
                                            placeholder="Enter Category Discount">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="url">Category Url</label>
                                        <input type="text" class="form-control" id="url" name="url"
                                            placeholder="Enter Category Url">
                                    </div>
                                </div>
                            </div>
                            
                            {{-- ROW 4 --}}

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="description">Category Description</label>
                                        <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter Category Description ..."></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <textarea id="meta_title" name="meta_title" class="form-control" rows="3" placeholder="Enter Meta Title ..."></textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- ROW 5 --}}

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <textarea id="meta_description" name="meta_description" class="form-control" rows="3" placeholder="Enter Meta Description ..."></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="meta_keywords">Meta Keywords</label>
                                        <textarea id="meta_keywords" name="meta_keywords" class="form-control" rows="3" placeholder="Enter Meta Keywords ..."></textarea>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </form> 
            {{-- form end --}}

        </div>
    </section>
</div>



@endsection