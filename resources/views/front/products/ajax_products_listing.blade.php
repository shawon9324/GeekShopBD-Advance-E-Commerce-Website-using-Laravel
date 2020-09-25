
    @foreach ($categoryProducts as $product)
        <!-- Product Item -->
        <div class="product_item is_new">
            <div class="product_border"></div>
            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                <img src="{{ asset('img/product_img/small/' . $product['main_image']) }}"
                    style="height: 115px;width:115px;" alt=""></div>
            <div class="product_content">
                <hr>
                <div class="product_name_2">
                    <div><a href="#" tabindex="0">{{ $product['product_name'] }}</a></div>
                </div>
                <hr>
                <div class="features">
                    <ul>
                        <li>{{ $product['feature_1'] }}</li>
                        <li>{{ $product['feature_2'] }}</li>
                        <li>{{ $product['feature_3'] }}</li>
                    </ul>
                    Brand : {{ $product['brand']['name'] }}
                </div>
                <hr>
                <div class="product_price discount_2">
                    <div class="row">
                        <div class="col-md-6">
                            ৳ {{ $product['product_price'] }}
                        </div>
                        <div class="col-md-6">
                            <a style="" href="awd" type="button" class="btn btn-secondary btn-md buy_now"><i
                                    class="fa fa-eye " aria-hidden="true"></i>
                            </a>
                            &nbsp;&nbsp;<a style="" href="awd" type="button" class="btn btn-secondary btn-md buy_now"><i
                                    class="fas fa-exchange-alt" aria-hidden="true"></i></a></div>
                    </div>

                </div>
                <hr>
            </div>
            <a style="" href="awd" type="button" class="btn btn-info btn-md buy_now"><i class="fa fa-shopping-cart"
                    aria-hidden="true"></i> Buy Now</button></a>
            <div class="product_fav"><i class="fas fa-heart"></i></div>
            <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
            </ul>
        </div>
    @endforeach
