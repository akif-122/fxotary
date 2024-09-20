@extends('frontend.layouts.main')

@section('style')
@endsection

@section('content')
    <!--===============================
                ABOUT US 2 START
            ===============================-->
    <section class="tf__about_us_2 mt_190 xs_mt_150">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <h5>ABOUT US</h5>
                        <h2 class="banner_title">
                            Our fusion of design and code is driven by our unwavering
                            passion.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt_30 xs_mt_50 item_1">
                <div class="col-xl-4 col-md-6"></div>
                <div class="col-xl-8 col-md-6">
                    <div class="tf__services_2_text">
                        <div class="d-flex">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                                purus senectus sapien habitant rutrum himenaeos curabitur
                                posuere congue
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                                purus senectus sapien habitant rutrum himenaeos curabitur
                                posuere congue
                            </p>
                        </div>
                        <ul>
                            <li>Web 3.0 Development</li>
                            <li>Webflow Development</li>
                            <li>Blockchain Technology</li>
                            <li>Backend Development</li>
                            <li>JavaScript</li>
                            <li>WordPress</li>
                        </ul>
                        <div class="mt-5">
                            <img src="{{ asset('frontend-assets/images/service_details.png') }}" alt="service"
                                class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt_130 xs_mt_50 item_1">
                <div class="col-xl-6 col-md-6">
                    <div class="tf__services_2_text p-0 h-auto">
                        <h3>Website & Mobile App Development</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="tf__services_2_text p-0 h-auto">
                        <p class="mt-0">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                            purus senectus sapien habitant rutrum himenaeos curabitur
                            posuere congue ac non eu odio tempor placerat id. Lorem ipsum
                            dolor sit amet consectetur adipiscing elit viverra purus
                            senectus sapien habitant rutrum himenaeos curabitur posuere
                        </p>
                        <ul>
                            <li>Web 3.0 Development</li>
                            <li>Webflow Development</li>
                            <li>Blockchain Technology</li>
                            <li>Backend Development</li>
                            <li>JavaScript</li>
                            <li>WordPress</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt_130 xs_mt_50 item_1">
                <div class="col-md-6 col-xl-8 mb-3">
                    <img src="{{ asset('frontend-assets/images/service_details-1.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-xl-4 mb-3">
                    <img src="{{ asset('frontend-assets/images/service_details-2.png') }}" alt="" />
                </div>
            </div>
            <div class="row mt_130 xs_mt_50 item_1">
                <div class="col-md-0 col-xl-2"></div>
                <div class="col-md-12 col-xl-10">
                    <div class="tf__services_2_text">
                        <h3>
                            User Interface Design <br />
                            & Branding
                        </h3>
                        <div class="d-flex">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                                purus senectus sapien habitant rutrum himenaeos curabitur
                                posuere congue
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                                purus senectus sapien habitant rutrum himenaeos curabitur
                                posuere congue
                            </p>
                        </div>
                        <ul>
                            <li>Web 3.0 Development</li>
                            <li>Webflow Development</li>
                            <li>Blockchain Technology</li>
                            <li>Backend Development</li>
                            <li>JavaScript</li>
                            <li>WordPress</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
                ABOUT US 2 END
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
