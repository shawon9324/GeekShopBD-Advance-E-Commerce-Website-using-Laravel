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
                                        <th>Product MPN</th>
                                        <th>Product Price</th>
                                        <th>Product Regular Price</th>
                                        <th>Discount</th>
                                        <th>Category</th>
                                        <th>Section</th>
                                        <th>Status</th>
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
                                        <td>{{$product->product_mpn}}</td>
                                        <td>{{$product->product_price}}</td>
                                        <td>{{$product->product_regular_price}}</td>
                                        <td>{{$product->product_discount}}</td>
                                        <td>{{$product->category->category_name}}</td>
                                        <td>{{$product->section->name}}</td>
                                        <td>@if($product->status==1)
                                            <a class="updateProductStatus" id="product-{{$product->id}}" product_id="{{$product->id}}" href="javascript:void(0)"> Active</a>
                                            @else
                                            <a class="updateProductStatus" id="product-{{$product->id}}" product_id="{{$product->id}}" href="javascript:void(0)"> Inactive</a>
                                            @endif
                                        </td>
                                        <td> <a href="{{url('admin/add-edit-product/'.$product->id)}}">Edit</a>&nbsp;&nbsp; 
                                        <a class="confirmDelete" record_type="product" record_id="{{$product->id}}"  href="javascript:void(0)">Delete</a>                                    
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