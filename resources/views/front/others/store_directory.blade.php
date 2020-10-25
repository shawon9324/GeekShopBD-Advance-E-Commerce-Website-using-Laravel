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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Store Directory</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <div class="mb-4 mb-md-6 text-center">
            <h1>Store Directory - GeekShopBD</h1>
        </div>
        <div class="mb-12">
            <div class="row no-gutters ec-store-directory align-items-start">
                {{-- section loop --}}
                @foreach ($sections as $section)
                @if(count($section['categories']) > 0)
                <ul class="col-md-2 border-top border-color-1 mb-4 mb-md-0">
                    <li><a >{{ $section['name'] }}</a>
                        <ul>
                            @foreach ($section['categories'] as $category)
                            <li><a href="{{ url('/'.$category['url'])}}">{{ $category['category_name'] }}</a>
                                <ul>
                                    @foreach ($category['subcategories'] as $subcategory)
                                    <li><a href="#">{{ $subcategory['category_name'] }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    
                </ul>
                @endif
                @endforeach
                {{-- section loop --}}

            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection