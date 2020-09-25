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
                        <li class="breadcrumb-item active">Brands</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <form name="brandForm" id="brandForm" @if(empty($brand['id']))
                action="{{ url('admin/add-edit-brand') }}" @else
                action="{{ url('admin/add-edit-brand/'.$brand['id']) }}" @endif method="post">@csrf
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
                                    <label for="brand_name">Brand Name</label>
                                    <input required type="text" class="form-control" id="brand_name" name="brand_name"
                                        placeholder="Enter Brand Name" 
                                        @if(!empty($brand['name']))
                                        value="{{$brand['name']}}" 
                                        @else
                                        value="{{ old('brand_name') }}" 
                                        @endif>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{$btn_title}}</button>
                        <button onclick="goBack()" class="btn btn-info">Go Back</button>
                    </div>
                </div>
            </form>
            {{-- form end --}}
        </div>
    </section>
</div>
@endsection