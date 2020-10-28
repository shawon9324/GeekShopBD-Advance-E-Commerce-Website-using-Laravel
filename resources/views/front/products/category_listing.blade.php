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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">
                            @if($section_id==1)
                            Desktop PC
                            @elseif($section_id==2)
                            Laptop & Netbook
                            @elseif($section_id==4)
                            Camera & Photo
                            @elseif($section_id==5)
                            Accessories
                            @endif
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-6">
            <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">
                    @if($section_id==1)
                    Desktop PC
                    @elseif($section_id==2)
                    Laptop & Netbook
                    @elseif($section_id==4)
                    Camera & Photo
                    @elseif($section_id==5)
                    Accessories
                    @endif
                </h3>
            </div>
            <ul class="row list-unstyled products-group no-gutters mb-6">
                @foreach ($sections as $section)
                @if($section['id'] == $section_id)
                @foreach ($section['categories'] as $category)
                <li class="col-6 col-md-2 product-item">
                    <div class="product-item__outer h-100 w-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2">
                                    <a href="{{ url('/'.$category['url'])}}" class="d-block text-center"><img style="width: 370px; height:200px;" class="img-fluid" 
                                        <?php $category_image_path = "img/category_img/".$category['category_image']; ?>
                                        @if (!empty($category['category_image']) && file_exists($category_image_path))
                                        src="{{ asset('img/category_img/'.$category['category_image']) }}" 
                                        @else
                                        src="https://dummyimage.com/300x300/00abc5/ffffff.png&text=No+Image" 
                                        @endif
                                        alt="Image Description"></a>
                                </div>
                                <h5 class="text-center mb-1 product-item__title"><a href="{{ url('/'.$category['url'])}}" class="font-size-15 text-gray-90">{{ $category['category_name'] }}</a></h5>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                @endif
                @endforeach

            </ul>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection