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
                        <li class="breadcrumb-item active">Sections</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sections Information</h3>
                        </div>
                        <div class="card-body">
                            <table id="sections" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sections as $section)
                                    <tr>
                                        <td>{{$section->id}}</td>
                                        <td>{{$section->name}}</td>
                                        <td>@if($section->status==1)
                                            <a class="updateSectionStatus btn btn-info" id="section-{{$section->id}}" section_id="{{$section->id}}" href="javascript:void(0)"><i class="fas fa-toggle-on fa-lg" style="color:greenyellow" status="Active"></i></a>
                                            @else
                                            <a class="updateSectionStatus btn btn-info" id="section-{{$section->id}}" section_id="{{$section->id}}" href="javascript:void(0)"><i class="fas fa-toggle-off fa-lg"  status="Inactive"></i></a>
                                            @endif
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