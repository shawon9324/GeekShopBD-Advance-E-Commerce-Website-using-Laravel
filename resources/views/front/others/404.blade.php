<?php
	use App\Section;
	$sections = Section::sections();
?>
@extends('layouts.front_layout.front_shop_layout')
@section('content')
 <!-- ========== MAIN CONTENT ========== -->
 <main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Error 404 </li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-5 text-center pb-3 border-bottom border-color-1">
            <h1 class="font-size-sl-72 font-weight-light mb-3">OPPS 404!</h1>
            <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Nothing was found at this location. Try searching, or check out the links below.</p>
        </div>
        <div class="d-flex mb-6">
            <!-- Search Jobs Form -->
            <form class="d-block d-md-flex flex-horizontal-center w-100 w-lg-80 w-xl-50 mx-md-auto">
                <div class="mb-3 mb-md-0 col px-md-2 px-0">
                    <!-- Input -->
                    <div class="js-focus-state">
                        <input type="text" class="form-control" placeholder="Search products…" aria-label="Search products…" aria-describedby="keywordInputAddon">
                    </div>
                    <!-- End Input -->
                </div>
                <div class="">
                    <button type="submit" class="btn btn-block btn-primary-dark-w px-5">Search</button>
                </div>
                <!-- End Checkbox -->
            </form>
            <!-- End Search Jobs Form -->
        </div>
        
        
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection