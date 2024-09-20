@extends('frontend.layouts.main')

@section('style')
@endsection



@section('content')
    <!--===============================
            BLOG LIST START
        ===============================-->
    <section class="tf__blog_list_page mt_190 xs_mt_150">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-5">
                    <div class="section_heading">
                        <h5>OUR BLOG</h5>
                        <h2 class="banner_title">Blogs List</h2>
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

            <div class="tf__blog_list_area mt_60">
                <div class="row mt_30" data-animation>
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <a href="{{ route("blog.detail") }}" data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                            class="blog_list_img d-block">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/blog_list_img_1.jpg") }}" alt="blog" class="img-fluid w-100" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-5 col-lg-7 col-md-6">
                        <div class="blog_list_text">
                            <span>Marketing</span>

                            <ul>
                                <li>
                                    <p>
                                        <i class="far fa-calendar-check"></i> September 25, 2022
                                    </p>
                                </li>
                                <li>
                                    <p><i class="far fa-comment-dots"></i> No Comments</p>
                                </li>
                            </ul>
                            <a href="{{ route("blog.detail") }}">Creative advertising our life became noise.</a>
                        </div>
                    </div>
                </div>
                <div class="row mt_30" data-animation data-delay=".75">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <a href="{{ route("blog.detail") }}" data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                            class="blog_list_img d-block">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/blog_list_img_2.jpg") }}" alt="blog" class="img-fluid w-100" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-5 col-lg-7 col-md-6">
                        <div class="blog_list_text">
                            <span>Marketing</span>
                            <ul>
                                <li>
                                    <p>
                                        <i class="far fa-calendar-check"></i> September 25, 2022
                                    </p>
                                </li>
                                <li>
                                    <p><i class="far fa-comment-dots"></i> No Comments</p>
                                </li>
                            </ul>
                            <a href="{{ route("blog.detail") }}">Creative advertising our life became noise.</a>
                        </div>
                    </div>
                </div>
                <div class="row mt_30" data-animation data-delay=".75">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <a href="{{ route("blog.detail") }}" data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                            class="blog_list_img d-block">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/blog_list_img_3.jpg") }}" alt="blog" class="img-fluid w-100" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-5 col-lg-7 col-md-6">
                        <div class="blog_list_text">
                            <span>Marketing</span>
                            <ul>
                                <li>
                                    <p>
                                        <i class="far fa-calendar-check"></i> September 25, 2022
                                    </p>
                                </li>
                                <li>
                                    <p><i class="far fa-comment-dots"></i> No Comments</p>
                                </li>
                            </ul>
                            <a href="{{ route("blog.detail") }}">Creative advertising our life became noise.</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tf__pagination mt_55">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">15</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
            BLOG LIST END
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
