<?php
use App\Product;
?>
@if(empty($userCartItems))
<div class="card text-white bg-warning mb-12 text-center">
    <div class="card-body">
      <h2 class="card-title">Your cart is currently empty.</h2>
      <a href="{{url('/')}}" class="btn btn-success">Return to shop</a>
    </div>
</div>
@else
<div class="mb-0 cart-table">
    <table class="table" cellspacing="0" >
        <thead>
            <tr>
                <th class="product-remove">&nbsp;</th>
                <th class="product-thumbnail">&nbsp;</th>
                <th class="product-name">Product</th>
                <th class="product-price">Color</th>
                <th class="product-price">Unit Price</th>
                <th class="product-price">Discount</th>
                <th class="product-quantity w-lg-15">Quantity</th>
                <th class="product-subtotal">Total</th>
            </tr>
        </thead>
        <tbody >
            <?php $total_price = 0; ?>
            @foreach($userCartItems as $item)
            <?php $productUrl = makeProductUrl($item['product']['product_model'],$item['product_id']); ?>
            <?php $attrPrice = Product::getDiscountedAttrPrice($item['product_id'],$item['color']); ?>
            <tr class="">
                <td class="text-center">
                    <a href="javascript:void()" data-cartid="{{$item['id']}}" class="btnCartItemsDelete text-gray-32 font-size-26">×</a>
                </td>
                <td >
                <a href="{{ url('product/'.$productUrl) }}"><img class="img-fluid max-width-100  border border-color-1" src="{{asset('img/product_img/small/'.$item['product']['main_image'])}}" alt="cart-image"></a>
                </td>

                <td data-title="Product">
                    <a href="{{ url('product/'.$productUrl) }}" class="text-gray-90">{{$item['product']['product_name']}}</a>
                </td>
                <td data-title="Color">
                    <a class="text-gray-90">{{$item['color']}}</a>
                </td>

                <td data-title="Unit Price">
                    <span class="">৳ {{$attrPrice['product_price']}}</span>
                </td>
                <td data-title="Discount">
                    <span class="">৳ {{$attrPrice['discount']*$item['quantity']}}</span>
                </td>
                <td>
                    <div class="input-append">
                        <button class="btn btn-secondary btn-sm btnItemUpdate qtyMinus" type="button" data-cartid="{{$item['id']}}">
                            <i class="fa fa-minus" aria-hidden="true"></i></button>
                        <input readonly class="rounded text-center" style="max-width: 40px;height:40px;box-sizing: border-box;border: 1px solid #dddddd;" value=" {{$item['quantity']}} "
                        id="appendInputButtons" size="16" type="text">
                        
                        <button class="btn btn-success btn-sm btnItemUpdate qtyPlus" type="button" data-cartid="{{$item['id']}}">
                        <i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                </td>
                <td data-title="Total">
                    <span class="">৳ {{$attrPrice['final_price'] * $item['quantity']}}</span>
                </td>
            </tr>
            <?php $total_price = ($total_price + $attrPrice['final_price']* $item['quantity']) ?>
            @endforeach
            <tr>
                <td colspan="12" class="border-top justify-content-center ">
                    <div class="">
                        <div class="mb-4  cart-total">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7 col-md-8 offset-md-4">
                                            <ul class="list-group">
                                                <li  style="font-size: 18px" class="text-gray-90 list-group-item d-flex justify-content-between align-items-center">Subtotal:
                                                    <div class="font-weight-bold " >৳ {{$total_price}}</div>
                                                </li> 
                                                <li  style="font-size: 18px" class="text-gray-90 list-group-item d-flex justify-content-between align-items-center">Coupon Discount:
                                                    <div class="font-weight-bold " >৳ 0</div>
                                                </li> 
                                                <li  style="font-size: 18px" class="text-gray-90 list-group-item d-flex justify-content-between align-items-center">Total:
                                                    <div class=" font-weight-bold" >৳ {{$total_price}}</div>
                                                </li> 
                                            </ul>
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex flex-center-between">
                            <div class="mb-3 mb-md-0 w-xl-40">
                                <!-- Apply coupon Form -->
                                <form class="js-focus-state">
                                    <label class="sr-only" for="subscribeSrEmailExample1">Coupon code</label>
                                    <div class="input-group">
                                        <input  type="text" class="form-control" name="text" id="subscribeSrEmailExample1" placeholder="Coupon code" aria-label="Coupon code" aria-describedby="subscribeButtonExample2" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-block btn-dark px-4" type="button" id="subscribeButtonExample2"><i class="fas fa-tags d-md-none"></i><span class="d-none d-md-inline">Apply coupon</span></button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Apply coupon Form -->
                            </div>
                            <div class="d-md-flex">
                                <a href="checkout.html" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-md-inline-block white-txt">Proceed to checkout<span class="link__icon ml-1">
                                    <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span></a>
                            </div>
                        </div>
                    </div>
                </td>        
            </tr>
        </tbody>
    </table>

</div>
@endif
