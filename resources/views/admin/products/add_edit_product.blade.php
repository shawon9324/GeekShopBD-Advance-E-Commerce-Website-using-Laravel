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
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            {{-- Alert Box Start --}}
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
            {{-- Alert Box End --}}


        {{-- form start --}}
            <form name="productForm" id="productForm" @if(empty($productData['id']))
                action="{{ url('admin/add-edit-product') }}" @else
                action="{{ url('admin/add-edit-product/'.$productData['id']) }}" @endif method="post"
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
                            <br>
                            {{-- Basic Product Information START--}}
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3  class="card-title">Basic Product Information</h3>
                                    </div>
                                </div>
                                {{-- ROW 1 --}}
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Select Category</label>
                                                <select name="category_id" id="category_id" class="form-control select2"
                                                        style="width: 100%;">
                                                    <option value="">Select</option>
                                                    @foreach ($categories as $section)
                                                    <optgroup label="&#128204;&nbsp;{{$section['name']}}"></optgroup>
                                                    @foreach ($section['categories'] as $category)
                                                    <option value="{{ $category['id'] }}"
                                                    @if(!empty(@old('category_id')) && $category['id']==@old('category_id'))
                                                    selected=""
                                                    @elseif(!empty($productData['category_id']) && $productData['category_id']==$category['id'])
                                                    selected=""
                                                    @endif>&nbsp;&nbsp;&#128922;&nbsp;{{ $category['category_name'] }}</option>
                                                    @foreach ($category['subcategories'] as $subcategory)
                                                    <option value="{{ $subcategory['id'] }}"
                                                    @if(!empty(@old('category_id')) && $subcategory['id']==@old('category_id'))
                                                    selected="" 
                                                    @elseif(!empty($productData['category_id']) && $productData['category_id']==$subcategory['id'])
                                                    selected=""
                                                    @endif>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#128923;&nbsp;{{ $subcategory['category_name'] }}</option>
                                                    @endforeach
                                                    @endforeach
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>


                                {{-- ROW 2 --}}
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_name">Product Name</label>
                                            <input type="text" class="form-control" id="product_name" name="product_name"
                                                placeholder="Enter Product Name" 
                                                @if(!empty($productData['product_name']))
                                                value="{{$productData['product_name']}}" 
                                                @else
                                                value="{{ old('product_name') }}" 
                                                @endif>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_model">Product Model</label>
                                            <input type="text" class="form-control" id="product_model" name="product_model"
                                                placeholder="Enter Product Model" 
                                                @if(!empty($productData['product_model']))
                                                value="{{$productData['product_model']}}" 
                                                @else
                                                value="{{ old('product_model') }}" 
                                                @endif>
                                        </div>
                                    </div>
                                </div>
                                

                                {{-- ROW 3 --}}
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_code">Product Code</label>
                                            <input type="text" class="form-control" id="product_code" name="product_code"
                                                placeholder="Enter Product Code" 
                                                @if(!empty($productData['product_code']))
                                                value="{{$productData['product_code']}}" 
                                                @else
                                                value="{{ old('product_code') }}" 
                                                @endif>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_mpn">Product MPN</label>
                                            <input type="text" class="form-control" id="product_mpn" name="product_mpn"
                                                placeholder="Enter Product MPN" 
                                                @if(!empty($productData['product_mpn']))
                                                value="{{$productData['product_mpn']}}" 
                                                @else
                                                value="{{ old('product_mpn') }}" 
                                                @endif>
                                        </div>
                                    </div>
                                </div>

                                {{-- ROW 4 --}}
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label for="product_price">Product Price</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">&#2547;</span>
                                            </div>
                                            <input type="text" class="form-control" id="product_price" name="product_price"
                                                placeholder="Enter Product Price" 
                                                @if(!empty($productData['product_price']))
                                                value="{{$productData['product_price']}}" 
                                                @else
                                                value="{{ old('product_price') }}" 
                                                @endif>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for="product_price">Product Regular Price</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">&#2547;</span>
                                            </div>
                                            <input type="text" class="form-control" id="product_regular_price" name="product_regular_price"
                                                placeholder="Enter Product Price" 
                                                @if(!empty($productData['product_regular_price']))
                                                value="{{$productData['product_regular_price']}}" 
                                                @else
                                                value="{{ old('product_regular_price') }}" 
                                                @endif>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                {{-- ROW 5 --}}
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label style="margin-top: 10px"  for="product_discount">Product Discount(%)</label>
                                            <input type="text" class="form-control" id="product_discount" name="product_discount"
                                                placeholder="Enter Product Discount" 
                                                @if(!empty($productData['product_discount']))
                                                value="{{$productData['product_discount']}}" 
                                                @else
                                                value="{{ old('product_discount') }}" 
                                                @endif>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label style="margin-top: 10px" for="warranty">Product Warranty</label>
                                            <input type="text" class="form-control" id="warranty" name="warranty"
                                                placeholder="Enter Product Warranty" 
                                                @if(!empty($productData['warranty']))
                                                value="{{$productData['warranty']}}" 
                                                @else
                                                value="{{ old('warranty') }}" 
                                                @endif>
                                        </div>
                                    </div>
                                </div>

                                {{-- ROW 6 --}}

                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_video">Product Main Video</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                <input type="file" class="form-control" name="product_video" id="product_video" accept="video/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="main_image">Product Main Image<span style="font-size: 15px;" class="badge badge-secondary navbar-badge">Recommended Image Size (Width:1040px,Height:1200px)</span></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                <input type="file" class="form-control" name="main_image" id="main_image" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(!empty($productData['main_image']))
                                {{-- NEW ROW  --}}
                                <div class="row">
                                    <div class="col-12 col-sm-6">   
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="info-box">
                                            <span class="">
                                            <img class="img-circle elevation-2"  src="{{ asset('img/product_img/medium/'.$productData['main_image'])}}" height="80" width="80"/>
                                            </span>

                                            <div class="info-box-content">
                                                <a class="imageView" image_folder="product_img/medium" image_info="{{$productData['product_name']}}" image_id="{{$productData['main_image']}}" href="javascript:void(0)">
                                                <button style="width: 150px;margin-bottom:5px;" type="button" class="btn btn-block btn-outline-success">
                                                View Image</button></a>
                                                <a class="confirmDelete" href="javascript:void(0)"  record_type="product-image" record_id="{{$productData['id']}}" >
                                                <button style="width: 150px;margin-bottom:5px;" type="button" class="btn btn-block btn-outline-danger">
                                                Delete Image</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            {{-- Basic Product Information END--}} 
                            <br>
                        
                            {{-- Product Features START--}} 
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3  class="card-title">Product Main Features</h3>
                                    </div>
                                </div>

                                {{-- ROW 1 --}}

                                <div class="row">
                                    <div class="col-12 col-sm-7">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="fa-stack"><span class="fa fa-circle-o fa-stack-2x"></span><strong class="fa-stack-1x">1</strong></span>
                                                </div>
                                                <input type="text" class="form-control" id="feature_1" name="feature_1"
                                                    placeholder="Enter Products Main Feature" 
                                                    @if(!empty($productData['feature_1']))
                                                    value="{{$productData['feature_1']}}" 
                                                    @else
                                                    value="{{ old('feature_1') }}" 
                                                    @endif>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="fa-stack"><span class="fa fa-circle-o fa-stack-2x"></span><strong class="fa-stack-1x">2</strong></span>
                                                </div>
                                                <input type="text" class="form-control" id="feature_2" name="feature_2"
                                                    placeholder="Enter Products Main Feature" 
                                                    @if(!empty($productData['feature_2']))
                                                    value="{{$productData['feature_2']}}" 
                                                    @else
                                                    value="{{ old('feature_2') }}" 
                                                    @endif>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="fa-stack"><span class="fa fa-circle-o fa-stack-2x"></span><strong class="fa-stack-1x">3</strong></span>
                                                </div>
                                                <input type="text" class="form-control" id="feature_3" name="feature_3"
                                                    placeholder="Enter Products Main Feature" 
                                                    @if(!empty($productData['feature_3']))
                                                    value="{{$productData['feature_3']}}" 
                                                    @else
                                                    value="{{ old('feature_3') }}" 
                                                    @endif>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="fa-stack"><span class="fa fa-circle-o fa-stack-2x"></span><strong class="fa-stack-1x">4</strong></span>
                                                </div>
                                                <input type="text" class="form-control" id="feature_4" name="feature_4"
                                                    placeholder="Enter Products Main Feature" 
                                                    @if(!empty($productData['feature_4']))
                                                    value="{{$productData['feature_4']}}" 
                                                    @else
                                                    value="{{ old('feature_4') }}" 
                                                    @endif>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="fa-stack"><span class="fa fa-circle-o fa-stack-2x"></span><strong class="fa-stack-1x">5</strong></span>
                                                </div>
                                                <input type="text" class="form-control" id="feature_5" name="feature_5"
                                                    placeholder="Enter Products Main Feature" 
                                                    @if(!empty($productData['feature_5']))
                                                    value="{{$productData['feature_5']}}" 
                                                    @else
                                                    value="{{ old('feature_5') }}" 
                                                    @endif>
                                            </div>
                                            <br>
                                    </div>
                                </div>                             
                            {{-- Product Features END --}} 
                            
                      
                            {{-- Product Full Description START--}} 
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3  class="card-title">Product Full Description</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group">
                                            
                                            <textarea name="description" id="description" class="full_description"
                                                placeholder="Enter Product Description ...">@if(!empty($productData['description'])){{$productData['description']}}@else{{ old('description') }}@endif</textarea>
                                        </div>
                                    </div>
                                </div>
                            {{-- Product Full Description END--}} 


                            {{-- SEO Information START--}} 
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3  class="card-title">SEO Information</h3>
                                    </div>
                                </div>

                                {{-- ROW 7 --}}

                                <div class="row">
                                    
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="meta_title">Meta Title</label>
                                            <textarea id="meta_title" name="meta_title" class="form-control" rows="3"
                                                placeholder="Enter Meta Title ...">@if(!empty($productData['meta_title'])){{$productData['meta_title']}}@else{{ old('meta_title') }}@endif</textarea>
                                            </div>
                                        </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea id="meta_description" name="meta_description" class="form-control"
                                                rows="3" placeholder="Enter Meta Description ...">@if(!empty($productData['meta_description'])){{$productData['meta_description']}}@else{{ old('meta_description') }}@endif</textarea>
                                        </div>
                                    </div>
                                </div>

                                {{-- ROW 8 --}}

                                <div class="row">

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="meta_keywords">Meta Keywords</label>
                                            <textarea id="meta_keywords" name="meta_keywords" class="form-control" rows="3"
                                                placeholder="Enter Meta Keywords ...">@if(!empty($productData['meta_keywords'])){{$productData['meta_keywords']}}@else{{ old('meta_keywords') }}@endif</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        
                                    </div>
                                </div>
                            {{-- SEO Information END --}} 


                            {{-- ADDITIONAL INFORMATION START--}}

                                <div class="card card-danger">
                                    <div class="card-header">
                                        <h3 class="card-title">Additional Product Information</h3>
                                    </div>
                                </div>
                                {{-- ROW 1 --}}
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Select Generation</label>
                                                <select data-dropdown-css-class="select2-danger" name="generation" id="generation" class="form-control select2"
                                                        style="width: 100%;">
                                                        <option value="">Select</option>
                                                        @foreach ($generationArray as $generation)
                                                            <option value="{{ $generation }}"
                                                            @if (!empty($productData['generation']) && $productData['generation']== $generation )
                                                            selected=""
                                                            @endif>{{ $generation }}</option>
                                                        @endforeach
                                                    
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Select Processor</label>
                                                <select data-dropdown-css-class="select2-danger" name="processor" id="processor" class="form-control select2"
                                                        style="width: 100%;">
                                                    <option value="">Select</option>
                                                    @foreach ($processorArray as $processor)
                                                            <option value="{{ $processor }}"
                                                            @if (!empty($productData['processor']) && $productData['processor']== $processor )
                                                            selected=""
                                                            @endif>{{ $processor }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                    {{-- ROW X --}}
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Select Grahpics</label>
                                                <select data-dropdown-css-class="select2-danger" name="graphics" id="graphics" class="form-control select2"
                                                        style="width: 100%;">
                                                    <option value="">Select</option>
                                                    @foreach ($graphicsArray  as $graphics)
                                                    <option value="{{ $graphics }}"
                                                    @if (!empty($productData['graphics']) && $productData['graphics']== $graphics )
                                                    selected=""
                                                    @endif>{{ $graphics }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Select RAM</label>
                                                <select data-dropdown-css-class="select2-danger" name="ram" id="ram" class="form-control select2"
                                                        style="width: 100%;">
                                                    <option value="">Select</option>
                                                    @foreach ($ramArray as $ram)
                                                    <option value="{{ $ram }}"
                                                    @if (!empty($productData['ram']) && $productData['ram']== $ram )
                                                            selected=""
                                                            @endif>{{ $ram }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                    {{-- ROW X --}}
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Select HDD</label>
                                                <select data-dropdown-css-class="select2-danger" name="hdd" id="hdd" class="form-control select2"
                                                        style="width: 100%;">
                                                    <option value="">Select</option>
                                                    @foreach ($hddArray as $hdd)
                                                    <option value="{{ $hdd }}"
                                                    @if (!empty($productData['hdd']) && $productData['hdd']== $hdd )
                                                            selected=""
                                                            @endif>{{ $hdd }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Select SSD</label>
                                                <select data-dropdown-css-class="select2-danger" name="ssd" id="ssd" class="form-control select2"
                                                        style="width: 100%;">
                                                    <option value="">Select</option>
                                                    @foreach ($ssdArray as $ssd)
                                                    <option value="{{ $ssd }}"
                                                    @if (!empty($productData['ssd']) && $productData['ssd']== $ssd )
                                                            selected=""
                                                            @endif>{{ $ssd }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            {{-- ADDITIONAL INFORMATION END--}}
                            <div style="margin-top: 5px" class="form-group clearfix">
                                <div class="icheck-success d-inline">
                                  <input type="checkbox" id="is_featured" name="is_featured"
                                  @if(!empty($productData['is_featured']) &&$productData['is_featured'] == "Yes" )
                                  checked=""
                                  @endif>
                                    <label for="is_featured">
                                        Featured Product
                                    </label>
                                </div>
                            </div>
                    </div>

                    <div class="card-footer">
                        <button style="margin-top: 15px;margin-bottom: 5px; width: 150px;"  
                         type="submit" class="btn btn-success">{{$btn_title}}</button>
                    </div>

                </div>
            </form>
        {{-- form end --}}
        </div>
    </section>
</div>
@endsection
