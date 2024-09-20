@extends('frontend.layouts.main')

@section('style')
@endsection



@section('content')
    <!--============================
            TEAM PAGE START
        =============================-->
    <section class="tf__team tf__team_about mt_190 xs_mt_150">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-5">
                    <div class="section_heading section_heading_2">
                        <h5>See Our Team Member.</h5>
                        <h2 class="banner_title">Let’s Check our creative team.</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="tf__team_page_text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                            purus senectus sapien habitant rutrum himenaeos curabitur
                            posuere congue ac non eu odio tempor placerat id.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_team" data-animation="fade-left">
                        <a href="#" class="single_team_img cursor-arrow">
                            <img src="{{ asset("frontend-assets/images/team_1.jpg") }}" alt="team" class="img-fluid w-100" />
                        </a>
                        <h3>Wade Warren</h3>
                        <p>UI/UX Designer</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_team" data-animation="fade-left" data-delay=".75">
                        <a href="#" class="single_team_img cursor-arrow">
                            <img src="{{ asset("frontend-assets/images/team_2.jpg") }}" alt="team" class="img-fluid w-100" />
                        </a>
                        <h3>Willy Tommy</h3>
                        <p>Web Developer</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_team" data-animation="fade-left" data-delay="1">
                        <a href="#" class="single_team_img cursor-arrow">
                            <img src="{{ asset("frontend-assets/images/team_3.jpg") }}" alt="team" class="img-fluid w-100" />
                        </a>
                        <h3>Jacob Wilson</h3>
                        <p>Digital Marketer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
            TEAM PAGE END
        =============================-->

    <!--===============================
            COUNTER START
        ===============================-->
    <section class="counter team_page_counter pt_125 xs_pt_75">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-md-6">
                    <div class="counter_img">
                        <img src="{{ asset("frontend-assets/images/counter_img.png") }}" alt="counter" class="img-fluid w-100" />
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <div class="counter_item counter_item_icon" data-animation="fade-right">
                                <h2 class="count">10</h2>
                                <p>Project completed</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="counter_item" data-animation="fade-right" data-delay=".75">
                                <h2 class="count">180</h2>
                                <p>Skilled Professional</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="counter_item" data-animation="fade-right" data-delay="1">
                                <h2 class="count">500</h2>
                                <p>Visited Conference</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="counter_item counter_item_icon" data-animation="fade-right" data-delay="1.25">
                                <h2 class="count">30</h2>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
            COUNTER END
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
