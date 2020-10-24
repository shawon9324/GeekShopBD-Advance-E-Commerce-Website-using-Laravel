<ul class="row list-unstyled products-group no-gutters">
    @foreach ($categoryProducts as $product)
        <?php 
        $modelName = $product['product_model'];
        $productUrl = strtolower(str_replace('+', '-', urlencode($modelName)));
        ?>
        <li class="col-6 col-md-4 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a class="font-size-12 text-gray-5">Brand :
                                {{ $product['brand']['name'] }}</a></div>
                        <h5 class="mb-1 product-item__title"><a
                                href="{{ url('/product/' . $productUrl . '-' . $product['id']) }}"
                                class="text-blue font-weight-bold">{{ $product['product_name'] }}</a></h5>
                        <div class="mb-2">
                            <a href="{{ url('/product/' . $productUrl . '-' . $product['id']) }}"
                                class="d-block text-center"><img class="img-fluid"
                                    src="{{ asset('img/product_img/small/' . $product['main_image']) }}"
                                    style="width: 212px; height:200px;" alt="Image Description"></a>
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
                                <?php
                                $price = $product['product_price'];
                                $discount = $product['product_discount'];
                                $discount_price = $price - round(($price * $discount) / 100);
                                ?>
                                <div class="text-gray-100">
                                    @if ($discount > 0)
                                        ৳ {{ $discount_price }}
                                        <span>
                                            <del style="font-size: 15px;">৳ {{ $price }}</del>
                                            </button>
                                        </span>
                                    @else
                                        ৳ {{ $price }}
                                    @endif
                                </div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i
                                        class="ec ec-add-to-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__footer">
                        <div class="border-top pt-2 flex-center-between flex-wrap">
                            <a href="compare.html" class="text-gray-6 font-size-13"><i
                                    class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i
                                    class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    @endforeach

</ul>
