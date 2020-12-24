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
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
							<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ url('/') }}">Home</a></li>
							<?php echo $categoryDetails['breadcrumbs']; ?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="row mb-8">
                    <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                        <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                            <!-- CATEGORY-SUBCATEGORY -->
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
												@foreach ($category['subcategories'] as $subcategory)
												<li><a class="dropdown-item" href="/{{ $subcategory['url'] }}">{{ $subcategory['category_name'] }}</a></li>
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
                            <!-- End CATEGORY-SUBCATEGORY -->
						</div>
						{{-- FILTERS SIDE_PANEL--}}
                        <div class="mb-6">
								<div class="border-bottom border-color-1 mb-2">
									<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
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
										<?php $productUrl = makeProductUrl($latest['product_model'],$latest['id']); ?>
											<li class="mb-4">
											<div class="row">
												<div class="col-auto">
													<a href="{{ url('product/'.$productUrl) }}" class="d-block width-75">
														<img style="width: 80px; height :70px;" class="img-fluid" src="{{ asset('img/product_img/small/' . $latest['main_image']) }}" alt="Image Description">
													</a>
												</div>
												<div class="col">
													<h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="{{ url('product/'.$productUrl) }}">{{ $latest['product_name'] }}</a></h3>
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
						{{--END FILTERS SIDE_PANEL--}}


                    <div class="col-xl-9 col-wd-9gdot5">
                        <div class="flex-center-between mb-3">
                            <h3 class="font-size-25 mb-0">{{$categoryDetails['catDetails']['category_name']}}</h3>
                            {{-- <p class="font-size-14 text-gray-90 mb-0">Showing {{ $categoryProducts->firstItem() }}–{{ $categoryProducts->lastItem() }} of {{ $categoryProducts->total() }} results</p> --}}
							<div class="text-center text-md-left mb-3 mb-md-0">Found {{ $categoryProducts->total() }} results</div>
						</div>
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
                                <ul class="nav nav-tab-shop " id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active viewToggle" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="true">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-align-justify"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link viewToggle2" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-list"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <nav class="d-flex px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
								<form name="sortProducts" id="sortProducts">
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
                                </form>
                               
                            </nav>
                        </div>
						<!-- End Shop-control-bar -->

                        <!-- Shop Body -->
                        <!-- Tab Content -->
                        <div class=" filter_products tab-content" id="pills-tabContent">
							@include('front.products.ajax_product_listing_duel_view')
                        </div>
                        <!-- End Tab Content -->
						<!-- End Shop Body -->
						

                        <!-- Shop Pagination -->
                        <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
                            <div class="text-center text-md-left mb-3 mb-md-0">
								{{-- Showing {{ $categoryProducts->firstItem() }}–{{ $categoryProducts->lastItem() }} of {{ $categoryProducts->total() }} results --}}
							</div>
                            <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
									<nav>
										<ul class="pagination">
											@if($paginateCount==0)
											<li class="page-item  active  "><a class="page-link" href="{{ $url }}?page=1">1</a></li>
											@else
											@foreach (range(1,$paginateCount+1) as $page)
											<li class="page-item @if($page==1) active @endif "><a class="page-link" href="{{ $url }}?page={{$page}}">{{$page}}</a></li>
											@endforeach
											@endif
										</ul>
									</nav>
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
