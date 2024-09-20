@extends('frontend.layouts.main')

@section('style')
@endsection


@section('content')
    <!--===============================
            SERVICES PAGE START
        ===============================-->
    <section class="tf__services_page tf__about_us_2 mt_190 xs_mt_150">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="section_heading">
                        <h5>OUR SERVICES</h5>
                        <h2 class="banner_title">
                            Our fusion of design and code is driven by our unwavering
                            passion.
                        </h2>
                    </div>
                    <div class="about_text_2">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                            purus senectus sapien habitant rutrum himenaeos curabitur
                            posuere congue ac non eu odio tempor placerat id.
                        </p>
                        <a class="circle_btn" href="#service_list">
                            View All <br />
                            Our Services <i class="fx-icon-next-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tf__service_2 mt_60">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-6">
                    <div class="tf__service_2_img">
                        <div data-animation="img-blur" data-scroll="0">
                            <img src="{{ asset("frontend-assets/images/service_2_img.jpg") }}" alt="service" class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <div class="tf__service_2_text">
                        <h2 data-text-animation="scrub" data-split="char">
                            Branding <span>Branding</span>
                        </h2>
                        <h2 data-text-animation="scrub" data-split="char">
                            UX/UI Design <span>UX/UI Design </span>
                        </h2>
                        <h2 data-text-animation="scrub" data-split="char">
                            Digital Marketing
                        </h2>
                        <h2 data-text-animation="scrub" data-split="char">
                            Graphic Design<span>Graphic Design</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="tf__services_page_item" id="service_list">
                <div class="row mt_120 xs_mt_70 item_1">
                    <div class="col-xl-5 col-md-6">
                        <div class="tf__services_2_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/service_pages_img_1.jpg") }}" alt="service" class="img-fluid w-100" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="tf__services_2_text">
                            <h3 data-text-animation data-split="word">
                                Website & Mobile App Development
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                                purus senectus sapien habitant rutrum himenaeos curabitur
                                posuere congue ac non eu odio tempor placerat id.
                            </p>
                            <ul>
                                <li>Web 3.0 Development</li>
                                <li>Webflow Development</li>
                                <li>Blockchain Technology</li>
                                <li>Backend Development</li>
                                <li>JavaScript</li>
                                <li>WordPress</li>
                            </ul>
                            <a class="circle_btn circle_btn_2 learn_more_2" href="{{ route("services.detail") }}"><i
                                    class="fx-icon-long-next-arrow"></i> Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="row mt_120 xs_mt_70 item_2">
                    <div class="col-xl-5 col-md-6">
                        <div class="tf__services_2_text">
                            <h3 data-text-animation data-split="char">
                                User Interface Design & Branding
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                                purus senectus sapien habitant rutrum himenaeos curabitur
                                posuere congue ac non eu odio tempor placerat id.
                            </p>
                            <ul>
                                <li>Web 3.0 Development</li>
                                <li>Webflow Development</li>
                                <li>Blockchain Technology</li>
                                <li>Backend Development</li>
                                <li>JavaScript</li>
                                <li>WordPress</li>
                            </ul>
                            <a class="circle_btn circle_btn_2 learn_more_2" href="{{ route("services.detail") }}"><i
                                    class="fx-icon-long-next-arrow"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="tf__services_2_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/service_pages_img_2.jpg") }}" alt="service" class="img-fluid w-100" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt_120 xs_mt_70 item_1">
                    <div class="col-xl-5 col-md-6">
                        <div class="tf__services_2_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/service_pages_img_3.jpg") }}" alt="service" class="img-fluid w-100" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="tf__services_2_text">
                            <h3 data-text-animation>Promotion of your Product Marketing</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                                purus senectus sapien habitant rutrum himenaeos curabitur
                                posuere congue ac non eu odio tempor placerat id.
                            </p>
                            <ul>
                                <li>Web 3.0 Development</li>
                                <li>Webflow Development</li>
                                <li>Blockchain Technology</li>
                                <li>Backend Development</li>
                                <li>JavaScript</li>
                                <li>WordPress</li>
                            </ul>
                            <a class="circle_btn circle_btn_2 learn_more_2" href="{{ route("services.detail") }}"><i
                                    class="fx-icon-long-next-arrow"></i> Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
            SERVICES PAGE END
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
