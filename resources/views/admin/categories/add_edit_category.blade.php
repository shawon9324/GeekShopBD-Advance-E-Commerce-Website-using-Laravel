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
            @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px">
                        {{ Session::get('success_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

            {{-- form start --}}
            <form name="categoryForm" id="categoryForm" @if(empty($categoryData['id']))
                action="{{ url('admin/add-edit-category') }}" @else
                action="{{ url('admin/add-edit-category/'.$categoryData['id']) }}" @endif method="post"
                enctype="multipart/form-data">@csrf
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">{{$title}} Form</h3>

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
                                        placeholder="Enter Category Name" 
                                        @if(!empty($categoryData['category_name']))
                                        value="{{$categoryData['category_name']}}" 
                                        @else
                                        value="{{ old('category_name') }}" 
                                        @endif>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Select Section</label>
                                    <select name="section_id" id="section_id" class="form-control select2"
                                        style="width: 100%;">
                                        <option value="">Select</option>
                                        @foreach($getSections as $section)
                                        <option value="{{$section->id}}" 
                                            @if(!empty($categoryData['section_id']) && $categoryData['section_id']==$section->id) selected @endif >
                                                    {{$section->name}}
                                        </option>
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
                                        <input type="file" class="form-control" name="category_image" id="category_image" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($categoryData['category_image']))
                        {{-- NEW ROW --}}
                        <div class="row">
                            <div class="col-12 col-sm-6">   
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="info-box">
                                    <span class="">
                                    <img class="img-circle elevation-2"  src="{{ asset('img/category_img/'.$categoryData['category_image'])}}" height="80" width="80"/>
                                    </span>

                                    <div class="info-box-content">
                                        <a class="imageView" image_category_info="{{$categoryData['category_name']}}" image_id="{{$categoryData['category_image']}}" href="javascript:void(0)">
                                        <button style="width: 150px;margin-bottom:5px;" type="button" class="btn btn-block btn-outline-success">
                                        View Image</button></a>
                                        <a class="confirmDelete" href="javascript:void(0)"  record_type="category-image" record_id="{{$categoryData['id']}}" >
                                        <button style="width: 150px;margin-bottom:5px;" type="button" class="btn btn-block btn-outline-danger">
                                        Delete Image</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        



                        {{-- ROW 3 --}}
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="category_discount">Category Discount</label>
                                    <input type="text" class="form-control" id="category_discount"
                                        name="category_discount" placeholder="Enter Category Discount"
                                        @if(!empty($categoryData['category_discount']))
                                        value="{{$categoryData['category_discount']}}" 
                                        @else
                                        value="{{ old('category_discount') }}" 
                                        @endif>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="url">Category Url</label>
                                    <input type="text" class="form-control" id="url" name="url"
                                        placeholder="Enter Category Url" 
                                        @if(!empty($categoryData['url']))
                                        value="{{$categoryData['url']}}" 
                                        @else 
                                        value="{{ old('url') }}"
                                        @endif>
                                </div>
                            </div>
                        </div>

                        {{-- ROW 4 --}}

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="description">Category Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="3"
                                        placeholder="Enter Category Description ...">@if(!empty($categoryData['description'])){{$categoryData['description']}}@else{{ old('description') }}@endif</textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="meta_title">Meta Title</label>
                                    <textarea id="meta_title" name="meta_title" class="form-control" rows="3"
                                        placeholder="Enter Meta Title ...">@if(!empty($categoryData['meta_title'])){{$categoryData['meta_title']}}@else{{ old('meta_title') }}@endif</textarea>
                                </div>
                            </div>
                        </div>

                        {{-- ROW 5 --}}

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea id="meta_description" name="meta_description" class="form-control"
                                        rows="3" placeholder="Enter Meta Description ...">@if(!empty($categoryData['meta_description'])){{$categoryData['meta_description']}}@else{{ old('meta_description') }}@endif</textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords</label>
                                    <textarea id="meta_keywords" name="meta_keywords" class="form-control" rows="3"
                                        placeholder="Enter Meta Keywords ...">@if(!empty($categoryData['meta_keywords'])){{$categoryData['meta_keywords']}}@else{{ old('meta_keywords') }}@endif</textarea>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{$btn_title}}</button>
                    </div>
                </div>
            </form>
            {{-- form end --}}

        </div>
    </section>
</div>



@endsection