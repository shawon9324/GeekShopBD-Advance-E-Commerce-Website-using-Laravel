@extends('layouts.admin_layout.admin_layout')
@section('content')


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }} ">Home</a></li>
                        <li class="breadcrumb-item active">Admin Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Admin Profile Info</h3>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-6">
               
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img style="height: 200px;width:200px;" class="profile-user-img img-fluid img-circle" src="{{ url('img/admin_img/admin_photos/'.Auth::guard('admin')->user()->image) }}" alt="User profile picture">
                    </div>
    
                    <h3 class="profile-username text-center">{{ Auth::guard('admin')->user()->name }}</h3>
    
                    <p class="text-muted text-center">({{ Auth::guard('admin')->user()->type }})</p>
    
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b><i class="fa fa-id-card" aria-hidden="true"></i> Name:</b> <a class="float-right">{{ Auth::guard('admin')->user()->name }}</a>
                      </li>
                      <li class="list-group-item">
                        <b><i class="fa fa-user-secret " aria-hidden="true"></i> Admin Type:</b> <a class="float-right"> {{ Auth::guard('admin')->user()->type }}</a>
                      </li>
                      <li class="list-group-item">
                        <b><i class="fa fa-phone-square" aria-hidden="true"></i> Mobile No</b> <a class="float-right"> {{ Auth::guard('admin')->user()->mobile }}</a>
                      </li>
                      <li class="list-group-item">
                        <b><i class="fa fa-envelope" aria-hidden="true"></i> Email</b> <a class="float-right">  {{ Auth::guard('admin')->user()->email }}</a>
                      </li>
                    </ul>
                    <div class="btn-group btn-block" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Update
                        </button>
                        <div class="dropdown-menu col-md-12" aria-labelledby="btnGroupDrop1">
                          <a  class="dropdown-item" href="{{ url('admin/update-admin-details') }}">Update Profile</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ url('admin/settings') }}">Update Password</a>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </section>
</div>

@endsection