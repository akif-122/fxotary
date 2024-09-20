@extends('frontend.layouts.main')

@section('style')
@endsection

@section('content')
    <!--===============================
            PORTFOLIO PAGE START
        ===============================-->
    <section class="tf__portfolio_page mt_190 xs_mt_150">
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
            </div>

            <div class="row mt_60 justify-content-between">
                <div class="col-xl-5 col-md-6">
                    <div class="tf__featured_work_item">
                        <a href="{{ route("portfolio.detail") }}" class="cursor-arrow tf__featured_work_item_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/futured_work_img_3.jpg") }}" alt="futured" class="img-fluid w-100" />
                            </div>
                        </a>
                        <a href="{{ route("portfolio.detail") }}">
                            <h3 data-text-animation data-split="word">
                                Website Design 2024
                            </h3>
                        </a>
                        <p data-text-animation="slide-from-right" data-split="char">
                            Website Design / Brand
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="tf__featured_work_item item_2">
                        <a href="{{ route("portfolio.detail") }}" class="cursor-arrow tf__featured_work_item_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/futured_work_img_4.jpg") }}" alt="futured" class="img-fluid w-100" />
                            </div>
                        </a>
                        <a href="{{ route("portfolio.detail") }}">
                            <h3 data-text-animation data-split="word">Cartoon Animation</h3>
                        </a>
                        <p data-text-animation="slide-from-right" data-split="char">
                            Website Design / Brand
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="tf__featured_work_item tf__featured_work_item_small">
                        <a href="{{ route("portfolio.detail") }}" class="cursor-arrow tf__featured_work_item_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/futured_work_img_5.jpg") }}" alt="futured" class="img-fluid w-100" />
                            </div>
                        </a>
                        <a href="{{ route("portfolio.detail") }}">
                            <h3 data-text-animation data-split="word">Corporate Website</h3>
                        </a>
                        <p data-text-animation="slide-from-right" data-split="char">
                            Website Design / Brand
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="tf__featured_work_item item_2">
                        <a href="{{ route("portfolio.detail") }}" class="cursor-arrow tf__featured_work_item_img">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/futured_work_img_6.jpg") }}" alt="futured" class="img-fluid w-100" />
                            </div>
                        </a>
                        <a href="{{ route("portfolio.detail") }}">
                            <h3 data-text-animation data-split="word">Digital Analysis</h3>
                        </a>
                        <p data-text-animation="slide-from-right" data-split="char">
                            Website Design / Brand
                        </p>
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
