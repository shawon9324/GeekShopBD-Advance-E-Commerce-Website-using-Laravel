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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Login/Register</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <div class="mb-4">
            <h1 class="text-center">My Account</h1>
        </div>
        <div class="my-4 my-xl-8">
            <div class="row">
                <div class="col-md-5 ml-md-auto ml-xl-0 mr-xl-auto">
                    <!-- Title -->
                    <div class="border-bottom border-color-1 mb-6">
                        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Register</h3>
                    </div>
                    <p class="text-gray-90 mb-4">Create new account today to reap the benefits of a personalized shopping experience.</p>
                    <!-- End Title -->
                    <!-- Form Group -->
                    <form class="userRegistration "  name="userRegistration" id="userRegistration" action="{{ url('/register') }} " method="post" >@csrf
                        <div class="form-group mb-5">
                            <label class="form-label" for="userName">Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter your name" aria-label="Name">
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label" for="userMobile">Mobile No
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="user_mobile" id="user_mobile" placeholder="Enter your mobile no" aria-label="Mobile">
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label" for="userEmail">Email address
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email address" aria-label="Email address" >
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label" for="userPassword">Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Enter password" aria-label="Password" >
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label" for="userConfirmPassword">Confirm Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" name="user_confirm_password" id="user_confirm_password" placeholder="Enter your password again" aria-label="Confirm Password" required    data-msg="Please enter correct password">
                        </div>
                        <!-- End Form Group -->
                        <p class="text-gray-90 mb-4">Your personal data will be used to support your experience throughout this website, to manage your account, and for other purposes described in our <a href="{{url('/faqs')}}" class="text-blue">privacy policy.</a></p>
                        <!-- Button -->
                        <div class="mb-6">
                            <div class="mb-3">
                                <button type="submit" class=" btn btn-primary-dark-w px-5">Register</button>
                            </div>
                        </div>
                        <!-- End Button -->
                    </form>
                    <h3 class="font-size-18 mb-3">Sign up today and you will be able to :</h3>
                    <ul class="list-group list-group-borderless">
                        <li class="list-group-item px-0"><i class="fas fa-check mr-2 text-green font-size-16"></i> Speed your way through checkout</li>
                        <li class="list-group-item px-0"><i class="fas fa-check mr-2 text-green font-size-16"></i> Track your orders easily</li>
                        <li class="list-group-item px-0"><i class="fas fa-check mr-2 text-green font-size-16"></i> Keep a record of all your purchases</li>
                    </ul>
                </div>
                <div class="col-md-1 d-none d-md-block">
                    <div class="flex-content-center h-100">
                        <div class="width-1 bg-1 h-100"></div>
                        <div class="width-50 height-50 border border-color-1 rounded-circle flex-content-center font-italic bg-white position-absolute">or</div>
                    </div>
                </div>
                <div class="col-md-5 ml-xl-auto mr-md-auto mr-xl-0 mb-8 mb-md-0">
                    <!-- Title -->
                    <div class="border-bottom border-color-1 mb-6">
                        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Login</h3>
                    </div>
                    <p class="text-gray-90 mb-4">Welcome back! Sign in to your account.</p>
                    <!-- End Title -->
                    <form class="userLogin"  name="userLogin" id="userLogin" action="{{ url('/login') }} " method="post" >@csrf                        <!-- Form Group -->
                        <div class=" form-group">
                            <label class="form-label" for="signinEmail">Email address
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" name="login_email" id="login_email" placeholder="Username or Email address" aria-label="Username or Email address">
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class=" form-group">
                            <label class="form-label" for="signinSrPasswordExample2">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="login_password" id="login_password" placeholder="Password" aria-label="Password">
                        </div>
                        <!-- End Form Group -->
                        <!-- Checkbox -->
                        <div class=" mb-3">
                            <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="rememberCheckbox">
                                <label class="custom-control-label form-label" for="rememberCheckbox">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <!-- End Checkbox -->
                        <!-- Button -->
                        <div class="mb-1">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary-dark-w px-5">Login</button>
                            </div>
                            <div class="mb-2">
                                <a class="text-blue" href="#">Lost your password?</a>
                            </div>
                        </div>
                        <!-- End Button -->
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection