<?php
	use App\Product;
?>
<div class="card_view tab-pane fade pt-2 show active" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab" data-target-group="groups">
    <ul class="row list-unstyled products-group no-gutters">
        @foreach ($categoryProducts as $product)
        <?php $productUrl = makeProductUrl($product['product_model'],$product['id']); ?>
            <li class="col-6 col-md-4 product-item">
                <div class="product-item__outer h-100">
                    <div class="product-item__inner px-xl-4 p-3">
                        <div class="product-item__body pb-xl-2">
                            <div class="mb-2"><a class="font-size-12 text-gray-5">Brand :
                                    {{ $product['brand']['name'] }}</a></div>
                            <h5 class="mb-1 product-item__title"><a
                                    href="{{ url('product/'.$productUrl) }}"
                                    class="text-blue font-weight-bold">{{ $product['product_name'] }}</a></h5>
                            <div class="mb-2">
                                <a href="{{ url('product/'.$productUrl) }}"
                                    class="d-block text-center"><img class="img-fluid"
                                        src="{{ asset('img/product_img/small/' . $product['main_image']) }}"
                                        style="width: 150px; height:150px;" alt="Image Description"></a>
                            </div>
                            <div class="mb-3">
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
                            <ul class="font-size-12 p-0 text-gray-110 mb-4">
                                <li class="line-clamp-1 mb-1 list-bullet">{{ $product['feature_1'] }}</li>
                                <li class="line-clamp-1 mb-1 list-bullet">{{ $product['feature_2'] }}</li>
                                <li class="line-clamp-1 mb-1 list-bullet">{{ $product['feature_3'] }}</li>
                            </ul>
                            <div class="flex-center-between mb-1">
                                <div class="prodcut-price">
                                    <?php $discounted_price = Product::getDiscountedPrice($product['id']) ?>
                                    <div class="text-gray-100">
                                        @if ($product['product_discount'] > 0)
                                            ৳ {{ $discounted_price }}
                                            <span>
                                                <del style="font-size: 15px;">৳ {{ $product['product_price'] }}</del>
                                                </button>
                                            </span>
                                        @else
                                            ৳ {{ $product['product_price'] }}
                                        @endif
                                    </div>
                                </div>
                                <div class="d-none d-xl-block prodcut-add-cart">
                                    <a href="{{ url('product/'.$productUrl) }}" class="btn-add-cart btn-primary transition-3d-hover"><i
                                            class="ec ec-add-to-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item__footer">
                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                <a class="add-to-compare text-gray-6 font-size-13" id="product-{{ $product['id'] }}" product_id="{{ $product['id'] }}" product_name="{{$product['product_name']}}" href="javascript:void()">
                                    <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                </a>
                                <a class="add-to-wishlist text-gray-6 font-size-13" id="product-{{ $product['id'] }}" product_id="{{ $product['id'] }}" product_name="{{$product['product_name']}}" href="javascript:void()">
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
{{-- FUTURE WORK  #10--}}
<div class="list_view tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
    <ul class="d-block list-unstyled products-group prodcut-list-view">
        @foreach ($categoryProducts as $product)
        <?php $productUrl = makeProductUrl($product['product_model'],$product['id']); ?>
        <li class="product-item remove-divider">
            <div class="product-item__outer w-100">
                <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-4">
                        <div class="mb-2">
                            <a href="{{ url('product/'.$productUrl) }}" class="d-block text-center"><img class="img-fluid" src="{{ asset('img/product_img/small/' . $product['main_image']) }}" style="width: 150px; height:150px;" alt="Image Description"></a>
                        </div>
                    </div>
                    <div class="product-item__body col-6 col-md-5">
                        <div class="pr-lg-10">
                            <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Brand : {{ $product['brand']['name'] }}</a></div>
                            <h5 class="mb-2 product-item__title"><a href="{{ url('product/'.$productUrl) }}" class="text-blue font-weight-bold">{{ $product['product_name'] }}</a></h5>
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
                                <li class="line-clamp-1 mb-1 list-bullet">{{ $product['feature_1'] }}</li>
                                <li class="line-clamp-1 mb-1 list-bullet">{{ $product['feature_2'] }}</li>
                                <li class="line-clamp-1 mb-1 list-bullet">{{ $product['feature_3'] }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                        <div class="mb-3">
                            <?php $discounted_price = Product::getDiscountedPrice($product['id']) ?>
                            <div class="prodcut-price mb-2">
                                <div class="text-gray-100">
                                    @if ($product['product_discount'] > 0)
                                        ৳ {{ $discounted_price }}
                                        <span>
                                            <del style="font-size: 15px;">৳ {{ $product['product_price'] }}</del>
                                            </button>
                                        </span>
                                    @else
                                        ৳ {{ $product['product_price'] }}
                                    @endif
                                </div>
                            </div>
                            <div class="prodcut-add-cart">
                                <a href="single-product-fullwidth.html" class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                            </div>
                        </div>
                        <div class="product-item__footer">
                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                <a class="add-to-compare text-gray-6 font-size-13" id="product-{{ $product['id'] }}" product_id="{{ $product['id'] }}" product_name="{{$product['product_name']}}" href="javascript:void()">
                                    <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                </a>
                                <a class="add-to-wishlist text-gray-6 font-size-13" id="product-{{ $product['id'] }}" product_id="{{ $product['id'] }}" product_name="{{$product['product_name']}}" href="javascript:void()">
                                    <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
        </ul>
</div>
{{-- FUTURE WORK #10--}}