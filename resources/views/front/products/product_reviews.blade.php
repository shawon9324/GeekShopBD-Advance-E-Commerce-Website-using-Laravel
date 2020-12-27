<div class="row mb-8">
    <div class="col-md-6">
        <div class="mb-3">
            <h3 class="font-size-18 mb-6">Based on {{count($products_review)}} reviews</h3>
            <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">{{$ratings['overall']}}</h2>
            <div class="text-lh-1">overall</div>
        </div>

        <!-- Ratings -->
        <ul class="list-unstyled">
            <li class="py-1">
                <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                        </div>
                    </div>
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                            <?php $ratingPercentage = ratingPercentage($ratings['five'],$ratings['total_reviews']) ?>
                            <div class="progress-bar" role="progressbar" style="width: {{$ratingPercentage}}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <span class="text-gray-90">{{$ratings['five']}}</span>
                    </div>
                </a>
            </li>
            <li class="py-1">
                <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="far fa-star text-muted"></small>
                        </div>
                    </div>
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                            <?php $ratingPercentage = ratingPercentage($ratings['four'],$ratings['total_reviews']) ?>
                            <div class="progress-bar" role="progressbar" style="width: {{$ratingPercentage}}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <span class="text-gray-90">{{$ratings['four']}}</span>
                    </div>
                </a>
            </li>
            <li class="py-1">
                <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="far fa-star text-muted"></small>
                            <small class="far fa-star text-muted"></small>
                        </div>
                    </div>
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                            <?php $ratingPercentage = ratingPercentage($ratings['three'],$ratings['total_reviews']) ?>
                            <div class="progress-bar" role="progressbar" style="width: {{$ratingPercentage}}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <span class="text-gray-90">{{$ratings['three']}}</span>
                    </div>
                </a>
            </li>
            <li class="py-1">
                <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="far fa-star text-muted"></small>
                            <small class="far fa-star text-muted"></small>
                            <small class="far fa-star text-muted"></small>
                        </div>
                    </div>
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                            <?php $ratingPercentage = ratingPercentage($ratings['two'],$ratings['total_reviews']) ?>
                            <div class="progress-bar" role="progressbar" style="width: {{$ratingPercentage}}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <span class="text-gray-90">{{$ratings['two']}}</span>
                    </div>
                </a>
            </li>
            <li class="py-1">
                <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                            <small class="fas fa-star"></small>
                            <small class="far fa-star text-muted"></small>
                            <small class="far fa-star text-muted"></small>
                            <small class="far fa-star text-muted"></small>
                            <small class="far fa-star text-muted"></small>
                        </div>
                    </div>
                    <div class="col-auto mb-2 mb-md-0">
                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                            <?php $ratingPercentage = ratingPercentage($ratings['one'],$ratings['total_reviews']) ?>
                            <div class="progress-bar" role="progressbar" style="width: {{$ratingPercentage}}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <span class="text-gray-90">{{$ratings['one']}}</span>
                    </div>
                </a>
            </li>
        </ul>
        <!-- End Ratings -->
    </div>
    <div class="col-md-6">
        <h3 class="font-size-18 mb-5">Add a review</h3>
        <!-- Form -->
            <div class="row align-items-center mb-4">
                <div class="col-md-4 col-lg-3">
                    <label for="rating" class="form-label mb-0">Your Review</label>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="stars">
                        <label class="rate">
                            <input type="radio" name="reviewRadio" id="star1" value="1">
                            <div class="face"></div>
                            <i class="far fa-star star one-star"></i>
                        </label>
                        <label class="rate">
                            <input type="radio" name="reviewRadio" id="star2" value="2">
                            <div class="face"></div>
                            <i class="far fa-star star two-star"></i>
                        </label>
                        <label class="rate">
                            <input type="radio" name="reviewRadio" id="star3" value="3">
                            <div class="face"></div>
                            <i class="far fa-star star three-star"></i>
                        </label>
                        <label class="rate">
                            <input type="radio" name="reviewRadio" id="star4" value="4">
                            <div class="face"></div>
                            <i class="far fa-star star four-star"></i>
                        </label>
                        <label class="rate">
                            <input type="radio" name="reviewRadio" id="star5" value="5">
                            <div class="face"></div>
                            <i class="far fa-star star five-star"></i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="js-form-message form-group mb-3 row">
                <div class="col-md-4 col-lg-3">
                    <label for="descriptionTextarea" class="form-label">Your Review</label>
                </div>
                <div class="col-md-8 col-lg-9">
                    <textarea id="reviewProduct" class="form-control" rows="3" id="descriptionTextarea" placeholder="Please enter your review." ></textarea>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-4 offset-lg-3 col-auto">
                    <button type="submit" product_id="{{ $productDetails['id'] }}" id="add-product-review" class="add-product-review btn btn-primary-dark btn-wide transition-3d-hover">Add Review</button>
                </div>
            </div>
        <!-- End Form -->
    </div>
</div>
<!-- Review -->
@foreach($products_review as $review)
<div class="border-bottom border-color-1 pb-4 mb-4">

    <!-- Review Rating -->
    <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
        <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
            @foreach(range(1,$review['ratings']) as $i)
            <small class="fas fa-star"></small>
            @endforeach
            @if($review['ratings'] < 5)
            @foreach(range(1,(5-$review['ratings'])) as $i)
            <small class="far fa-star text-muted"></small>
            @endforeach
            @endif
        </div>
    </div>

    <!-- End Review Rating -->

    <p class="text-gray-90">{{$review['review']}}</p>

    <!-- Reviewer -->
    <div class="mb-2">
        <strong>{{$review['user']['name']}}</strong>
        @if(Auth::check())
        <span class="font-size-13 text-gray-23">(You)</span>
        @endif
        <span class="font-size-13 text-gray-23">- {{$review['review_date']}}</span>
    </div>
    <div class="mb-0">
        @if(Auth::check() && Auth::user()->id == $review['user_id'])
        <button href="javascript:void()" data-review_id="{{$review['id']}}" data-product_id="{{$review['product_id']}}" type="button" class="btnReviewDelete btn btn-danger btn-filter-circle"> <i class="fas fa-trash "></i></button>
        @endif
    </div>

    <!-- End Reviewer -->
</div>
@endforeach
<a class="link text-gray-90 font-weight-bold font-size-15" href="#">
    Discover more Reviews
    <span class="link__icon ml-1">
        <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
    </span>
</a>
<!-- End Review -->