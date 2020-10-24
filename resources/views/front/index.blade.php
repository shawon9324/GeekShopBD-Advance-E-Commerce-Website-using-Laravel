@extends('layouts.front_layout.front_index_layout')
@section('content')
<?php
use App\Section;
$sections = Section::sections();
?> 
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- Slider Section -->
            <div class="mb-5">
                <div class="bg-img-hero" style="background-image: url(img/front_img/1920X422/img1.jpg);">
                    <div class="container min-height-420 overflow-hidden">
                        <div class="js-slick-carousel u-slick"
                            data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">
							@foreach ($banner_top_slider_1 as $btop_1)
							<div class="js-slide bg-img-hero-center">
                                <div class="row min-height-420 py-7 py-md-0">
                                    <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                        <h1 class="font-size-64 text-lh-57 font-weight-light"
                                            data-scs-animation-in="fadeInUp">
                                            {{$btop_1['title']}}
                                        </h1>
                                        <h6 class="font-size-15 font-weight-bold mb-3"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="200">{{$btop_1['product_name']}}
                                        </h6>
                                        <div class="mb-4"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="font-size-13">FROM</span>
                                            <div class="font-size-50 font-weight-bold text-lh-45">
                                                <sup class="">৳</sup>{{$btop_1['new_price']}}
                                            </div>
                                        </div>
                                        <a href="{{$btop_1['link']}}" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="400">
                                            Start Buying
                                        </a>
                                    </div>
                                    <div class="col-xl-5 col-6  d-flex align-items-center"
                                        data-scs-animation-in="zoomIn"
                                        data-scs-animation-delay="500">
                                        <img class="img-fluid" src="{{ asset('img/banner_img/'.$btop_1['image']) }}" alt="{{$btop_1['alt']}}">
                                    </div>
                                </div>
							</div>
							@endforeach
							@foreach ($banner_top_slider_2 as $btop_2)
							<div class="js-slide bg-img-hero-center">
                                <div class="row min-height-420 py-7 py-md-0">
                                    <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                        <h1 class="font-size-64 text-lh-57 font-weight-light"
                                            data-scs-animation-in="fadeInUp">
                                            {{$btop_2['title']}}
                                        </h1>
                                        <h6 class="font-size-15 font-weight-bold mb-3"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="200">{{$btop_2['product_name']}}
                                        </h6>
                                        <div class="mb-4"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="font-size-13">FROM</span>
                                            <div class="font-size-50 font-weight-bold text-lh-45">
                                                <sup class="">৳</sup>{{$btop_2['new_price']}}
                                            </div>
                                        </div>
                                        <a href="{{$btop_2['link']}}" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="400">
                                            Start Buying
                                        </a>
                                    </div>
                                    <div class="col-xl-5 col-6  d-flex align-items-center"
                                        data-scs-animation-in="zoomIn"
                                        data-scs-animation-delay="500">
                                        <img class="img-fluid" src="{{ asset('img/banner_img/'.$btop_2['image']) }}" alt="{{$btop_2['alt']}}">
                                    </div>
                                </div>
							</div>
							@endforeach
							@foreach ($banner_top_slider_3 as $btop_3)
							<div class="js-slide bg-img-hero-center">
                                <div class="row min-height-420 py-7 py-md-0">
                                    <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                        <h1 class="font-size-64 text-lh-57 font-weight-light"
                                            data-scs-animation-in="fadeInUp">
                                            {{$btop_3['title']}}
                                        </h1>
                                        <h6 class="font-size-15 font-weight-bold mb-3"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="200">{{$btop_3['product_name']}}
                                        </h6>
                                        <div class="mb-4"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="font-size-13">FROM</span>
                                            <div class="font-size-50 font-weight-bold text-lh-45">
                                                <sup class="">৳</sup>{{$btop_3['new_price']}}
                                            </div>
                                        </div>
                                        <a href="{{$btop_3['link']}}" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="400">
                                            Start Buying
                                        </a>
                                    </div>
                                    <div class="col-xl-5 col-6  d-flex align-items-center"
                                        data-scs-animation-in="zoomIn"
                                        data-scs-animation-delay="500">
                                        <img class="img-fluid" src="{{ asset('img/banner_img/'.$btop_3['image']) }}" alt="{{$btop_3['alt']}}">
                                    </div>
                                </div>
							</div>
							@endforeach
                        </div>
                    </div>
                </div>
            </div>
			<!-- End Slider Section -->
			

            <div class="container">
                <!-- Banner -->
                <div class="mb-5">
                    <div class="row">
                        
                        <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                            <a href="shop_listing.html" class="d-black text-gray-90">
                                <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                        <img class="img-fluid" src="{{ url('img/front_img/190X150/img3.jpg') }}" alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            DISCOVER MORE CATEGORIES OF <strong>DESKTOP PC <br> <br></strong>
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Discover now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                            <a href="shop_listing.html" class="d-black text-gray-90">
                                <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                        <img class="img-fluid" src="{{ url('img/front_img/190X150/img2.jpg') }}" alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            DISCOVER MORE CATEGORIES OF <strong>LAPTOP & NETBOOK </strong>  
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Discover now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                            <a href="shop_listing.html" class="d-black text-gray-90">
                                <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                        <img class="img-fluid" src="{{ url('img/front_img/190X150/img1.png') }}" alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            DISCOVER MORE CATEGORIES OF <strong>CAMERA  </strong>
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Discover now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                            <a href="shop_listing.html" class="d-black text-gray-90">
                                <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                        <img class="img-fluid" src="{{ url('img/front_img/190X150/img4.png') }}" alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            DISCOVER MORE CATEGORIES OF <strong>GADGET</strong>
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Discover now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Banner -->


                <!-- Deals-and-tabs -->
                <div class="mb-5">
                    <div class="row">
                        <!-- Deal -->
                        <div class="col-md-auto mb-6 mb-md-0">
                            
                            <div style="border-radius:0 0px 0 70px; margin-top:50px;box-shadow: 0 25px 30px 0 rgba(0,0,0,0.2);" class="p-3 border border-width-2 border-primary borders-radius-8 bg-white min-width-370">
                                <div class="d-flex justify-content-between align-items-center m-1 ml-2">
                                    <h3 class="font-size-22 mb-0 font-weight-normal text-lh-28 max-width-120">Special Deal</h3>
                                    {{-- <div class="d-flex align-items-center flex-column justify-content-center bg-primary rounded-pill height-75 width-75 text-lh-1">
                                        <!-- <span class="white-txt font-size-12">Save</span> -->
                                        <div class="white-txt font-size-20 font-weight-bold">-20%</div>
                                    </div> --}}
                                    <div style="transform: translate(-5.19px,-1.8px); " class="ribbon ribbon-top-right"><span>25% off!</span></div>
                                </div>
                                <div class="mb-4">
                                    <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/320X300/img1.jpg') }}" alt="Image Description"></a>
                                </div>
                                <h5 class="mb-2 font-size-14 text-center mx-auto max-width-180 text-lh-18"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller</a></h5>
                                <div class="d-flex align-items-center justify-content-center mb-3">
                                    <del class="font-size-18 mr-2 text-gray-2">৳ 2500 </del>
                                    <ins class="font-size-30 text-red text-decoration-none">৳ 2000</ins>
                                </div>
                                <div class="mb-3 mx-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="">Availavle: <strong>6</strong></span>
                                        <span class="">Already Sold: <strong>28</strong></span>
                                    </div>
                                    <div class="rounded-pill bg-gray-3 height-20 position-relative">
                                       
                                        <span class="position-absolute left-0 top-0 bottom-0 rounded-pill w-90 bg-primary"></span>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <h6 class="font-size-15 text-gray-2 text-center mb-3">Hurry Up! Offer ends in:</h6>
                                    <div class="js-countdown d-flex justify-content-center"
                                        data-end-date="2020/11/30"
                                        data-hours-format="%H"
                                        data-minutes-format="%M"
                                        data-seconds-format="%S">
                                        <div class="text-lh-1">
                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                <span class="js-cd-hours"></span>
                                            </div>
                                            <div class="text-gray-2 font-size-12 text-center">HOURS</div>
                                        </div>
                                        <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                        <div class="text-lh-1">
                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                <span class="js-cd-minutes"></span>
                                            </div>
                                            <div class="text-gray-2 font-size-12 text-center">MINS</div>
                                        </div>
                                        <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                        <div class="text-lh-1">
                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                <span class="js-cd-seconds"></span>
                                            </div>
                                            <div class="text-gray-2 font-size-12 text-center">SECS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Deal -->
						<!-- Tab Prodcut -->
                        <div class="col">
                            <!-- Features Section -->
                            <div class="">
                                <!-- Nav Classic -->
                                <div class="position-relative bg-white text-center z-index-2">
                                    <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active " id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Featured
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    On Sale
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Top Rated
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Nav Classic -->

                                <!-- Tab Content -->
                                <div class="tab-content" id="pills-tabContent">
									{{-- #Featured --}}
									<div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                                        <ul class="row list-unstyled products-group no-gutters">
                                            @foreach ($featured_items as $featured_item) 
                                            <?php $modelName = $featured_item['product_model']; $productUrl = strtolower(str_replace('+','-',urlencode($modelName))); ?>
												<li class="col-6 col-wd-3 col-md-4 product-item">
													<div class="product-item__outer h-100">
														<div class="product-item__inner px-xl-4 p-3">
															<div class="product-item__body pb-xl-2">
																<div class="mb-2"><a href="{{ url('/'.$featured_item['category']['url'])}}" class="font-size-12 text-gray-5">{{$featured_item['category']['category_name']}}</a></div>
																<h5 class="mb-1 product-item__title">
                                                                <a href="{{url('/product/'.$productUrl.'-'.$featured_item['id'])}}" class="text-blue font-weight-bold">{{$featured_item['product_name']}}</a></h5>
																<div class="mb-2">
																	<a href="{{url('/product/'.$productUrl.'-'.$featured_item['id'])}}" class="d-block text-center"><img class="img-fluid" src="{{ asset('img/product_img/small/'.$featured_item['main_image']) }}" style="height: 212px;width:200px;"alt="Image Description"></a>
																</div>
																<div class="flex-center-between mb-1">
																	<div class="prodcut-price">
																		<?php $discount_price=(($featured_item['product_price'])-(round(($featured_item['product_price']*$featured_item['product_discount'])/100))); ?>
																		<div class="text-gray-100">
																			@if($featured_item['product_discount']>0)
																			৳ {{ $discount_price }}
																			<span>
																			<del style="font-size: 15px;">৳ {{$featured_item['product_price']}}</del>
																			</span>
																			@else
																			৳ {{$featured_item['product_price']}}
																			@endif</div>
																		</div>
																	<div class="d-none d-xl-block prodcut-add-cart">
																		<a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
																	</div>
																</div>
															</div>
															<div class="product-item__footer">
																<div class="border-top pt-2 flex-center-between flex-wrap">
																	<a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
																	<a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
																</div>
															</div>
														</div>
													</div>
												</li>
											@endforeach
                                        </ul>
									</div>
                                </div>
                                <!-- End Tab Content -->
                            </div>
                            <!-- End Features Section -->
                        </div>
                        <!-- End Tab Prodcut -->
                    </div>
                </div>
                <!-- End Deals-and-tabs -->
			</div>
			





			
            <!-- Products-4-1-4 -->
            <div class="products-group-4-1-4 space-1 bg-gray-7">
                <h2 class="sr-only">Products Grid</h2>
                <div class="container">
                    <!-- Nav Classic -->
                    <div class="position-relative text-center z-index-2 mb-3">
                        <ul class="nav nav-classic nav-tab nav-tab-sm px-md-3 justify-content-start justify-content-lg-center flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble border-md-down-bottom-0 pb-1 pb-lg-0 mb-n1 mb-lg-0" id="pills-tab-1" role="tablist">
							<?php  $count = array('one','two','three','four','five','six','seven','eight','nine'); ?>
							<?php $i=1;?>
							@foreach ($sections as $section)
						
								<li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                                <a class="nav-link @if($i==1) active @else @endif" id="SectionTab-{{$i}}-tab" data-toggle="pill" href="#SectionTab-{{$i}}" role="tab" aria-controls="SectionTab-{{$i}}" >
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                       {{$section['name']}}
                                    </div>
                                </a>
							</li>
							<?php $i++;?>
							@endforeach
                        </ul>
                    </div>
                    <!-- End Nav Classic -->

                    <!-- Tab Content -->
                    <div class="tab-content" id="Tpills-tabContent">
                        <div class="tab-pane fade pt-2 show active" id="SectionTab-1" role="tabpanel" aria-labelledby="SectionTab-1-tab">
                            <div class="row no-gutters">
                                <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                                    <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                                        <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img1.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img2.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img1.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img7.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-wd-4 products-group-1">
                                    <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                        <li class="col product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body d-flex flex-column">
                                                        <div class="mb-1">
                                                            <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                            <h5 class="mb-0 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller +++ USB 3.0 Cable</a></h5>
                                                        </div>
                                                        <div class="mb-1 min-height-4-1-4">
                                                            <a href="#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="{{ url('img/front_img/564X520/img2.jpg') }}" alt="Image Description"></a>
                                                            <!-- Gallery -->
                                                            <div class="row mx-gutters-2 mb-3">
                                                                <div class="col-auto">
                                                                    <!-- Gallery -->
                                                                    <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                        data-src="{{ url('img/front_img/1920X1080/img1.jpg') }}"
                                                                        data-fancybox="fancyboxGallery6"
                                                                        data-caption="Electro in frames - image #01"
                                                                        data-speed="700"
                                                                        data-is-infinite="true">
                                                                        <img class="img-fluid border" src="{{ url('img/front_img/100X100/img1.jpg') }}" alt="Image Description">

                                                                        <span class="u-media-viewer__container">
                                                                            <span class="u-media-viewer__icon">
                                                                                <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                    <!-- End Gallery -->
                                                                </div>

                                                                <div class="col-auto">
                                                                    <!-- Gallery -->
                                                                    <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                        data-src="{{ url('img/front_img/1920X1080/img2.jpg') }}"
                                                                        data-fancybox="fancyboxGallery6"
                                                                        data-caption="Electro in frames - image #02"
                                                                        data-speed="700"
                                                                        data-is-infinite="true">
                                                                        <img class="img-fluid border" src="{{ url('img/front_img/100X100/img2.jpg') }}" alt="Image Description">

                                                                        <span class="u-media-viewer__container">
                                                                            <span class="u-media-viewer__icon">
                                                                                <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                    <!-- End Gallery -->
                                                                </div>

                                                                <div class="col-auto">
                                                                    <!-- Gallery -->
                                                                    <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                        data-src="{{ url('img/front_img/1920X1080/img3.jpg') }}"
                                                                        data-fancybox="fancyboxGallery6"
                                                                        data-caption="Electro in frames - image #03"
                                                                        data-speed="700"
                                                                        data-is-infinite="true">
                                                                        <img class="img-fluid border" src="{{ url('img/front_img/100X100/img3.jpg') }}" alt="Image Description">

                                                                        <span class="u-media-viewer__container">
                                                                            <span class="u-media-viewer__icon">
                                                                                <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                    <!-- End Gallery -->
                                                                </div>
                                                                <div class="col"></div>
                                                            </div>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="flex-center-between">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                                    <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                                        <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img1.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img2.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img1.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img7.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-2" id="SectionTab-2" role="tabpanel" aria-labelledby="SectionTab-2-tab">
                            <div class="row no-gutters">
                                <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                                    <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                                        <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img1.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img2.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img1.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img7.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-wd-4 products-group-1">
                                    <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                        <li class="col product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body d-flex flex-column">
                                                        <div class="mb-1">
                                                            <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                            <h5 class="mb-0 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                                        </div>
                                                        <div class="mb-1 min-height-4-1-4">
                                                            <a href="#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="{{ url('img/front_img/564X520/img2.jpg') }}" alt="Image Description"></a>
                                                            <!-- Gallery -->
                                                            <div class="row mx-gutters-2 mb-3">
                                                                <div class="col-auto">
                                                                    <!-- Gallery -->
                                                                    <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                        data-src="{{ url('img/front_img/1920X1080/img1.jpg') }}"
                                                                        data-fancybox="fancyboxGallery6"
                                                                        data-caption="Electro in frames - image #01"
                                                                        data-speed="700"
                                                                        data-is-infinite="true">
                                                                        <img class="img-fluid border" src="{{ url('img/front_img/100X100/img1.jpg') }}" alt="Image Description">

                                                                        <span class="u-media-viewer__container">
                                                                            <span class="u-media-viewer__icon">
                                                                                <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                    <!-- End Gallery -->
                                                                </div>

                                                                <div class="col-auto">
                                                                    <!-- Gallery -->
                                                                    <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                        data-src="{{ url('img/front_img/1920X1080/img2.jpg') }}"
                                                                        data-fancybox="fancyboxGallery6"
                                                                        data-caption="Electro in frames - image #02"
                                                                        data-speed="700"
                                                                        data-is-infinite="true">
                                                                        <img class="img-fluid border" src="{{ url('img/front_img/100X100/img2.jpg') }}" alt="Image Description">

                                                                        <span class="u-media-viewer__container">
                                                                            <span class="u-media-viewer__icon">
                                                                                <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                    <!-- End Gallery -->
                                                                </div>

                                                                <div class="col-auto">
                                                                    <!-- Gallery -->
                                                                    <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                        data-src="{{ url('img/front_img/1920X1080/img3.jpg') }}"
                                                                        data-fancybox="fancyboxGallery6"
                                                                        data-caption="Electro in frames - image #03"
                                                                        data-speed="700"
                                                                        data-is-infinite="true">
                                                                        <img class="img-fluid border" src="{{ url('img/front_img/100X100/img3.jpg') }}" alt="Image Description">

                                                                        <span class="u-media-viewer__container">
                                                                            <span class="u-media-viewer__icon">
                                                                                <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                    <!-- End Gallery -->
                                                                </div>
                                                                <div class="col"></div>
                                                            </div>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="flex-center-between">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                                    <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                                        <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img1.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img2.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img1.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                            <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img7.jpg') }}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->
                </div>
			</div>
            <!-- End Products-4-1-4 -->






            
            <div class="container">
                <!-- Prodcut-cards-carousel -->
                <div class="space-top-2">
                    <div class=" d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Latest Products</h3>
                        <ul class="nav nav-pills mb-2 pt-3 pt-md-0 mb-0 border-top border-color-1 border-md-top-0 align-items-center font-size-15 font-size-15-md flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                            <li class="nav-item flex-shrink-0 flex-md-shrink-1">
                                <a class="text-gray-90 btn btn-outline-primary border-width-2 rounded-pill py-1 px-4 font-size-15 text-lh-19 font-size-15-md" >Top 25</a>
                            </li>
                        </ul>
                    </div>
                    <div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 pb-6"
                        data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                        <div class="js-slide">
                            <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
								@foreach ($latest_desktop_pc_products as $latest)
                                <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner p-md-3 row no-gutters">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="#example" class="max-width-150 d-block"><img class="img-fluid" src="{{ asset('img/product_img/small/'.$latest['main_image']) }}" style="height: 150px;width:140px;" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                                <div class="mb-4">
                                                   
                                                    <h5 class="product-item__title"><a href="#example" class="text-blue font-weight-bold">{{$latest['product_name']}}</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-3">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">৳ {{$latest['product_price']}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="#example" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</li>
								@endforeach
                            </ul>
                        </div>
                        <div class="js-slide">
                            <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
								@foreach ($latest_laptop_netbook_products as $latest)
                                <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner p-md-3 row no-gutters">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="{{ asset('img/product_img/small/'.$latest['main_image']) }}" style="height: 150px;width:140px;" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                                <div class="mb-4">
                                                   
                                                    <h5 class="product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">{{$latest['product_name']}}</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-3">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">৳ {{$latest['product_price']}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</li>
								@endforeach
                            </ul>
                        </div>
                        <div class="js-slide">
                            <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
								@foreach ($latest_smartphone_tablets as $latest)
                                <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner p-md-3 row no-gutters">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="#" class="max-width-150 d-block"><img class="img-fluid" src="{{ asset('img/product_img/small/'.$latest['main_image']) }}" style="height: 150px;width:140px;" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                                <div class="mb-4">
                                                   
                                                    <h5 class="product-item__title"><a href="#" class="text-blue font-weight-bold">{{$latest['product_name']}}</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-3">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">৳ {{$latest['product_price']}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</li>
								@endforeach
                            </ul>
                        </div>
                    </div>
				</div>
                <!-- End Prodcut-cards-carousel -->
                <!-- Full banner -->
                <div class="mb-6">
                    <a href="#AD" class="d-block text-gray-90">
                        <div class="" style="background-image: url(img/front_img/1400X206/img1.jpg);">
                            <div class="space-top-2-md p-4 pt-6 pt-md-8 pt-lg-6 pt-xl-8 pb-lg-4 px-xl-8 px-lg-6">
                                <div class="flex-horizontal-center mt-lg-3 mt-xl-0 overflow-auto overflow-md-visble">
                                    <h1 class="text-lh-38 font-size-32 font-weight-light mb-0 flex-shrink-0 flex-md-shrink-1">SHOP AND <strong>SAVE BIG</strong> ON HOTTEST TABLETS</h1>
                                    <div class="ml-5 flex-content-center flex-shrink-0">
                                        <div class="bg-primary rounded-lg px-6 py-2">
                                            <em class="font-size-14 font-weight-light">STARTING AT</em>
                                            <div class="font-size-30 font-weight-bold text-lh-1">
                                                <sup class="">$</sup>79<sup class="">99</sup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Full banner -->
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

@endsection