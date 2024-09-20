@extends('frontend.layouts.main')

@section('style')
@endsection



@section('content')
    <!--===============================
            BLOG GRID START
        ===============================-->
    <section class="tf__blog_page mt_190 xs_mt_70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-sm-5 col-md-6">
                    <div class="section_heading">
                        <h5>OUR BLOG</h5>
                        <h2 class="banner_title">Latest Blogs</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-sm-7 col-md-6">
                    <div class="tf__portfolio_page_text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                            purus senectus sapien habitant rutrum himenaeos curabitur
                            posuere congue ac non eu odio tempor placerat id.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt_35">
                <div class="col-lg-4 col-md-6">
                    <div class="single_blog first_blog">
                        <div class="single_blog_text">
                            <ul class="d-flex flex-wrap">
                                <li>User Experience</li>
                                <li>September 10, 2023</li>
                            </ul>
                            <a class="title" href="{{ route("blog.detail") }}">Creative advertising our life became noise.</a>
                        </div>
                        <div class="single_blog_img">
                            <a href="{{ route("blog.detail") }}" data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                                class="img d-block">
                                <div data-animation="img-blur" data-delay="0">
                                    <img src="{{ asset("frontend-assets/images/blog_1.jpg") }}" alt="blog" class="img-fluid w-100" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_blog">
                        <div class="single_blog_text">
                            <ul class="d-flex flex-wrap">
                                <li>User Experience</li>
                                <li>September 10, 2023</li>
                            </ul>
                            <a class="title" href="{{ route("blog.detail") }}">Creative advertising our life became noise.</a>
                        </div>
                        <div class="single_blog_img">
                            <a href="{{ route("blog.detail") }}" data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                                class="img d-block">
                                <div data-animation="img-blur" data-delay="0">
                                    <img src="{{ asset("frontend-assets/images/blog_2.jpg") }}" alt="blog" class="img-fluid w-100" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_blog last_blog">
                        <div class="single_blog_text">
                            <ul class="d-flex flex-wrap">
                                <li>User Experience</li>
                                <li>September 10, 2023</li>
                            </ul>
                            <a class="title" href="{{ route("blog.detail") }}">Creative advertising our life became noise.</a>
                        </div>
                        <div class="single_blog_img">
                            <a href="{{ route("blog.detail") }}" data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                                class="img d-block">
                                <div data-animation="img-blur" data-delay="0">
                                    <img src="{{ asset("frontend-assets/images/blog_3.jpg") }}" alt="blog" class="img-fluid w-100" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_blog first_blog">
                        <div class="single_blog_text">
                            <ul class="d-flex flex-wrap">
                                <li>User Experience</li>
                                <li>September 10, 2023</li>
                            </ul>
                            <a class="title" href="{{ route("blog.detail") }}">Creative advertising our life became noise.</a>
                        </div>
                        <div class="single_blog_img">
                            <a href="{{ route("blog.detail") }}" data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                                class="img d-block">
                                <div data-animation="img-blur" data-delay="0">
                                    <img src="{{ asset("frontend-assets/images/blog_1.jpg") }}" alt="blog" class="img-fluid w-100" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_blog">
                        <div class="single_blog_text">
                            <ul class="d-flex flex-wrap">
                                <li>User Experience</li>
                                <li>September 10, 2023</li>
                            </ul>
                            <a class="title" href="{{ route("blog.detail") }}">Creative advertising our life became noise.</a>
                        </div>
                        <div class="single_blog_img">
                            <a href="{{ route("blog.detail") }}" data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                                class="img d-block">
                                <div data-animation="img-blur" data-delay="0">
                                    <img src="{{ asset("frontend-assets/images/blog_2.jpg") }}" alt="blog" class="img-fluid w-100" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_blog last_blog">
                        <div class="single_blog_text">
                            <ul class="d-flex flex-wrap">
                                <li>User Experience</li>
                                <li>September 10, 2023</li>
                            </ul>
                            <a class="title" href="{{ route("blog.detail") }}">Creative advertising our life became noise.</a>
                        </div>
                        <div class="single_blog_img">
                            <a href="{{ route("blog.detail") }}" data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                                class="img d-block">
                                <div data-animation="img-blur" data-delay="0">
                                    <img src="{{ asset("frontend-assets/images/blog_3.jpg") }}" alt="blog" class="img-fluid w-100" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf__pagination mt_65">
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
            BLOG GRID END
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
