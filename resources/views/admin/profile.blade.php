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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-9">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Admin Profile</h3>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="img-circle elevation-5" src="{{ url('img/admin_img/admin_photos/'.Auth::guard('admin')->user()->image) }}" alt="User profile picture">
                  </div>

                  </div>
                <!-- /.card-body -->
              </div>
            </div>
              <!-- /.card -->

              <div class="col-md-6">
              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Name:</strong>
                  <p class="text-muted">
                    {{ Auth::guard('admin')->user()->name }}
                  </p>
                  <hr>
                  <strong><i class="fas fa-book mr-1"></i> Admin Type:</strong>
                  <p class="text-muted">
                    {{ Auth::guard('admin')->user()->type }}
                  </p>
                  <hr>
                  <strong><i class="fas fa-book mr-1"></i> Mobile No</strong>
                  <p class="text-muted">
                    {{ Auth::guard('admin')->user()->mobile }}
                  </p>
                  <hr>
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Email</strong>
                  <p class="text-muted">{{ Auth::guard('admin')->user()->email }}</p>
                  <hr>
                  <div class="row">
                  <div class="col-md-6">
                      <a href="{{ url('admin/update-admin-details') }}" class="btn btn-secondary btn-block"><b>Update Profile</b></a>
                  </div>
                  <div class="col-md-6">
                    <a href="{{ url('admin/settings') }}" class="btn btn-danger btn-block"><b>Update Password</b></a>
                  </div>
                </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>

@endsection