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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">FAQ</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-12 text-center">
            <h1>FAQ - GeekshopBD</h1>
        </div>
        <!-- Basics Accordion -->
        <div id="basicsAccordion" class="mb-12">
            <!-- Card -->
            <div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
                <div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingOne">
                    <h5 class="mb-0">
                        <button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn py-3 font-size-25 border-0"
                            data-toggle="collapse"
                            data-target="#basicsCollapseOner"
                            aria-expanded="true"
                            aria-controls="basicsCollapseOner">
                            What Shipping Methods Are Available?

                            <span class="card-btn-arrow">
                                <i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
                            </span>
                        </button>
                    </h5>
                </div>
                <div id="basicsCollapseOner" class="collapse show"
                    aria-labelledby="basicsHeadingOne"
                    data-parent="#basicsAccordion">
                    <div class="card-body pl-0 pb-8">
                        <p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
                <div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingTwo">
                    <h5 class="mb-0">
                        <button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0"
                            data-toggle="collapse"
                            data-target="#basicsCollapseTwo"
                            aria-expanded="false"
                            aria-controls="basicsCollapseTwo">
                            How Long Will it Take To Get My Package?

                            <span class="card-btn-arrow">
                                <i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
                            </span>
                        </button>
                    </h5>
                </div>
                <div id="basicsCollapseTwo" class="collapse"
                    aria-labelledby="basicsHeadingTwo"
                    data-parent="#basicsAccordion">
                    <div class="card-body pl-0 pb-8">
                        <p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
                <div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingThree">
                    <h5 class="mb-0">
                        <button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0"
                            data-toggle="collapse"
                            data-target="#basicsCollapseThree"
                            aria-expanded="false"
                            aria-controls="basicsCollapseThree">
                            How Do I Track My Order?

                            <span class="card-btn-arrow">
                                <i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
                            </span>
                        </button>
                    </h5>
                </div>
                <div id="basicsCollapseThree" class="collapse"
                    aria-labelledby="basicsHeadingThree"
                    data-parent="#basicsAccordion">
                    <div class="card-body pl-0 pb-8">
                        <p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
                <div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingFour">
                    <h5 class="mb-0">
                        <button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0"
                            data-toggle="collapse"
                            data-target="#basicsCollapseFour"
                            aria-expanded="false"
                            aria-controls="basicsCollapseFour">
                            How Do I Place an Order?

                            <span class="card-btn-arrow">
                                <i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
                            </span>
                        </button>
                    </h5>
                </div>
                <div id="basicsCollapseFour" class="collapse"
                    aria-labelledby="basicsHeadingFour"
                    data-parent="#basicsAccordion">
                    <div class="card-body pl-0 pb-8">
                        <p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
                <div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingFive">
                    <h5 class="mb-0">
                        <button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0"
                            data-toggle="collapse"
                            data-target="#basicsCollapseFive"
                            aria-expanded="false"
                            aria-controls="basicsCollapseFive">
                            How Should I to Contact if I Have Any Queries?

                            <span class="card-btn-arrow">
                                <i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
                            </span>
                        </button>
                    </h5>
                </div>
                <div id="basicsCollapseFive" class="collapse"
                    aria-labelledby="basicsHeadingFive"
                    data-parent="#basicsAccordion">
                    <div class="card-body pl-0 pb-8">
                        <p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1">
                <div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingSix">
                    <h5 class="mb-0">
                        <button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0"
                            data-toggle="collapse"
                            data-target="#basicsCollapseSix"
                            aria-expanded="false"
                            aria-controls="basicsCollapseSix">
                            Do I Need an Account to Place an Order?

                            <span class="card-btn-arrow">
                                <i class="fas fa-chevron-down text-gray-90 font-size-18"></i>
                            </span>
                        </button>
                    </h5>
                </div>
                <div id="basicsCollapseSix" class="collapse"
                    aria-labelledby="basicsHeadingSix"
                    data-parent="#basicsAccordion">
                    <div class="card-body pl-0">
                        <p class="mb-0">In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Basics Accordion -->
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection