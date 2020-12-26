<?php 
    use App\ProductsAttribute;
    use App\Brand;
?>
@if(empty($compareItems))
<div class="card text-white bg-warning mb-12 text-center">
    <div class="card-body">
      <h2 class="card-title">Your Product Comparison List is currently empty.</h2>
      <a href="{{url('/')}}" class="btn btn-success">Return to shop</a>
    </div>
</div>
@else
<div class="table-responsive table-bordered table-compare-list mb-10 border-0">
    <table class="table">
        <tbody>
            
            <tr>
                <th>Remove</th>
                @foreach($compareItems as $item)
                <td class="text-center">
                    <a href="javascript:void()" data-comparison_id="{{$item['id']}}" class="btnItemDelete text-gray-90"><i class="fa fa-times"></i></a>
                </td>
                @endforeach
            </tr>
            <tr>
                <th class="min-width-200">Product</th>
                @foreach($compareItems as $item)
                <?php $productUrl = makeProductUrl($item['product']['product_model'],$item['product_id']) ?>
                <td>
                    <a href="{{url('product/'.$productUrl)}}" class="product d-block">
                        <div class="product-compare-image">
                            <div class="d-flex mb-3">
                                <img class="img-fluid mx-auto" src="{{ asset('img/product_img/small/'.$item['product']['main_image']) }}" alt="Image Description">
                            </div>
                        </div>
                        <h3 class="product-item__title text-blue font-weight-bold mb-3">{{$item['product']['product_name']}}</h3>
                    </a>
                    <div class="text-warning mb-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                    </div>
                </td>
                @endforeach
            </tr>

            <tr>
                <th>Price</th>
                @foreach($compareItems as $item)
                <?php $discounted_price = getDiscountedPrice($item['product']['product_price'],$item['product']['product_discount']) ?>
                <td>
                    <div class="product-price">৳ {{$discounted_price}}</div>
                </td>
                @endforeach
            </tr>

            <tr>
                <th>Availability</th>
                @foreach($compareItems as $item)
                <?php $total_stock = ProductsAttribute::where(['product_id' => $item['product_id'], 'status' => 1])->sum('stock'); ?>
                <td>
                    @if($total_stock>0)
                    <span style="color: green">In stock</span>
                    @else
                    <span style="color: red">Out of Stock</span>
                    @endif
                </td>
                @endforeach
            </tr>

            <tr>
                <th>MAIN FEATURES</th>
                @foreach($compareItems as $item)
                <td>
                    <ul>
                        <li><span class=""> {{$item['product']['feature_1']}} </span></li>
                        <li><span class=""> {{$item['product']['feature_2']}} </span></li>
                        <li><span class=""> {{$item['product']['feature_3']}} </span></li>
                        <li><span class=""> {{$item['product']['feature_4']}} </span></li>
                        <li><span class=""> {{$item['product']['feature_5']}} </span></li>
                    </ul>
                </td>
                @endforeach
            </tr>
            <tr>
                <th>Brand</th>
                @foreach($compareItems as $item)
                <?php $brand_name = Brand::select('name')->where('id',$item['product']['brand_id'])->first()->toArray() ?>
                <td>{{$brand_name['name']}}</td>
                @endforeach
            </tr>
            <tr>
                <th>Generation</th>
                @foreach($compareItems as $item)
                <td>{{$item['product']['generation']}}</td>
                @endforeach
            </tr>
            <tr>
                <th>Processor</th>
                @foreach($compareItems as $item)
                <td>{{$item['product']['processor']}}</td>
                @endforeach
            </tr>
            <tr>
                <th>Graphics Card</th>
                @foreach($compareItems as $item)
                <td>{{$item['product']['graphics']}}</td>
                @endforeach
            </tr>
            <tr>
                <th>RAM</th>
                @foreach($compareItems as $item)
                <td>{{$item['product']['ram']}}</td>
                @endforeach
            </tr>
            <tr>
                <th>Hard Disk Drive(HDD)</th>
                @foreach($compareItems as $item)
                <td>{{$item['product']['hdd']}}</td>
                @endforeach
            </tr>
            <tr>
                <th>Solid-State Drive(SSD)</th>
                @foreach($compareItems as $item)
                <td>{{$item['product']['ssd']}}</td>
                @endforeach
            </tr>
            <tr>
                <th>Product Warranty</th>
                @foreach($compareItems as $item)
                <td>{{$item['product']['warranty']}}</td>
                @endforeach
            </tr>
            <tr>
                <th>Add to cart</th>
                @foreach($compareItems as $item)
                <?php $productUrl = makeProductUrl($item['product']['product_model'],$item['product_id']) ?>
                <td>
                    <div class=""><a href="{{url('product/'.$productUrl)}}" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-3 px-xl-5">Add to cart</a></div>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endif