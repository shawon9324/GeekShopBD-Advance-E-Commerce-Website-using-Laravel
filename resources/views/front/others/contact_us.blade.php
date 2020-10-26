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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->


    <div class="container">
        <div class="mb-5">
            <h1 class="text-center">Contact Us</h1>
        </div>
        <div class="row mb-10">
            <div class="col-lg-7 col-xl-6 mb-8 mb-lg-0">
                <div class="mr-xl-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title mb-0 pb-2 font-size-25">Leave us a Message</h3>
                    </div>
                    <p class="max-width-830-xl text-gray-90">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae id odio vitae in. Tempora, quos illo voluptates fugiat adipisci mollitia dolore doloremque cum ex necessitatibus molestiae commodi iste, similique officiis.</p>
                    <form class="js-validate" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        First name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="firstName" placeholder="" aria-label="" required="" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Last name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="lastName" placeholder="" aria-label="" required="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Subject
                                    </label>
                                    <input type="text" class="form-control" name="Subject" placeholder="" aria-label="" data-msg="Please enter subject." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>
                            <div class="col-md-12">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Your Message
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary-dark-w px-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-xl-6">
                <div class="mb-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1112.800889839256!2d90.32053132747073!3d23.87643281634744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23e9098a073%3A0x9a707416b7fb3c64!2zRGFmZm9kaWwgSW50ZXJuYXRpb25hbCBVbml2ZXJzaXR5IOCmoeCnjeCmr-CmvuCmq-Cni-CmoeCmv-CmsiDgpobgpqjgp43gpqTgprDgp43gppzgpr7gpqTgpr_gppUg4Kas4Ka_4Ka24KeN4Kas4Kas4Ka_4Kam4KeN4Kav4Ka-4Kay4Kav4Ka8!5e1!3m2!1sen!2sbd!4v1603642723046!5m2!1sen!2sbd" width="100%" height="288" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title mb-0 pb-2 font-size-25">Our Address</h3>
                </div>
                <address class="mb-6 text-lh-23">
                    Dhaka, Bangladesh
                    <div class="">Support (+880) 1774339279</div>
                    <div class="">Email: <a class="text-blue text-decoration-on" href="mailto:contact@geekshopbd.com">contact@geekshopbd.com</a></div>
                </address>
                <h5 class="font-size-14 font-weight-bold mb-3">Opening Hours</h5>
                <div class="">Saturday to Thrusday: 9am-11pm</div>
                <div class="mb-6">Friday: Offday!</div>
                <h5 class="font-size-14 font-weight-bold mb-3">Careers</h5>
                <p class="text-gray-90">If you’re interested in employment opportunities at Electro, please email us: <a class="text-blue text-decoration-on" href="mailto:contact@geekshopbd.com">contact@geekshopbd.com</a></p>
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection