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
                        <li class="breadcrumb-item active">{{$title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            {{-- Alert Box Start --}}
                @if(Session::has('error_message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top:10px">
                            {{ Session::get('error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
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
            <form name="imageForm" id="imageForm" 
                action="{{ url('admin/add-images/'.$productData['id']) }}" method="post"
                enctype="multipart/form-data">@csrf
                <div class="card card-secondary">
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
                                        <div class="col-12 col-sm-5">
                                                <div class="form-group">
                                                    <label for="product_name">Product Name</label>
                                                    <input type="text" class="form-control" id="product_name" name="product_name"
                                                        placeholder="Enter Product Name"value="{{$productData['product_name']}}" disabled>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="product_code">Product Code</label>
                                                    <input type="text" class="form-control" id="product_code" name="product_code"
                                                        placeholder="Enter Product Code"value="{{$productData['product_code']}}"disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="product_code">Product Images</label>
                                                    <input multiple="" type="file" class="form-control" id="images" name="images[]"
                                                       value="" required="" />
                                                </div>

                                            
                                        </div>

                                        <div class="col-12 col-sm-3">
                                        </div>
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="col-12 col-sm-4">
                                                <span class="">
                                                    <img style="max-width: 300px;" src="{{ asset('img/product_img/medium/'.$productData['main_image'])}}">
                                                    </span>
                                                </div>
                                        </div>
                                        
                                    </div>

                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-secondary">Add Images</button>
                    </div>

                </div>
            </form>
        {{-- form end --}}
        
        
        
        
        
        
        {{-- edit-form start --}}
                <form name="editImageForm" id="editImageForm" 
                        action="{{ url('admin/edit-attributes/'.$productData['id']) }}" method="post">@csrf
                <div class="card">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                    <div class="card-body">
                        <table id="products" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productData['images'] as $image)
                                <input style="display: none" type="text" name="imageId[]" value="{{$image['id']}}">
                                <tr>
                                    <td>{{$image['id']}}</td>
                                    <td>
                                        <img style="width: 100px" src="{{ asset('img/product_img/small/'.$image['image']) }}">
                                    </td>
                                    <td>
                                        <a title="Delete Image" class="confirmDelete" record_type="images" record_id="{{$image['id']}}"  href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                    
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Update Images</button>
                </div>
                </form>
        {{-- edit-form start --}}

        </div>
    </section>
</div>
@endsection