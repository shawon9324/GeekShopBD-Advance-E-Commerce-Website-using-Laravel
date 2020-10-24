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
							<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ url('/') }}">Home</a></li>
							<?php echo $categoryDetails['breadcrumbs']; ?>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="row mb-8">
                    <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                        <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                            <!-- List -->
								<ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
									<li><div class="dropdown-title">Browse Categories</div></li>
									<?php $i=0; ?>
									@foreach($sections as $section)
									@if($section['id'] == $section_id[0])
									@foreach($section['categories'] as $category)
									<li>
										<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="x-{{$i}}" data-target="#x-{{$i}}">
											{{ $category['category_name'] }}
										</a>
										<div id="x-{{$i}}" class="collapse" data-parent="#sidebarNav">
											<ul id="sidebarNav1" class="list-unstyled dropdown-list">
												<!-- Menu List -->
												
												@foreach ($category['subcategories'] as $subcategory)
												<li><a class="dropdown-item" href="/{{ $subcategory['url'] }}">{{ $subcategory['category_name'] }}</a></li>
												<!-- End Menu List -->
												@endforeach
												<li><a class="dropdown-item" href="/{{ $category['url'] }}"><b>All Products</b></a></li>
											</ul>
										</div>
									</li>
									<?php $i++; ?>
									@endforeach
									@endif
									@endforeach
								</ul>
                            <!-- End List -->
                        </div>
                        <div class="mb-6">
								<div class="border-bottom border-color-1 mb-2">
									<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters-Desk</h3>
								</div>
								
								 <div class="border-bottom pb-1 mb-1">
										<h4 class="font-size-14 mb-1 font-weight-bold">
											Generation
											<!-- Link -->
											<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseGeneration" role="button" aria-expanded="false" aria-controls="collapseGeneration">
												<span class="link__icon text-gray-27 bg-white">
													<span class="link__icon-inner"></span>
												</span>
												<span style="padding-left:90px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
												</button></span>
												<span style="padding-left:90px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
												</button></span>
											</a>
											<!-- End Link -->
										</h4>
										
										<div class="collapse" id="collapseGeneration">
											@foreach ($generationArray as $generation)
												<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="generation custom-control-input" name="generation[]" id="{{ $generation }}" value="{{ $generation }}">
														<label class="custom-control-label" for="{{ $generation }}">
															{{ $generation }}
														</label>
													</div>
												</div>
											@endforeach
										</div> 
								 </div>

								 <div class="border-bottom pb-1 mb-1">
									<h4 class="font-size-14 mb-1 font-weight-bold">
											Processor
											<!-- Link -->
											<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseProcessor" role="button" aria-expanded="false" aria-controls="collapseProcessor">
												<span class="link__icon text-gray-27 bg-white">
													<span class="link__icon-inner"></span>
												</span>
												<span style="padding-left:100px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
												</button></span>
												<span style="padding-left:100px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
												</button></span>
											</a>
											<!-- End Link -->
										</h4>
										
										<div class="collapse" id="collapseProcessor">
											@foreach ($processorArray as $processor)
												<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="processor custom-control-input" name="processor[]" id="{{ $processor }}" value="{{ $processor }}"	>
														<label class="custom-control-label" for="{{ $processor }}">
															{{ $processor }}
														</label>
													</div>
												</div>
											@endforeach
										</div> 
								 </div>
								 
								 <div class="border-bottom pb-1 mb-1">
									<h4 class="font-size-14 mb-1 font-weight-bold">
										Graphics
										<!-- Link -->
										<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseGraphics" role="button" aria-expanded="false" aria-controls="collapseGraphics">
											<span class="link__icon text-gray-27 bg-white">
												<span class="link__icon-inner"></span>
											</span>
											<span style="padding-left:106px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
											</button></span>
											<span style="padding-left:106px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
											</button></span>
										</a>
										<!-- End Link -->
									</h4>
									
									<div class="collapse" id="collapseGraphics">
										@foreach ($graphicsArray as $graphics)
											<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="graphics custom-control-input" name="graphics[]" id="{{ $graphics }}" value="{{ $graphics }}"	>
													<label class="custom-control-label" for="{{ $graphics }}">
														{{ $graphics }}
													</label>
												</div>
											</div>
										@endforeach
									</div> 
							 	 </div>
								  <div class="border-bottom pb-1 mb-1">
									<h4 class="font-size-14 mb-1 font-weight-bold">
											RAM
											<!-- Link -->
											<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseRAM" role="button" aria-expanded="false" aria-controls="collapseRAM">
												<span class="link__icon text-gray-27 bg-white">
													<span class="link__icon-inner"></span>
												</span>
												<span style="padding-left:134px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
												</button></span>
												<span style="padding-left:134px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
												</button></span>
											</a>
											<!-- End Link -->
										</h4>
										
										<div class="collapse" id="collapseRAM">
											@foreach ($ramArray as $ram)
												<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" name="ram[]" id="{{ $ram }}" value="{{ $ram }}"	>
														<label class="custom-control-label" for="{{ $ram }}">
															{{ $ram }}
														</label>
													</div>
												</div>
											@endforeach
										</div> 
								 </div>

								 <div class="border-bottom pb-1 mb-1">
									<h4 class="font-size-14 mb-1 font-weight-bold">
											HDD
											<!-- Link -->
											<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseHDD" role="button" aria-expanded="false" aria-controls="collapseHDD">
												<span class="link__icon text-gray-27 bg-white">
													<span class="link__icon-inner"></span>
												</span>
												<span style="padding-left:135px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
												</button></span>
												<span style="padding-left:135px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
												</button></span>
											</a>
											<!-- End Link -->
										</h4>
										
										<div class="collapse" id="collapseHDD">
											@foreach ($hddArray as $hdd)
												<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="hdd custom-control-input" name="hdd[]" id="{{ $hdd }}" value="{{ $hdd }}"	>
														<label class="custom-control-label" for="{{ $hdd }}">
															{{ $hdd }}
														</label>
													</div>
												</div>
											@endforeach
										</div> 
								 </div>

								 <div class="border-bottom pb-1 mb-5">
									<h4 class="font-size-14 mb-1 font-weight-bold">
											SSD
											<!-- Link -->
											<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseSSD" role="button" aria-expanded="false" aria-controls="collapseSSD">
												<span class="link__icon text-gray-27 bg-white">
													<span class="link__icon-inner"></span>
												</span>
												<span style="padding-left:142px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
												</button></span>
												<span style="padding-left:142px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
												</button></span>
											</a>
											<!-- End Link -->
										</h4>
										
										<div class="collapse" id="collapseSSD">
											@foreach ($ssdArray as $ssd)
												<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="ssd custom-control-input" name="ssd[]" id="{{ $ssd }}" value="{{ $ssd }}"	>
														<label class="custom-control-label" for="{{ $ssd }}">
															{{ $ssd }}
														</label>
													</div>
												</div>
											@endforeach
										</div> 
								 </div>


                            <div class="range-slider">
                                <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
                                <!-- Range Slider -->
                                <input class="js-range-slider" type="text"
                                data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
                                data-type="double"
                                data-grid="false"
                                data-hide-from-to="true"
                                data-prefix="$"
                                data-min="0"
                                data-max="3456"
                                data-from="0"
                                data-to="3456"
                                data-result-min="#rangeSliderExample3MinResult"
                                data-result-max="#rangeSliderExample3MaxResult">
                                <!-- End Range Slider -->
                                <div class="mt-1 text-gray-111 d-flex mb-4">
                                    <span class="mr-0dot5">Price: </span>
                                    <span>$</span>
                                    <span id="rangeSliderExample3MinResult" class=""></span>
                                    <span class="mx-0dot5"> — </span>
                                    <span>$</span>
                                    <span id="rangeSliderExample3MaxResult" class=""></span>
                                </div>
                                <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Filter</button>
                            </div>
                        </div>
							
						<div class="mb-8">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
                            </div>
                            <ul class="list-unstyled">
								@foreach ($latest_products_discounted as $latest)
									<li class="mb-4">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="single-product-fullwidth.html" class="d-block width-75">
                                                <img style="width: 80px; height :70px;" class="img-fluid" src="{{ asset('img/product_img/small/' . $latest['main_image']) }}" alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">{{ $latest['product_name'] }}</a></h3>
                                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <div class="font-weight-bold">
												<?php  
                                                $price = $latest['product_price'];    
                                                $discount = $latest['product_discount'];
                                                $discount_price = $price - round(($price*$discount)/100);
												?>
												@if($discount>0)
                                                <del class="font-size-11 text-gray-9 d-block">৳ {{$price}}</del>
												<ins class="font-size-15 text-red text-decoration-none d-block">৳ {{ $discount_price }}</ins>
												@else
												@endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
								@endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-wd-9gdot5">
                        <!-- Shop-control-bar Title -->
                        <div class="flex-center-between mb-3">
                            <h3 class="font-size-25 mb-0">{{$categoryDetails['catDetails']['category_name']}}</h3>
                            <p class="font-size-14 text-gray-90 mb-0">Showing {{ $categoryProducts->firstItem() }}–{{ $categoryProducts->lastItem() }} of {{ $categoryProducts->total() }} results</p>
                        </div>
						<!-- End shop-control-bar Title -->
						
						
                        <!-- Shop-control-bar -->
                        <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                            <div class="d-xl-none">
                                <!-- Account Sidebar Toggle Button -->
                                <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
                                    aria-controls="sidebarContent1"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false"
                                    data-unfold-target="#sidebarContent1"
                                    data-unfold-type="css-animation"
                                    data-unfold-animation-in="fadeInLeft"
                                    data-unfold-animation-out="fadeOutLeft"
                                    data-unfold-duration="500">
                                    <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                                </a>
                                <!-- End Account Sidebar Toggle Button -->
                            </div>
                            <div class="px-3 d-none d-xl-block">
                                <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-align-justify"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-list"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex">
                                <form name="sortProducts" id="sortProducts">
									<!-- Select -->
									<meta name="csrf-token" content="{{ csrf_token() }}">
									<input type="hidden" name="url" id="url" value="{{ $url }}">
                                    <select name="sort" id="sort"  class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                        <option value="product_default" @if(isset($_GET['sort']) && $_GET['sort']=='product_default') selected @endif>Default</option>
                                                <option value="product_name_a_z"  @if(isset($_GET['sort']) && $_GET['sort']=='product_name_a_z') selected @endif>Name (A-Z)</option>
                                                <option value="product_name_z_a"  @if(isset($_GET['sort']) && $_GET['sort']=='product_name_z_a') selected @endif>Name (Z-A)</option>
                                                <option value="price_lowest"  @if(isset($_GET['sort']) && $_GET['sort']=='price_lowest') selected @endif>Price (Low>High)</option>
                                                <option value="price_highest"  @if(isset($_GET['sort']) && $_GET['sort']=='price_highest') selected @endif>Price (High>Low)</option>
                                    </select>
                                    <!-- End Select -->
                                </form>
                                <form method="POST" class="ml-2 d-none d-xl-block">
                                    <!-- Select -->
                                    <select class="js-select selectpicker dropdown-select max-width-120"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                        <option value="one" selected>Show 20</option>
                                        <option value="two">Show 40</option>
                                        <option value="three">Show All</option>
                                    </select>
                                    <!-- End Select -->
                                </form>
                            </div>
                            <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                                <form method="post" class="min-width-50 mr-1">
                                    <input size="2" min="1" max="3" step="1" type="number" class="form-control text-center px-2 height-35" value="1">
                                </form> of 3
                                <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
                            </nav>
                        </div>
						<!-- End Shop-control-bar -->
						


                        <!-- Shop Body -->
                        <!-- Tab Content -->
                        <div class="tab-content" id="pills-tabContent">
                            
                            <div class=" filter_products tab-pane fade pt-2 show active" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                                @include('front.products.ajax_products_listing')
							</div>
							
							{{-- FUTURE WORK  #10--}}
                            <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                                <ul class="d-block list-unstyled products-group prodcut-list-view">
                                    <li class="product-item remove-divider">
                                        <div class="product-item__outer w-100">
                                            <div class="product-item__inner remove-prodcut-hover py-4 row">
                                                <div class="product-item__header col-6 col-md-4">
                                                    <div class="mb-2">
                                                        <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{ url('img/front_img/212X200/img1.jpg') }}" alt="Image Description"></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__body col-6 col-md-5">
                                                    <div class="pr-lg-10">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-2 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="prodcut-price mb-2 d-md-none">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="mb-3 d-none d-md-block">
                                                            <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                                <div class="text-warning mr-2">
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                </div>
                                                                <span class="text-secondary">(40)</span>
                                                            </a>
                                                        </div>
                                                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                            <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                            <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                            <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer col-md-3 d-md-block">
                                                    <div class="mb-3">
                                                        <div class="prodcut-price mb-2">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="prodcut-add-cart">
                                                            <a href="single-product-fullwidth.html" class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                                                        <a href="compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
							</div>
							{{-- FUTURE WORK #10--}}
                        </div>
                        <!-- End Tab Content -->
						<!-- End Shop Body -->
						

                        <!-- Shop Pagination -->
                        <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
                            <div class="text-center text-md-left mb-3 mb-md-0">Showing {{ $categoryProducts->firstItem() }}–{{ $categoryProducts->lastItem() }} of {{ $categoryProducts->total() }} results</div>
                            <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                               	@if (isset($_GET['sort']) && !empty($_GET['sort']))
                                {{ $categoryProducts->appends([ 'generation'=> $_GET['generation']  ])->links() }}
								@else
									{{ $categoryProducts->links() }}
								@endif
                            </ul>
                        </nav>
                        <!-- End Shop Pagination -->
                    </div>
                </div>
            </div>
        </main>
		<!-- ========== END MAIN CONTENT ========== -->    
		





		
        <!-- ========== END SECONDARY CONTENTS ========== -->
        <!-- Sidebar Navigation -->
        <aside id="sidebarContent1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarNavToggler1">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-3 px-4 bg-white">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent1"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent1"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft"
                                data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <span aria-hidden="true"><i class="ec ec-close-remove"></i></span>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content px-4">
                                
                                <div class="mb-6">
									<div class="border-bottom border-color-1 mb-2">
										<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters-Slider</h3>
									</div>
									 <div class="border-bottom pb-1 mb-1">
											<h4 class="font-size-14 mb-1 font-weight-bold">
												Generation
												<!-- Link -->
												<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseGeneration" role="button" aria-expanded="false" aria-controls="collapseGeneration">
													<span class="link__icon text-gray-27 bg-white">
														<span class="link__icon-inner"></span>
													</span>
													<span style="padding-left:90px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
													</button></span>
													<span style="padding-left:90px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
													</button></span>
												</a>
												<!-- End Link -->
											</h4>
											
											<div class="collapse" id="collapseGeneration">
												@foreach ($generationArray as $gen)
												
													<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="f-{{ $gen }}" id="f-{{ $gen }}" value="f-{{ $gen }}"	>
															<label class="custom-control-label" for="f-{{ $gen }}">
																{{ $gen }}
															</label>
														</div>
													</div>
												@endforeach
											</div> 
									 </div>
	
									 <div class="border-bottom pb-1 mb-1">
										<h4 class="font-size-14 mb-1 font-weight-bold">
												Processor
												<!-- Link -->
												<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseProcessor" role="button" aria-expanded="false" aria-controls="collapseProcessor">
													<span class="link__icon text-gray-27 bg-white">
														<span class="link__icon-inner"></span>
													</span>
													<span style="padding-left:100px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
													</button></span>
													<span style="padding-left:100px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
													</button></span>
												</a>
												<!-- End Link -->
											</h4>
											
											<div class="collapse" id="collapseProcessor">
												@foreach ($processorArray as $processor)
													<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="processor[]" id="{{ $processor }}" value="{{ $processor }}"	>
															<label class="custom-control-label" for="{{ $processor }}">
																{{ $processor }}
															</label>
														</div>
													</div>
												@endforeach
											</div> 
									 </div>
									 
									 <div class="border-bottom pb-1 mb-1">
										<h4 class="font-size-14 mb-1 font-weight-bold">
											Graphics
											<!-- Link -->
											<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseGraphics" role="button" aria-expanded="false" aria-controls="collapseGraphics">
												<span class="link__icon text-gray-27 bg-white">
													<span class="link__icon-inner"></span>
												</span>
												<span style="padding-left:106px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
												</button></span>
												<span style="padding-left:106px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
												</button></span>
											</a>
											<!-- End Link -->
										</h4>
										
										<div class="collapse" id="collapseGraphics">
											@foreach ($graphicsArray as $graphics)
												<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" name="graphics[]" id="{{ $graphics }}" value="{{ $graphics }}"	>
														<label class="custom-control-label" for="{{ $graphics }}">
															{{ $graphics }}
														</label>
													</div>
												</div>
											@endforeach
										</div> 
									  </div>
									  <div class="border-bottom pb-1 mb-1">
										<h4 class="font-size-14 mb-1 font-weight-bold">
												RAM
												<!-- Link -->
												<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseRAM" role="button" aria-expanded="false" aria-controls="collapseRAM">
													<span class="link__icon text-gray-27 bg-white">
														<span class="link__icon-inner"></span>
													</span>
													<span style="padding-left:134px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
													</button></span>
													<span style="padding-left:134px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
													</button></span>
												</a>
												<!-- End Link -->
											</h4>
											
											<div class="collapse" id="collapseRAM">
												@foreach ($ramArray as $ram)
													<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="ram[]" id="{{ $ram }}" value="{{ $ram }}"	>
															<label class="custom-control-label" for="{{ $ram }}">
																{{ $ram }}
															</label>
														</div>
													</div>
												@endforeach
											</div> 
									 </div>
	
									 <div class="border-bottom pb-1 mb-1">
										<h4 class="font-size-14 mb-1 font-weight-bold">
												HDD
												<!-- Link -->
												<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseHDD" role="button" aria-expanded="false" aria-controls="collapseHDD">
													<span class="link__icon text-gray-27 bg-white">
														<span class="link__icon-inner"></span>
													</span>
													<span style="padding-left:134px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
													</button></span>
													<span style="padding-left:134px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
													</button></span>
												</a>
												<!-- End Link -->
											</h4>
											
											<div class="collapse" id="collapseHDD">
												@foreach ($hddArray as $hdd)
													<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="hdd[]" id="{{ $hdd }}" value="{{ $hdd }}"	>
															<label class="custom-control-label" for="{{ $hdd }}">
																{{ $hdd }}
															</label>
														</div>
													</div>
												@endforeach
											</div> 
									 </div>
	
									 <div class="border-bottom pb-1 mb-5">
										<h4 class="font-size-14 mb-1 font-weight-bold">
												SSD
												<!-- Link -->
												<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseSSD" role="button" aria-expanded="false" aria-controls="collapseSSD">
													<span class="link__icon text-gray-27 bg-white">
														<span class="link__icon-inner"></span>
													</span>
													<span style="padding-left:139px;" class="link-collapse__default"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-plus"></i>
													</button></span>
													<span style="padding-left:139px;" class="link-collapse__active"><button type="button" class="btn btn-secondary btn-filter-circle"><i class="fa fa-minus"></i>
													</button></span>
												</a>
												<!-- End Link -->
											</h4>
											
											<div class="collapse" id="collapseSSD">
												@foreach ($ssdArray as $ssd)
													<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="ssd[]" id="{{ $ssd }}" value="{{ $ssd }}"	>
															<label class="custom-control-label" for="{{ $ssd }}">
																{{ $ssd }}
															</label>
														</div>
													</div>
												@endforeach
											</div> 
									 </div>
	
	
								<div class="range-slider">
									<h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
									<!-- Range Slider -->
									<input class="js-range-slider" type="text"
									data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
									data-type="double"
									data-grid="false"
									data-hide-from-to="true"
									data-prefix="$"
									data-min="0"
									data-max="3456"
									data-from="0"
									data-to="3456"
									data-result-min="#rangeSliderExample3MinResult"
									data-result-max="#rangeSliderExample3MaxResult">
									<!-- End Range Slider -->
									<div class="mt-1 text-gray-111 d-flex mb-4">
										<span class="mr-0dot5">Price: </span>
										<span>$</span>
										<span id="rangeSliderExample3MinResult" class=""></span>
										<span class="mx-0dot5"> — </span>
										<span>$</span>
										<span id="rangeSliderExample3MaxResult" class=""></span>
									</div>
									<button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg ">Filter</button>
								</div>
							</div>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside>
		<!-- End Sidebar Navigation -->

@endsection
