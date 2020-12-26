<?php 
    use App\ProductsAttribute;
?>

@if(empty($wishListItems))
<div class="card text-white bg-warning mb-12 text-center">
    <div class="card-body">
      <h2 class="card-title">Your Wishlist is currently empty.</h2>
      <a href="{{url('/')}}" class="btn btn-success">Return to shop</a>
    </div>
</div>
@else
<div class="mb-16 wishlist-table">
    <form class="mb-4" action="#" method="post">
        <div class="table-responsive">
            <table class="table" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">Product</th>
                        <th class="product-price">Unit Price</th>
                        <th class="product-Stock w-lg-15">Stock Status</th>
                        <th class="product-subtotal min-width-200-md-lg">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wishListItems as $item)
                    <?php $discounted_price = getDiscountedPrice($item['product']['product_price'],$item['product']['product_discount']) ?>
                    <?php $productUrl = makeProductUrl($item['product']['product_model'],$item['product_id']) ?>
                    <?php $total_stock = ProductsAttribute::where(['product_id' => $item['product_id'], 'status' => 1])->sum('stock'); ?>
                    
                    <tr>
                        <td class="text-center">
                            <a href="javascript:void()" data-wishlist_id="{{$item['id']}}" class="btnItemDelete text-gray-32 font-size-26">×</a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a href="{{url('product/'.$productUrl)}}"><img class="img-fluid max-width-100 p-1 border border-color-1" src="{{ asset('img/product_img/small/'.$item['product']['main_image']) }}" alt="Image Description"></a>
                        </td>

                        <td data-title="Product">
                            <a href="{{url('product/'.$productUrl)}}" class="text-gray-90">{{$item['product']['product_name']}}</a>
                        </td>

                        <td data-title="Unit Price">
                            <span class="">৳ {{$discounted_price}}</span>
                        </td>

                        <td data-title="Stock Status">
                            <!-- Stock Status -->
                            @if($total_stock>0)
                            <span style="color: green">In stock</span>
                            @else
                            <span style="color: red">Out of Stock</span>
                            @endif
                            <!-- End Stock Status -->
                        </td>

                        <td>
                            <a href="{{url('product/'.$productUrl)}}" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Buy Now</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
</div>
@endif