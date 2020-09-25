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
                        <li class="breadcrumb-item active">Product Attribute</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @include('sweetalert::alert')
            @if (session('success_message'))
            <div class="alert  alert-success">
                {{ session('success_message') }}
            </div>
            @endif


        {{-- form start --}}
            <form name="attributeForm" id="attributeForm" 
                action="{{ url('admin/add-attributes/'.$productData['id']) }}" method="post"
                enctype="multipart/form-data">@csrf
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Product Attribute Form</h3>
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
                                                    <label for="product_model">Product Model</label>
                                                    <input type="text" class="form-control" id="product_model" name="product_model"
                                                        placeholder="Enter Product Model"value="{{$productData['product_model']}}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="product_code">Product Code</label>
                                                    <input type="text" class="form-control" id="product_code" name="product_code"
                                                        placeholder="Enter Product Code"value="{{$productData['product_code']}}"disabled>
                                                </div>
                                                <div class="form-group">
                                                <div class="field_wrapper">
                                                    <div>
                                                        <input style="width: 310px" type="text" id="sku" name="sku[]" value="" placeholder="SKU" required=""/>
                                                        <input style="width: 310px" type="number" id="stock" name="stock[]" value="" placeholder="STOCK" required=""/>
                                                        <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
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
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>

                </div>
            </form>
        {{-- form end --}}
        
        
        
        
        
        
        {{-- edit-form start --}}
                <form name="editAttributeForm" id="editAttributeForm" 
                        action="{{ url('admin/edit-attributes/'.$productData['id']) }}" method="post">@csrf
                <div class="card">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Product Attributes</h3>
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
                                    <th>Product SKU</th>
                                    <th>Product Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productData['attributes'] as $attribute)
                                <input style="display: none" type="text" name="attrId[]" value="{{$attribute['id']}}">
                                <tr>
                                    <td>{{$attribute['id']}}</td>
                                    <td>{{$attribute['sku']}}</td>
                                    <td><input type="number" name="stock[]" value="{{$attribute['stock']}}"></td>
                                    <td>
                                        <a title="Delete Attribute" class="confirmDelete" record_type="attributes" record_id="{{$attribute['id']}}"  href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                    
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Update Attributes</button>
                </div>
                </form>
        {{-- edit-form start --}}

        </div>
    </section>
</div>
@endsection
