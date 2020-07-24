@extends('layouts.admin_layout.admin_layout')
@section('content') 
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Admin Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Admin Details</h3>
              </div>
              
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
                      
                        @if ($errors->any())
                            <div class="alert alert-danger" style="margin-top:10px">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                      


              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action ="{{ url('/admin/update-admin-details') }}" name="updateAdminDetails" id="updateAdminDetails" 
              enctype="multipart/form-data">@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Admin Email</label>
                    <input value="{{ Auth::guard('admin')->user()->email }}"  readonly="" type="email" class="form-control" name="admin_email" id="admin_email">
                  </div>

                  <div class="form-group">
                    <label for="adminType">Admin Type</label>
                    <input value="{{ Auth::guard('admin')->user()->type }}"  readonly="" type="text" class="form-control" name="admin_type" id="admin_type" >
                  </div>
                  <div class="form-group">
                    <label for="adminName">Admin Name</label>
                    <input value="{{ Auth::guard('admin')->user()->name }}" type="text" class="form-control" name="admin_name" id="admin_name" required="" >
                  </div>

                  <div class="form-group">
                    <label for="adminMobile">Mobile No.</label>
                    <input value="{{ Auth::guard('admin')->user()->mobile }}" type="text" class="form-control" name="admin_mobile" id="admin_mobile" required="" >
                  </div>

                  <div class="form-group">
                    <label for="adminImage">Image</label>
                    <input type="file" class="form-control" name="admin_image" id="admin_image" accept="image/*">
                    @if(empty(Auth::guard('admin')->user()->iamge))
                    <a target="_blank" href="{{ url('img/admin_img/admin_photos/'.Auth::guard('admin')->user()->image) }}"> View Image </a>
                    <input type="hidden" name="current_admin_image" value="{{ Auth::guard('admin')->user()->image }}">
                    @endif
                  </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </div>













    

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection 