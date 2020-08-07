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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px">
                        {{ Session::get('success_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Products Information</h3>
                            <a href="{{ url('admin/add-edit-product') }}" style="max-width:150px; float:right;">
                            <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add Product</button></a>
                        </div>
                        <div class="card-body">
                            <table id="products" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Product Model</th>
                                        <th>Product Code</th>
                                        <th>Product Price</th>
                                        <th>Product Image</th>
                                        <th>Category</th>
                                        <th>Section</th>
                                        <th>Featured</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_model}}</td>
                                        <td>{{$product->product_code}}</td>
                                        <td>{{$product->product_price}}</td>
                                        <td> <?php $product_image_path = "img/product_img/small/".$product->main_image; ?>
                                            @if (!empty($product->main_image) && file_exists($product_image_path))
                                            <img style="width: 100px" src="{{ asset('img/product_img/small/'.$product->main_image) }}">
                                            @else
                                            <img style="width: 100px" src="{{ asset('img/product_img/small/no_image.png')}}">
                                            @endif

                                            
                                            
                                        </td>
                                        <td>{{$product->category->category_name}}</td>
                                        <td>{{$product->section->name}}</td>
                                        <td>
                                        @if ($product->is_featured=="Yes")
                                        <input type="checkbox"  disabled="" checked="" onclick="return false;"/>
                                        @else
                                        <input type="checkbox"  disabled="" onclick="return false;"/>
                                        @endif
                                        </td>
                                        <td> 
                                            @if($product->status==1)
                                            <a class="updateProductStatus btn btn-info" id="product-{{$product->id}}" product_id="{{$product->id}}" href="javascript:void(0)"><i class="fas fa-toggle-on fa-lg" style="color:greenyellow" status="Active"></i></a>
                                            @else
                                            <a class="updateProductStatus btn btn-info" id="product-{{$product->id}}" product_id="{{$product->id}}" href="javascript:void(0)"><i class="fas fa-toggle-off fa-lg"  status="Inactive"></i></a>
                                            @endif
                                            <a title="Add Attribute" class="btn btn-secondary" href="{{url('admin/add-attributes/'.$product->id)}}"><i class="fa fa-plus-square"></i></a>&nbsp;
                                            <a title="Add Images" class="btn btn-primary" href="{{url('admin/add-images/'.$product->id)}}"><i class="fa fa-plus-circle"></i></a>&nbsp;
                                            <a title="Edit Product" class="btn btn-success" href="{{url('admin/add-edit-product/'.$product->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;
                                            <a title="Delete Product"  class="confirmDelete btn btn-danger" record_type="product" record_id="{{$product->id}}"  href="javascript:void(0)"><i class="fas fa-trash"></i></a>                                    
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