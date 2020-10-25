<?php
	use App\Section;
	$sections = Section::sections();
?>
@extends('layouts.front_layout.front_shop_layout')
@section('content')
 <!-- ========== MAIN CONTENT ========== -->
 <main id="content" role="main">
    <div class="bg-img-hero mb-14" style="background-image: url('img/front_img/1920x600/img1.jpg');">
        <div class="container">
            <div class="flex-content-center max-width-620-lg flex-column mx-auto text-center min-height-564">
                <h1 class="h1 font-weight-bold">About Us - GeekShopBD</h1>
                <p class="text-gray-39 font-size-18 text-lh-default">Passion may be a friendly or eager interest in or admiration for a proposal, cause, discovery, or activity or love to a feeling of unusual excitement.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card mb-3 border-0 text-center rounded-0">
                    <img class="img-fluid mb-3" src="{{ url('img/front_img/500X300/img1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="font-size-18 font-weight-semi-bold mb-3">What we really do?</h5>
                        <p class="text-gray-90 max-width-334 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa debitis nobis sit repellat, corporis, cumque accusamus ducimus doloremque iste aliquam ut ea maxime delectus a dolorum expedita perspiciatis animi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card mb-3 border-0 text-center rounded-0">
                    <img class="img-fluid mb-3" src="{{ url('img/front_img/500X300/img2.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="font-size-18 font-weight-semi-bold mb-3">Our Vision</h5>
                        <p class="text-gray-90 max-width-334 mx-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus dolorem voluptates at veritatis fuga voluptatem libero porro facilis, deleniti neque reprehenderit, vero voluptatibus eaque dicta sint excepturi, beatae labore. Quidem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 border-0 text-center rounded-0">
                    <img class="img-fluid mb-3" src="{{ url('img/front_img/500X300/img3.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="font-size-18 font-weight-semi-bold mb-3">History of Beginning</h5>
                        <p class="text-gray-90 max-width-334 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, possimus distinctio iure ipsa sint tempora quasi architecto pariatur quos aspernatur vitae minima molestiae eligendi optio deleniti doloremque. Eos, officia provident.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mb-8 mb-lg-0">
        <div class="row mb-8">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-8">
                        <h3 class="font-size-18 font-weight-semi-bold text-gray-39 mb-4">What we really do?</h3>
                        <p class="text-gray-90">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit dolorem nesciunt eveniet in tenetur veritatis porro, quae aspernatur odio excepturi laborum facilis laboriosam alias labore illo ratione neque sit. Eveniet!</p>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-8">
                        <h3 class="font-size-18 font-weight-semi-bold text-gray-39 mb-4">Our Vision</h3>
                        <p class="text-gray-90">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit dolorem nesciunt eveniet in tenetur veritatis porro, quae aspernatur odio excepturi laborum facilis laboriosam alias labore illo ratione neque sit. Eveniet!</p>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-8">
                        <h3 class="font-size-18 font-weight-semi-bold text-gray-39 mb-4">History of the Company</h3>
                        <p class="text-gray-90">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit dolorem nesciunt eveniet in tenetur veritatis porro, quae aspernatur odio excepturi laborum facilis laboriosam alias labore illo ratione neque sit. Eveniet!</p>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-8">
                        <h3 class="font-size-18 font-weight-semi-bold text-gray-39 mb-4">Cooperate with Us!</h3>
                        <p class="text-gray-90">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit dolorem nesciunt eveniet in tenetur veritatis porro, quae aspernatur odio excepturi laborum facilis laboriosam alias labore illo ratione neque sit. Eveniet!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="ml-lg-8">
                    <h3 class="font-size-18 font-weight-semi-bold text-gray-39 mb-4">What can we do for you ?</h3>
                    <!-- Basics Accordion -->
                    <div id="basicsAccordion1" class="about-accordion">
                        <!-- Card -->
                        <div class="card mb-4 border-color-4 rounded-0">
                            <div class="card-header card-collapse border-color-4" id="basicsHeadingOne">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                                        data-toggle="collapse"
                                        data-target="#basicsCollapseOnee"
                                        aria-expanded="true"
                                        aria-controls="basicsCollapseOnee">
                                        <span class="border border-color-5 rounded font-size-12 mr-5">
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-minus"></i>
                                        </span>
                                        Support 24/7
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseOnee" class="collapse show"
                                aria-labelledby="basicsHeadingOne"
                                data-parent="#basicsAccordion1">
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto expedita provident doloribus beatae autem repellendus nesciunt nam, ex voluptate, tempora harum quas delectus odio nemo quaerat dolor ratione enim! Minima?</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card mb-4 border-color-4 rounded-0">
                            <div class="card-header card-collapse border-color-4" id="basicsHeadingTwo">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                                        data-toggle="collapse"
                                        data-target="#basicsCollapseTwo"
                                        aria-expanded="false"
                                        aria-controls="basicsCollapseTwo">
                                        <span class="border border-color-5 rounded font-size-12 mr-5">
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-minus"></i>
                                        </span>
                                        Best Quality
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseTwo" class="collapse"
                                aria-labelledby="basicsHeadingTwo"
                                data-parent="#basicsAccordion1">
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse maxime porro reiciendis quis delectus nam fugit sapiente ex praesentium harum libero rem excepturi animi temporibus minima, dicta consequuntur quaerat nulla?</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card mb-4 border-color-4 rounded-0">
                            <div class="card-header card-collapse border-color-4" id="basicsHeadingThree">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                                        data-toggle="collapse"
                                        data-target="#basicsCollapseThree"
                                        aria-expanded="false"
                                        aria-controls="basicsCollapseThree">
                                        <span class="border border-color-5 rounded font-size-12 mr-5">
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-minus"></i>
                                        </span>
                                        Fastest Delivery
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseThree" class="collapse"
                                aria-labelledby="basicsHeadingThree"
                                data-parent="#basicsAccordion1">
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse maxime porro reiciendis quis delectus nam fugit sapiente ex praesentium harum libero rem excepturi animi temporibus minima, dicta consequuntur quaerat nulla?</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card mb-4 border-color-4 rounded-0">
                            <div class="card-header card-collapse border-color-4" id="basicsHeadingFour">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                                        data-toggle="collapse"
                                        data-target="#basicsCollapseFour"
                                        aria-expanded="false"
                                        aria-controls="basicsCollapseFour">
                                        <span class="border border-color-5 rounded font-size-12 mr-5">
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-minus"></i>
                                        </span>
                                        Customer Care
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseFour" class="collapse"
                                aria-labelledby="basicsHeadingFour"
                                data-parent="#basicsAccordion1">
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse maxime porro reiciendis quis delectus nam fugit sapiente ex praesentium harum libero rem excepturi animi temporibus minima, dicta consequuntur quaerat nulla?</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card mb-4 border-color-4 rounded-0">
                            <div class="card-header card-collapse border-color-4" id="basicsHeadingFive">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                                        data-toggle="collapse"
                                        data-target="#basicsCollapseFive"
                                        aria-expanded="false"
                                        aria-controls="basicsCollapseFive">
                                        <span class="border border-color-5 rounded font-size-12 mr-5">
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-minus"></i>
                                        </span>
                                        Over 200 Satisfied Customers
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseFive" class="collapse"
                                aria-labelledby="basicsHeadingFive"
                                data-parent="#basicsAccordion1">
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse maxime porro reiciendis quis delectus nam fugit sapiente ex praesentium harum libero rem excepturi animi temporibus minima, dicta consequuntur quaerat nulla?</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Basics Accordion -->
                </div>
            </div>
        </div>
        
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection