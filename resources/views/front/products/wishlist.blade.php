<?php
use App\Section;

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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Wishlist</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-4">
            <h1 class="text-center">My Wishlist</h1>
        </div>
        <div class="AppendWishlistItems">
            @include('front.products.wishlist_item')
        </div>
        
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection