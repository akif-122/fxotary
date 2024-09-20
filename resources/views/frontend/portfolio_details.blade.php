@extends('frontend.layouts.main')

@section('style')
@endsection



@section('content')
    <!--===============================
                BLOG DETAILS START
            ===============================-->
    <section class="tf__blog_details mt_190 xs_mt_150">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-5">
                    <div class="section_heading">
                        <h5>OUR PORTFOLIO</h5>
                        <h2 class="banner_title">Modern Grid</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="tf__portfolio_page_text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                            purus senectus sapien habitant rutrum himenaeos curabitur
                            posuere congue ac non eu odio tempor placerat id.
                        </p>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="tf__blog_details_img">
                        <div data-animation="img-blur" data-delay="0" data-scroll="0">
                            <img src="{{ asset("frontend-assets/images/futured_work_img_9.jpg") }}" alt="blog details" class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xxl-7 col-lg-8">
                    <div class="tf__blog_details_text">
                        <div class="tf__featured_work_item mt-0">
                            <h3 class="mt-0" data-text-animation data-split="word">
                                Website Design 2024
                            </h3>
                            <p>Website Design / Brand</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                            purus senectus sapien habitant rutrum himenaeos curabitur
                            posuere congue ac non eu odio tempor placerat id. Lorem ipsum
                            dolor sit amet consectetur adipiscing elit viverra purus
                            senectus sapien habitant rutrum himenaeos curabitur posuere
                            congue ac non eu odio tempor placerat id. Lorem ipsum dolor sit
                            amet consectetur adipiscing elit viverra purus senectus sapien
                            habitant
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                            purus senectus sapien habitant rutrum himenaeos curabitur
                            posuere congue ac non eu odio tempor placerat id. Lorem ipsum
                            dolor sit amet consectetur adipiscing elit viverra purus
                            senectus sapien habitant
                        </p>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <div class="project_details_info">
                        <h4>Project Details</h4>
                        <ul>
                            <li>
                                <h5>Name:</h5>
                                <p>Surgery</p>
                            </li>
                            <li>
                                <h5>Author:</h5>
                                <p>Dr.Rajin Saleh</p>
                            </li>
                            <li>
                                <h5>Date:</h5>
                                <p>23 December,2022</p>
                            </li>
                            <li>
                                <h5>Tags:</h5>
                                <p>Medical,Operation</p>
                            </li>
                            <li class="project_details_info_value">
                                <h5>Value:</h5>
                                <p>$240</p>
                            </li>
                            <li>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
                BLOG DETAILS END
            ===============================-->

    <!--===============================
                PORTFOLIO PAGE START
            ===============================-->
    <section class="tf__portfolio_page pt_100 xs_pt_70">
        <div class="container">
            <div class="row mt_60 justify-content-between grid">
                <div class="col-xl-6 col-md-6 grid_item">
                    <div class="tf__featured_work_item tf__featured_work_item_small">
                        <a href="#" class="cursor-arrow tf__featured_work_item_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/futured_work_img_5.jpg") }}" alt="futured" class="img-fluid w-100" />
                            </div>
                        </a>
                        <h3 data-text-animation data-split="line" data-duration=".5">
                            Corporate Website
                        </h3>
                        <p>Website Design / Brand</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 grid_item">
                    <div class="tf__featured_work_item">
                        <a href="#" class="cursor-arrow tf__featured_work_item_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/futured_work_img_3.jpg") }}" alt="futured" class="img-fluid w-100" />
                            </div>
                        </a>
                        <h3 data-text-animation data-split="line" data-duration=".5">
                            Website Design 2024
                        </h3>
                        <p>Website Design / Brand</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 grid_item">
                    <div class="tf__featured_work_item">
                        <a href="#" class="cursor-arrow tf__featured_work_item_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/futured_work_img_4.jpg") }}" alt="futured" class="img-fluid w-100" />
                            </div>
                        </a>
                        <h3 data-text-animation data-split="line" data-duration=".5">
                            Cartoon Animation
                        </h3>
                        <p>Website Design / Brand</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 grid_item">
                    <div class="tf__featured_work_item tf__featured_work_item_small">
                        <a href="#" class="cursor-arrow tf__featured_work_item_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/futured_work_img_5.jpg") }}" alt="futured" class="img-fluid w-100" />
                            </div>
                        </a>
                        <h3 data-text-animation data-split="line" data-duration=".5">
                            Corporate Website
                        </h3>
                        <p>Website Design / Brand</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
               PORTFOLIO PAGE END
           ===============================-->

    <!--===============================
                QUESTION START
            ===============================-->
    <section class="tf__question pt_100 xs_pt_70 pb_100 xs_pb_70" data-animation>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route("contact") }}" data-cursor='<i class="fa-light fa-envelope"></i>' class="tf__question_text">
                        <h2>Have any <span>project?</span></h2>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
                QUESTION END
            ===============================-->
@endsection



@section('customjs')
@endsection
