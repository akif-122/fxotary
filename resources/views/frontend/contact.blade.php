@extends('frontend.layouts.main')

@section('style')
@endsection

@section('content')
    <!--===============================
            CONTACT PAGE START
        ===============================-->
    <section class="tf__contact_page mt_190 xs_mt_150">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-5">
                    <div class="section_heading">
                        <h5>CONTACT US</h5>
                        <h2 class="banner_title">
                            Join us in creating a Shining brand for you!
                        </h2>
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
            </div>
            <form class="tf__contact_form tf__contact_page_form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tf__contact_form_imput">
                            <label>First Name:</label>
                            <input type="text" placeholder="e.g. Willy" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf__contact_form_imput">
                            <label>Email:</label>
                            <input type="email" placeholder="e.g. youremail@gmail.com" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf__contact_form_imput">
                            <label>Phone:</label>
                            <input type="text" placeholder="e.g. +8801" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf__contact_form_imput">
                            <label>subject:</label>
                            <input type="text" placeholder="e.g. I need help" />
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="tf__contact_form_imput">
                            <label>Message:</label>
                            <textarea rows="4" placeholder="e.g. you need any help"></textarea>
                        </div>
                        <button class="circle_btn circle_btn_2 learn_more_2" type="submit">
                            <i class="fx-icon-long-next-arrow"></i>
                            Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--===============================
            CONTACT PAGE END
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
