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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Reset Password</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <div class="mx-xl-10">
            <div class="mb-6 text-center">
                <h1 class="mb-6">Reset Password</h1>
            </div>
            <div class="my-4 my-xl-8">
                <form action="{{url('recover/auth='.$email)}}"  method="POST" id="recoverPassowrd" name="recoverPassowrd" >@csrf
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="js-form-message form-group">
                                <label class="form-label" for="RecoverPassword">New Password
                                </label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your New Password" aria-label="Enter your New Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="js-form-message form-group">
                                <label class="form-label" for="RecoverPassword">Confirm Password
                                </label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter your Password again" aria-label="Enter your Password again">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-12">
                        <button type="submit" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection