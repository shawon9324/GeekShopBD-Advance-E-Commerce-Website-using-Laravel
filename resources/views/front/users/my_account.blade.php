<?php
use App\Section;
$sections = Section::sections();
?>
@extends('layouts.front_layout.front_shop_layout')
@section('content')
 <!-- ========== MAIN CONTENT ========== -->
 <main id="content" role="main" class="cart-page">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">My Account</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <div class="mx-xl-10">
            <div class="mb-2 text-center">
                <h1 class="mb-3">My Account</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mb-12" >
              <div class="col-md-4">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle" src="https://www.flaticon.com/svg/static/icons/svg/1177/1177568.svg" alt="User profile picture" style="height: 120px; width:120px;">
                    </div>
                    <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
                  </div>
                </div>
                <div class="card card-primary">
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Email</strong>
                    <p style="margin-bottom:0px" class="text-gray-90">{{$userDetails['email']}}</p>
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Mobile No</strong>
                    <p style="margin-bottom:0px" class="text-gray-90">{{$userDetails['mobile']}}</p>  
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>City</strong>
                    <p style="margin-bottom:0px" class="text-gray-90">{{$userDetails['city']}}</p>  
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>State</strong>
                    <p style="margin-bottom:0px" class="text-gray-90">{{$userDetails['state']}}</p>  
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Country</strong>
                    <p style="margin-bottom:0px" class="text-gray-90">{{$userDetails['country']}}</p>  
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Pincode</strong>
                    <p style="margin-bottom:0px" class="text-gray-90">{{$userDetails['pincode']}}</p>
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Full Address</strong>
                    <p class="text-gray-90">{{$userDetails['address']}}</p>  
                  </div>
                </div>
              </div>


              <div class="col-md-8">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">My Orders</a></li>
                      <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Address Book</a></li>
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Profile Settings</a></li>
                      <li class="nav-item"><a class="nav-link" href="#Password" data-toggle="tab">Update Password</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="activity">
                       <div class="card-title text-center text-gray-300">
                           <h4>Your have no order available!</h4>
                       </div>
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="timeline">
                        <div class="card-title text-center text-gray-300">
                            <h4>Your have no Address Book available!</h4>
                        </div>
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal" id="userProfile" name="userProfile" action="{{url('/update-my-account')}}" method="post">@csrf
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Enter Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$userDetails['name']}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Mobile No</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile No" value="{{$userDetails['mobile']}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="{{$userDetails['city']}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">State</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="state" name="state" placeholder="Enter State" value="{{$userDetails['state']}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Country</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" value="{{$userDetails['country']}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Pincode</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode" value="{{$userDetails['pincode']}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Full Address</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="address" name="address" placeholder="Enter Full Address" value="{{$userDetails['address']}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-success">Update</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="Password">
                        <form class="form-horizontal" id="updatePassword" name="updatePassword" action="{{url('/update-user-password')}}" method="post">@csrf
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label">Current Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter current password" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-4 col-form-label">New Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputExperience" class="col-sm-4 col-form-label">Confirm Passoword</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter your password again" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-success">Update</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection