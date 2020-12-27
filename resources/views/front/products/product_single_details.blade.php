<?php
    use App\Section;
	$sections = Section::sections();
?>             
@extends('layouts.front_layout.front_shop_layout')
@section('content')
@include('sweetalert::alert')
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
                                {{-- <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a >{{$productDetails['section']['name']}}</a></li> --}}
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ url('/'.$productDetails['category']['url'])}}">{{$productDetails['category']['category_name']}}</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{$productDetails['product_name']}}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->
            


            <div class="container">

                <!-- Single Product Body -->
                <div class="mb-xl-14 mb-6">
                    <div class="row">
                        <div class="col-md-5 mb-4 mb-md-0">
                            <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                                data-infinite="true"
                                data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                                data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                                data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                                data-nav-for="#sliderSyncingThumb">
                                <div class="js-slide">
                                    <img class="img-fluid" src="{{ url('img/product_img/large/'.$productDetails['main_image']) }}" alt="Image Description">
                                </div>
                                @foreach ($productDetails['images'] as $img)
                                <div class="js-slide">
                                    <img class="img-fluid" src="{{ url('img/product_img/large/'.$img['image']) }}" alt="Image Description">
                                </div>
                                @endforeach
                                
                            </div>

                            <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                                data-infinite="true"
                                data-slides-show="5"
                                data-is-thumbs="true"
                                data-nav-for="#sliderSyncingNav">
                                    <div class="js-slide" style="cursor: pointer;">
                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="{{ url('img/product_img/large/'.$productDetails['main_image']) }}" data-fancybox="fancyboxGallery6" data-caption="{{$productDetails['product_name']}}" data-speed="700" data-is-infinite="true">
                                            <img class="img-fluid" src="{{ url('img/product_img/small/'.$productDetails['main_image']) }}" alt="Image Description">
                                                <span class="u-media-viewer__container">
                                                    <span class="u-media-viewer__icon">
                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                    </span>
                                                </span>
                                        </a>
                                    </div>
                                    @foreach ($productDetails['images'] as $img)
                                    <div class="js-slide" style="cursor: pointer;">
                                            <!-- Gallery -->
                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="{{ url('img/product_img/large/'.$img['image']) }}" data-fancybox="fancyboxGallery6" data-caption="{{$productDetails['product_name']}}" data-speed="700" data-is-infinite="true">
                                                <img class="img-fluid" src="{{ url('img/product_img/small/'.$img['image']) }}" alt="Image Description">

                                                <span class="u-media-viewer__container">
                                                    <span class="u-media-viewer__icon">
                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                            <!-- End Gallery -->
                                    @endforeach

                            </div>
                        </div>
                        <div class="col-md-7 mb-md-6 mb-lg-0">
                            <div class="mb-2">
                                <div class="border-bottom mb-3 pb-md-1 pb-3">
                                    <div id="success-add-to-cart" class="alert  alert-success " style="display: none;">
                                    @include('front.products.cart_added_successful_message')
                                    </div>
                                    <a href="{{ url('/'.$productDetails['category']['url'])}}" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$productDetails['category']['category_name']}}</a>
                                    <h2 class="font-size-25 text-lh-1dot2">{{$productDetails['product_name']}}</h2>
                                    <div class="mb-2">
                                        <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                            @if(round($ratings['overall']) == 0 )
                                            <small class="far fa-star text-muted"></small>
                                            <small class="far fa-star text-muted"></small>
                                            <small class="far fa-star text-muted"></small>
                                            <small class="far fa-star text-muted"></small>
                                            <small class="far fa-star text-muted"></small>
                                            @else
                                                @foreach(range(1,round($ratings['overall'])) as $i)
                                                <small class="fas fa-star"></small>
                                                @endforeach
                                                @if(round($ratings['overall']) < 5)
                                                @foreach(range(1,(5-round($ratings['overall']))) as $i)
                                                <small class="far fa-star text-muted"></small>
                                                @endforeach
                                                @endif
                                            @endif
                                            <span class="text-secondary font-size-13">({{count($products_review)}} customer reviews)</span>
                                        </a>
                                    </div>
                                    @if($total_stock_status>0 && $total_stock>0 )
                                    <div class="d-md-flex align-items-center">
                                        <div class="text-gray-9 font-size-14">Availability : <span class="text-green font-weight-bold">{{$total_stock}} in stock</span></div>
                                    </div>
                                    <?php $add_cart_pass = 1 ?>
                                    @else
                                    <div class="d-md-flex align-items-center">
                                        <div class="text-gray-9 font-size-14">Availability: <span class="text-red font-weight-bold">Out of stock</span></div>
                                    </div>
                                    <?php $add_cart_pass = 0 ?>
                                    @endif
                                    
                                </div>
                                <div class="flex-horizontal-center flex-wrap mb-4">
                                    <a id="product-{{ $productDetails['id'] }}" product_id="{{ $productDetails['id'] }}" product_name="{{$productDetails['product_name']}}" href="javascript:void()" class="add-to-wishlist text-gray-6 font-size-13 mr-2"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    <a id="product-{{ $productDetails['id'] }}" product_id="{{ $productDetails['id'] }}" product_name="{{$productDetails['product_name']}}" href="javascript:void()" class="add-to-compare text-gray-6 font-size-13 ml-2"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                </div>
                                <div class="mb-2">
                                    <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                        <li>{{$productDetails['feature_1']}}</li>
                                        <li>{{$productDetails['feature_2']}}</li>
                                        <li>{{$productDetails['feature_3']}}</li>
                                        <li>{{$productDetails['feature_4']}}</li>
                                        <li>{{$productDetails['feature_5']}}</li>
                                    </ul>
                                </div>
                                <p>
                                <strong>Price</strong>: ৳  {{$productDetails['product_price']}} <br>
                                <strong>MPN</strong>: {{$productDetails['product_mpn']}} <br>
                                <strong>CODE</strong>: {{$productDetails['product_code']}} <br>
                                <input type="hidden" name="product_id" value=" {{$productDetails['id']}} ">
                                <div class="mb-4">
                                    <div class="d-flex align-items-baseline">
                                        @if($productDetails['product_discount']>0)
                                        <?php $discount_price=(($productDetails['product_price'])-(round(($productDetails['product_price']*$productDetails['product_discount'])/100))); ?>
                                        <ins class="font-size-36 text-decoration-none getDiscountPrice">৳ {{$discount_price}}</ins>
                                        <del class="font-size-20 ml-2 text-gray-6 getAttrPrice">৳ {{$productDetails['product_price']}}</del>
                                        @else
                                        <ins class="font-size-36 text-decoration-none getAttrPrice">৳ {{$productDetails['product_price']}}</ins>
                                        @endif
                                    </div>
                                </div>

                                <div class="border-top border-bottom py-3 mb-4">
                                    <div class="d-flex align-items-center">
                                        <h6 class="font-size-14 mb-0">Color : </h6>
                                        @if($productDetails['attributes'][0]['color']=="")
                                        <h6 class="font-size-14 mb-0 text-red font-weight-bold">&nbsp;Not available</h6>
                                        @else
                                        <!-- Select -->
                                        <select  required="" name="color" id="getPrice" product-id="{{$productDetails['id']}}" class="js-select selectpicker dropdown-select ml-3"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border">
                                        <option value="none" >Select Color</option>
                                        @foreach ($productDetails['attributes'] as $attr)
                                            @if($attr['status']==1 && $attr['stock']>0 && $attr['color']!="" )
                                            <option value="{{$attr['color']}}" >{{$attr['color']}}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                        <!-- End Select -->
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="d-md-flex align-items-end mb-3">
                                    <div class="max-width-150 mb-4 mb-md-0">
                                        <h6 class="font-size-14">Quantity</h6>
                                        <!-- Quantity -->
                                        <div class="border rounded-pill py-2 px-3 border-color-1">
                                            <div class="js-quantity row align-items-center">
                                                <div class="col">
                                                    <input id="qty" class="js-result form-control h-auto border-0 rounded p-0 shadow-none" name="quantity" type="text" value="1" required="">
                                                </div>
                                                <div class="col-auto pr-1">
                                                    <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-minus btn-icon__inner"></small>
                                                    </a>
                                                    <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-plus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Quantity -->
                                    </div>
                                    <input type="hidden" name="product_id" id="product_id" value="{{$productDetails['id']}}">
                                    <div class="ml-md-3">
                                       <button id="add-to-cart" class="btn btn-primary height-40 py-2 px-3" type="submit"  @if($add_cart_pass==0) disabled @else @endif ><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Add to Cart</button> 
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product Body -->
                <!-- Single Product Tab -->
                <div class="mb-8">
                    <div class="position-relative position-md-static px-md-6">
                        <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0" id="pills-tab-8" role="tablist">
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link active" id="Jpills-two-example1-tab" data-toggle="pill" href="#Jpills-two-example1" role="tab" aria-controls="Jpills-two-example1" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link" id="Jpills-three-example1-tab" data-toggle="pill" href="#Jpills-three-example1" role="tab" aria-controls="Jpills-three-example1" aria-selected="false">Specification</a>
                            </li>
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link" id="Jpills-four-example1-tab" data-toggle="pill" href="#Jpills-four-example1" role="tab" aria-controls="Jpills-four-example1" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab Content -->
                    <div class="borders-radius-17 border p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
                        <div class="tab-content" id="Jpills-tabContent">
                            {{-- Description --}}
                            <div class="tab-pane fade active show " id="Jpills-two-example1" role="tabpanel" aria-labelledby="Jpills-two-example1-tab">
                                
                                {{-- <div class="row"> --}}
                                    {{-- <div class="col-md-12 pt-lg-12 pt-xl-12 sm-6"> --}}
                                        
                                            <p><?php $x = htmlentities($productDetails['description'])  ;
                                                $description = html_entity_decode($x);
                                                echo "$description";
                                             ?></p>
                                    {{-- </div> --}}
                                {{-- </div> --}}
                                <ul class="nav flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                    <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Category:</strong> <a href="{{ url('/'.$productDetails['category']['url'])}}" class="text-blue">{{$productDetails['category']['category_name']}}</a></li>
                                    <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                                    <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Brand:</strong> <a  class="text-blue">{{$productDetails['brand']['name']}}</a></li>
                                </ul>
                            </div>
                            {{-- Specification --}}
                            <div class="tab-pane fade" id="Jpills-three-example1" role="tabpanel" aria-labelledby="Jpills-three-example1-tab">
                                <div class="mx-md-5 pt-1">
                                    
                                    <h3 class="font-size-18 mb-4">Technical Specifications</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th class="px-4 px-xl-5 border-top-0">Brand</th>
                                                    <td class="border-top-0">{{$productDetails['brand']['name']}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Model Name</th>
                                                    <td>{{$productDetails['product_model']}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Generation</th>
                                                    <td>{{$productDetails['generation']}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Processor</th>
                                                    <td>{{$productDetails['processor']}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Graphics Card</th>
                                                    <td>{{$productDetails['processor']}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">RAM</th>
                                                    <td>{{$productDetails['ram']}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Hard Disk Drive(HDD)</th>
                                                    <td>{{$productDetails['hdd']}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Solid-State Drive(SSD)</th>
                                                    <td>{{$productDetails['ssd']}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Product Warranty</th>
                                                    <td>{{$productDetails['warranty']}} years</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- Reviews --}}
                            
                            <div class="AppendProductReviews tab-pane fade" id="Jpills-four-example1" role="tabpanel" aria-labelledby="Jpills-four-example1-tab">
                                @include('front.products.product_reviews')
                            </div>
                            {{--End Reviews --}}
                        </div>
                    </div>
                    <!-- End Tab Content -->
                </div>
                <!-- End Single Product Tab -->




                <!-- Related products -->
                <div class="mb-6">
                    <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Related products</h3>
                    </div>
                    <ul class="row list-unstyled products-group no-gutters">
                        @foreach ($relatedProuducts as $relatedProuduct) 
                                            <?php $modelName = $relatedProuduct['product_model']; $productUrl = strtolower(str_replace('+','-',urlencode($modelName))); ?>
												<li class="col-6 col-wd-3 col-md-4 product-item">
													<div class="product-item__outer h-100">
														<div class="product-item__inner px-xl-4 p-3">
															<div class="product-item__body pb-xl-2">
                                                                

																<div class="mb-2"><a href="{{ url('/'.$productDetails['category']['url'])}}" class="font-size-12 text-gray-5">{{$productDetails['category']['category_name']}}</a></div>
																<h5 class="mb-1 product-item__title"><a href="{{url('/product/'.$productUrl.'-'.$relatedProuduct['id'])}}" class="text-blue font-weight-bold">{{$relatedProuduct['product_name']}}</a></h5>
																<div class="mb-2">
																	<a href="{{url('/product/'.$productUrl.'-'.$relatedProuduct['id'])}}" class="d-block text-center"><img class="img-fluid" src="{{ asset('img/product_img/small/'.$relatedProuduct['main_image']) }}" style="height: 212px;width:200px;"alt="Image Description"></a>
																</div>
																<div class="flex-center-between mb-1">
																	<div class="prodcut-price">
																		<?php $discount_price=(($relatedProuduct['product_price'])-(round(($relatedProuduct['product_price']*$relatedProuduct['product_discount'])/100))); ?>
																		<div class="text-gray-100">
																			@if($relatedProuduct['product_discount']>0)
																			৳ {{ $discount_price }}
																			<span>
																			<del style="font-size: 15px;">৳ {{$relatedProuduct['product_price']}}</del>
																			</span>
																			@else
																			৳ {{$relatedProuduct['product_price']}}
																			@endif</div>
																		</div>
																	<div class="d-none d-xl-block prodcut-add-cart">
																		<a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
																	</div>
																</div>
															</div>
															<div class="product-item__footer">
                                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                                    <a class="add-to-compare text-gray-6 font-size-13" id="product-{{ $relatedProuduct['id'] }}" product_id="{{ $relatedProuduct['id'] }}" product_name="{{$relatedProuduct['product_name']}}" href="javascript:void()">
                                                                        <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                                                    </a>
                                                                    <a class="add-to-wishlist text-gray-6 font-size-13" id="product-{{ $relatedProuduct['id'] }}" product_id="{{ $relatedProuduct['id'] }}" product_name="{{$relatedProuduct['product_name']}}" href="javascript:void()">
                                                                        <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                                                    </a>
                                                                </div>
                                                            </div>
														</div>
													</div>
												</li>
											@endforeach
                    </ul>
                </div>
                <!-- End Related products -->
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->



@endsection





