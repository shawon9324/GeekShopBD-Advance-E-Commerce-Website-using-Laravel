@extends('layouts.admin_layout.admin_layout')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Others</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Banners</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px">
                        {{ Session::get('success_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

            {{-- form start --}}
            <form name="bannerForm" id="bannerForm" @if(empty($banner['id']))
                action="{{ url('admin/add-edit-banner') }}" @else
                action="{{ url('admin/add-edit-banner/'.$banner['id']) }}" @endif method="post">@csrf
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
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter Banner title" 
                                        @if(!empty($banner['title']))
                                        value="{{$banner['title']}}" 
                                        @else
                                        value="{{ old('title') }}" 
                                        @endif>
                                </div>
                            </div>
                        </div>
                        {{-- ROW 1 --}}
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="form-control" id="title" name="product_name"
                                        placeholder="Enter Product Name" 
                                        @if(!empty($banner['product_name']))
                                        value="{{$banner['product_name']}}" 
                                        @else
                                        value="{{ old('product_name') }}" 
                                        @endif>
                                </div>
                            </div>
                        </div>


                        {{-- ROW 1 --}}
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="old_price">Product Old Price</label>
                                    <input type="text" class="form-control" id="old_price" name="old_price"
                                        placeholder="Enter Old Price" 
                                        @if(!empty($banner['old_price']))
                                        value="{{$banner['old_price']}}" 
                                        @else
                                        value="{{ old('old_price') }}" 
                                        @endif>
                                </div>
                            </div>
                        </div>

                        {{-- ROW 1 --}}
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="new_price">Product New Price</label>
                                    <input type="text" class="form-control" id="new_price" name="new_price"
                                        placeholder="Enter New Price" 
                                        @if(!empty($banner['new_price']))
                                        value="{{$banner['new_price']}}" 
                                        @else
                                        value="{{ old('new_price') }}" 
                                        @endif>
                                </div>
                            </div>
                        </div>
                        
                        {{-- ROW 1 --}}
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="Enter Banner Link" 
                                        @if(!empty($banner['link']))
                                        value="{{$banner['link']}}" 
                                        @else
                                        value="{{ old('link') }}" 
                                        @endif>
                                </div>
                            </div>
                        </div>
                        {{-- ROW 1 --}}
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="alt">Alternative Banner Image Name</label>
                                    <input type="text" class="form-control" id="alt" name="alt"
                                        placeholder="Enter Alternative Banner Image Name" 
                                        @if(!empty($banner['alt']))
                                        value="{{$banner['alt']}}" 
                                        @else
                                        value="{{ old('alt') }}" 
                                        @endif>
                                </div>
                            </div>
                        </div>
                           {{-- ROW 1 --}}
                           <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Select Banner Position</label>
                                        <select data-dropdown-css-class="select2-danger" name="banner_position" id="banner_position" class="form-control select2"
                                                style="width: 100%;">
                                                <option value="">Select</option>
                                                @foreach ($positionArray as $position)
                                                    <option value="{{ $position }}"
                                                    @if (!empty($banner['banner_position']) && $banner['banner_position']== $position )
                                                    selected=""
                                                    @endif>{{ $position }}</option>
                                                @endforeach
                                            
                                        </select>
                                </div>
                            </div>
                        </div>


                        {{-- ROW 6 --}}

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="image">Banner Image<span style="font-size: 15px;" class="badge badge-secondary navbar-badge">Recommended Image Size (Width:520px,Height:460px)</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                        <input type="file" class="form-control" name="image" id="image" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @if(!empty($banner['image']))
                        <div class="row">
                            <div class="col-12 col-sm-6">   
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="info-box">
                                    <span class="">
                                    <img class="img-circle elevation-2"  src="{{ asset('img/banner_img/'.$banner['image'])}}" height="80" width="80"/>
                                    </span>

                                    <div class="info-box-content">
                                        <a class="imageView" image_folder="banner_img" image_info="{{$banner['product_name']}}" image_id="{{$banner['image']}}" href="javascript:void(0)">
                                        <button style="width: 150px;margin-bottom:5px;" type="button" class="btn btn-block btn-outline-success">
                                        View Image</button></a>
                                        <a class="confirmDelete" href="javascript:void(0)"  record_type="banner-image" record_id="{{$banner['id']}}" >
                                        <button style="width: 150px;margin-bottom:5px;" type="button" class="btn btn-block btn-outline-danger">
                                        Delete Image</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif --}}











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