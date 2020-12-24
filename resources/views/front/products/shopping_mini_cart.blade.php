<?php
use App\Product;
use App\Cart;
$cartItems = Cart::userCartItems();
?>
            <?php $total_price = 0; ?>
            @foreach($cartItems as $item)
            <?php $attrPrice = Product::getDiscountedAttrPrice($item['product_id'],$item['color']); ?>
            <?php $total_price = ($total_price + $attrPrice['final_price']* $item['quantity']) ?>
            @endforeach
            <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
                <div id="basicDropdownHoverInvoker" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart"
                    aria-controls="basicDropdownHover"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="hover"
                    data-unfold-target="#basicDropdownHover"
                    data-unfold-type="css-animation"
                    data-unfold-duration="350"
                    data-unfold-delay="350"
                    data-unfold-hide-on-scroll="true"
                    data-unfold-animation-in="slideInUp"
                    data-unfold-animation-out="fadeOut">
                    @if(!empty($page_name))
                    <i class="font-size-22 ec ec-shopping-bag"></i>
                    @else
                    <i class="font-size-22 ec ec-shopping-bag white-txt "></i>
                    @endif
                    <span  class="width-22 height-22 bg-dark position-absolute flex-content-center text-white rounded-circle left-12 top-8 font-weight-bold font-size-12">{{ count($cartItems)}}</span>
                    <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3 white-txt">৳ {{$total_price}}</span>
                </div>
                <div id="basicDropdownHover" class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0" aria-labelledby="basicDropdownHoverInvoker">
                    <ul class="list-unstyled px-3 pt-3">
                        <li class="border-bottom pb-3 mb-3">
                            <div class="">
                                <?php $total_price = 0; ?>
                                @foreach($cartItems as $item)
                                <?php $productUrl = makeProductUrl($item['product']['product_model'],$item['product_id']); ?>
                                <?php $attrPrice = Product::getDiscountedAttrPrice($item['product_id'],$item['color']); ?>
                                <ul class="list-unstyled row mx-n2">
                                    <li class="px-2 col-auto">
                                      <a href="{{ url('product/'.$productUrl) }}"><img  class="img-fluid" style="height: 75px;width:75px;" src="{{asset('img/product_img/small/'.$item['product']['main_image'])}}" alt="Image Description"></a>  
                                    </li>
                                    <li class="px-2 col">
                                        <h5 class="font-size-14 font-weight-bold"> <a href="{{ url('product/'.$productUrl) }}">{{$item['product']['product_name']}}</a> </h5>
                                        <span class="font-size-14">{{$item['quantity']}} × ৳ {{$attrPrice['product_price']}}</span>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </li>
                        
                        
                    </ul>
                    <div class="flex-center-between px-4 pt-2">
                        <a href="javascript:window.location.href=window.location.href" class="btn btn-soft-secondary font-weight-normal  "> <i class="fas fa-sync-alt"></i> </a>
                        <a href="{{url('/shopping-cart')}}" class="btn btn-soft-secondary font-weight-normal ">View cart</a>
                        <a href="checkout.html" class="btn btn-primary-dark-w  ">Checkout</a>
                    </div>
                </div>
            </li>
