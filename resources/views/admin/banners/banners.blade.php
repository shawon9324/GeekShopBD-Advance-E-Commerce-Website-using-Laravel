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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                            <h3 class="card-title">Banners Information</h3>
                            <a href="{{ url('admin/add-edit-banner') }}" style="max-width:150px; float:right;">
                                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add Banners</button></a>
                        </div>
                        <div class="card-body">
                            <table id="banners" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Product Name</th>
                                        <th>New Price</th>
                                        <th>Old Price</th>
                                        <th>Image</th>
                                        <th>Banner Position</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($banners as $banner)
                                    <tr>
                                        <td>{{$banner->id}}</td>
                                        <td>{{$banner->title}}</td>
                                        <td>{{$banner->product_name}}</td>
                                        <td>{{$banner->new_price}}</td>
                                        <td>{{$banner->old_price}}</td>
                                        <td></td>
                                        <td>{{$banner->banner_position}}</td>
                                        <td>@if($banner->status==1)
                                            <a  title="Status" class="updateBannerStatus btn btn-info" id="banner-{{$banner->id}}" banner_id="{{$banner->id}}" href="javascript:void(0)"><i class="fas fa-toggle-on fa-lg" style="color:greenyellow" status="Active"></i></a>&nbsp;&nbsp;
                                            @else
                                            <a title="Status" class="updateBannerStatus btn btn-info" id="banner-{{$banner->id}}" banner_id="{{$banner->id}}" href="javascript:void(0)"><i class="fas fa-toggle-off fa-lg" status="Inactive"></i></a>&nbsp;&nbsp;
                                            @endif 
                                            <a class="btn btn-success" title="Edit banner" href="{{url('admin/add-edit-banner/'.$banner->id)}}"><i class="fa fa-pencil-square-o"></i> </a>&nbsp;&nbsp;
                                            <a title="Delete banner" class="confirmDelete btn btn-danger" record_type="banner" record_id="{{$banner->id}}"  href="javascript:void(0)"><i class="fas fa-trash"></i></a>                                    
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