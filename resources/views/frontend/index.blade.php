@extends('frontend.layouts.main')

@section('style')
@endsection



@section('content')
    <!--===============================
                        BANNER START
                    ===============================-->
    <section class="banner" style="background: url(images/banner_bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_text">
                        <h4>We are Digital Agency</h4>
                        <h1 class="banner_title">
                            Helping the Brands to <span>Grow <b>Business.</b></span>
                        </h1>
                    </div>
                    <div class="banner_img">
                        <div data-animation="img-blur" data-scroll="0">
                            <img src="{{ asset('frontend-assets/images/banner_img_1.png') }}" alt="banner"
                                class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="d-flex flex-wrap">
            <li><span>Follow Us</span></li>
            <li><a href="#">Fb.</a></li>
            <li><a href="#">Be.</a></li>
            <li><a href="#">Yt.</a></li>
        </ul>
    </section>
    <!--===============================
                        BANNER END
                    ===============================-->

    <!--===============================
                        ABOUT START
                    ===============================-->
    <section class="about_us pt_120 xs_pt_70 pb_120 xs_pb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <div class="about_text">
                        <div class="section_heading">
                            <h5 data-text-animation>ABOUT COMPANY</h5>
                            <h2 data-text-animation data-split="word" data-duration="1">
                                We are a top Digital agency in the world.
                            </h2>
                        </div>
                        <a class="circle_btn" href="{{ route("about") }}">Learn More <i class="fx-icon-next-arrow"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="about_img_1">
                        <div class="img">
                            <div data-animation="img-blur">
                                <img src="{{ asset('frontend-assets/images/about_img_1.jpg') }}" alt="about"
                                    class="img-fluid w-100" />
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                            purus senectus sapien habitant rutrum himenaeos curabitur
                            posuere congue ac non eu odio tempor placerat id.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="about_img_2">
                        <div data-animation="img-blur">
                            <img src="{{ asset('frontend-assets/images/about_img_2.jpg') }}" alt="about"
                                class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
                        ABOUT END
                    ===============================-->

    <!--===============================
                        WHAT WE DO START
                    ===============================-->
    <section class="what_we_do pt_120 xs_pt_70 pb_120 xs_pb_70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-md-7">
                    <div class="what_we_do_text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit eros
                            nullam inceptos placerat aliquet taciti conubia himenaeos
                            elementum mattis per velit eleifend ridiculus.
                        </p>
                        <a class="view_btn" href="#">View All Services <i class="fx-icon-next-arrow"></i></a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-5">
                    <div class="section_heading">
                        <h5 data-text-animation>WHAT WE DO</h5>
                        <h2 data-text-animation data-split="word">Expertise Field.</h2>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li data-animation class="image-view"
                            data-img-cursor="<img src='{{ asset('frontend-assets/images/what_we_do_img.jpg') }}' />">
                            <div class="icon">
                                <img src="{{ asset('frontend-assets/icons/ui-ux.svg') }}" alt="about"
                                    class="img-fluid w-100 svg" />
                            </div>
                            <div class="text">
                                <h3>UI/UX Design</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit etiam
                                    accumsan, tellus viverra aliquet donec nisi vulputate erat
                                    Cursus ornare nullam scelerisque sollicitudin nisi odio
                                    sociosqu in euismod
                                </p>
                            </div>
                            <div class="img">
                                <img src="{{ asset('frontend-assets/images/what_we_do_img.jpg') }}" alt="what we do"
                                    class="img-fluid w-100" />
                            </div>
                            <a class="circle_btn" href="#">details</a>
                        </li>
                        <li data-animation class="image-view" data-img-cursor="<img src='{{ asset("frontend-assets/images/what_we_do_img.jpg")}}' />">
                            <div class="icon">
                                <img src="{{ asset("frontend-assets/icons/web-programming.svg")}}" alt="about" class="img-fluid w-100 svg" />
                            </div>
                            <div class="text">
                                <h3>Web Development</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit etiam
                                    accumsan, tellus viverra aliquet donec nisi vulputate erat
                                    Cursus ornare nullam scelerisque sollicitudin nisi odio
                                    sociosqu in euismod
                                </p>
                            </div>
                        </li>
                        <li data-animation class="image-view" data-img-cursor="<img src='{{ asset("frontend-assets/images/what_we_do_img.jpg")}}' />">
                            <div class="icon">
                                <img src="{{ asset("frontend-assets/icons/megaphone.svg")}}" alt="about" class="img-fluid w-100 svg" />
                            </div>
                            <div class="text">
                                <h3>Digital Marketing</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit etiam
                                    accumsan, tellus viverra aliquet donec nisi vulputate erat
                                    Cursus ornare nullam scelerisque sollicitudin nisi odio
                                    sociosqu in euismod
                                </p>
                            </div>
                            <div class="img">
                                <img src="{{ asset("frontend-assets/images/what_we_do_img.jpg")}}" alt="what we do" class="img-fluid w-100" />
                            </div>
                            <a class="circle_btn" href="#">details</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
                        WHAT WE DO END
                    ===============================-->

    <!--===============================
                        LATEST PROJECT START
                    ===============================-->
    <section class="latest_project pt_120 xs_pt_70 pb_120 xs_pb_70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-md-6">
                    <div class="latest_project_text">
                        <div class="section_heading">
                            <h5>LATEST PROJECTS</h5>
                            <h2 data-text-animation data-split="char">
                                Here’s our latest projects
                            </h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit eros
                            nullam inceptos placerat aliquet taciti conubia himenaeos
                            elementum mattis per velit eleifend ridiculus.
                        </p>
                    </div>
                    <a href="{{ route("portfolio.detail") }}" class="latest_project_img d-block cursor-arrow c-pointer">
                        <div data-animation="img-blur">
                            <img src="{{ asset("frontend-assets/images/project_img_1.jpg")}}" alt="projext" class="img-fluid w-100" />
                        </div>
                        <div class="text d-flex flex-column">
                            <h3>Mark Wide Website</h3>
                            <h3>Design Project</h3>
                        </div>
                    </a>
                </div>
                <div class="col-xl-5 col-md-6">
                    <a href="{{ route("portfolio.detail") }}"
                        class="latest_project_img d-block cursor-arrow latest_project_img_2 c-pointer">
                        <div data-animation="img-blur">
                            <img src="{{ asset("frontend-assets/images/project_img_2.jpg")}}" alt="projext" class="img-fluid w-100" />
                        </div>
                        <div class="text d-flex flex-column">
                            <h3>Mark Wide Website</h3>
                            <h3>Design Project</h3>
                        </div>
                    </a>
                    <h4>Want to See More Projects</h4>
                </div>
            </div>
        </div>
        <div class="row mt_175 marquee_section">
            <div class="col-12">
                <div class="marquee-container">
                    <div class="marquee_animi">
                        <ul class="project_slider d-flex flex-wrap">
                            <li>
                                <a href="#">
                                    <p>UI/UX Design</p>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                        <span>03</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Digital Marketing</p>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                        <span>05</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Web Development</p>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                        <span>07</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Web Design</p>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                        <span>14</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Graphic Design</p>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                        <span>42</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 mt_30">
                <div class="marquee_animi2">
                    <ul class="project_slider d-flex flex-wrap">
                        <li>
                            <a href="#">
                                <p>UI/UX Design</p>
                                <div class="img">
                                    <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                    <span>03</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Digital Marketing</p>
                                <div class="img">
                                    <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                    <span>05</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Web Development</p>
                                <div class="img">
                                    <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                    <span>07</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Web Design</p>
                                <div class="img">
                                    <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                    <span>14</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Graphic Design</p>
                                <div class="img">
                                    <img src="{{ asset("frontend-assets/images/project_iten_img.jpg")}}" alt="project" class="img-fluid" />
                                    <span>42</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
                        LATEST PROJECT END
                    ===============================-->

    <!--===============================
                        COUNTER START
                    ===============================-->
    <section class="counter pt_120 xs_pt_70 pb_140 xs_pb_90">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-md-6">
                    <div class="counter_img">
                        <img src="{{ asset("frontend-assets/images/counter_img.png")}}" alt="counter" class="img-fluid w-100" />
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6" data-animation="fade-right">
                            <div class="counter_item counter_item_icon">
                                <h2 data-text-animation data-split="word" class="count">
                                    10
                                </h2>
                                <p>Project completed</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6" data-animation="fade-right" data-delay=".5">
                            <div class="counter_item">
                                <h2 data-text-animation data-split="word" class="count">
                                    180
                                </h2>
                                <p>Skilled Professional</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6" data-animation="fade-right" data-delay=".75">
                            <div class="counter_item">
                                <h2 data-text-animation data-split="word" class="count">
                                    500
                                </h2>
                                <p>Visited Conference</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6" data-animation="fade-right" data-delay="1">
                            <div class="counter_item counter_item_icon">
                                <h2 data-text-animation data-split="word" class="count">
                                    30
                                </h2>
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
                        ACHIVEMENT START
                    ===============================-->
    <section class="achivement pt_100 xs_pt_50 pb_120 xs_pb_70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="section_heading">
                        <h5>ACHIVEMENTS</h5>
                        <h2 data-text-animation data-split="word">
                            Company awards & achievements
                        </h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="achivement_right_text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                            purus senectus sapien habitant rutrum himenaeos curabitur
                            posuere congue ac non eu odio tempor placerat id.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt_50">
                <div class="col-xxl-3 col-md-6 col-lg-4 col-xl-4">
                    <div class="achivement_img">
                        <div class="img_1">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/achivement_img_1.jpg")}}" alt="achivement" class="img-fluid w-100" />
                            </div>
                        </div>
                        <div class="img_2">
                            <div data-animation="img-blur">
                                <img src="{{ asset("frontend-assets/images/achivement_img_2.jpg")}}" alt="achivement" class="img-fluid w-100" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-lg-8 col-xl-8">
                    <div class="achivement_list">
                        <ul>
                            <li data-animation>
                                <div class="icon">
                                    <img src="{{ asset("frontend-assets/images/achivement_icon_1.png")}}" alt="icon" class="img-fluid w-100" />
                                </div>
                                <div class="text">
                                    <h4>Awwwards Interior excellence.</h4>
                                    <span>2015</span>
                                    <a href="#" class="achivement_link">
                                        <i class="fx-icon-long-next-arrow"></i>
                                    </a>
                                </div>
                            </li>
                            <li data-animation>
                                <div class="icon">
                                    <img src="{{ asset("frontend-assets/images/achivement_icon_2.png")}}" alt="icon" class="img-fluid w-100" />
                                </div>
                                <div class="text">
                                    <h4>Best Site of the Year Awards.</h4>
                                    <span>2018</span>
                                    <a href="#" class="achivement_link">
                                        <i class="fx-icon-long-next-arrow"></i>
                                    </a>
                                </div>
                            </li>
                            <li data-animation>
                                <div class="icon">
                                    <img src="{{ asset("frontend-assets/images/achivement_icon_3.png")}}" alt="icon" class="img-fluid w-100" />
                                </div>
                                <div class="text">
                                    <h4>Template of the seasons in this month.</h4>
                                    <span>2020</span>
                                    <a href="#" class="achivement_link">
                                        <i class="fx-icon-long-next-arrow"></i>
                                    </a>
                                </div>
                            </li>
                            <li data-animation>
                                <div class="icon">
                                    <img src="{{ asset("frontend-assets/images/achivement_icon_4.png")}}" alt="icon" class="img-fluid w-100" />
                                </div>
                                <div class="text">
                                    <h4>Best Selling of this week & month.</h4>
                                    <span>2023</span>
                                    <a href="#" class="achivement_link">
                                        <i class="fx-icon-long-next-arrow"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
                        ACHIVEMENT END
                    ===============================-->

    <!--===============================
                        TESTIMONIAL START
                    ===============================-->
    <section class="testimonial pt_120">
        <div class="container">
            <div class="row testi_slider">
                <div class="col-xl-12">
                    <div class="testimonial_item">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="testimonial_text">
                                    <p class="description">
                                        Nam ultricies sed leo eget vehicula. Sed varius non magna
                                        quis mattis. Integer finibus, nisdl at tempus semper, me
                                        tufhs lectus auctor leo.
                                    </p>
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                    <h4>Wade Warren <span>UI/UX Designer</span></h4>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="testimonial_img">
                                    <img src="{{ asset("frontend-assets/images/testimonial_img.png")}}" alt="testimonial" class="img-fluid w-100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="testimonial_item">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="testimonial_text">
                                    <p class="description">
                                        Nam ultricies sed leo eget vehicula. Sed varius non magna
                                        quis mattis. Integer finibus, nisdl at tempus semper, me
                                        tufhs lectus auctor leo.
                                    </p>
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                    <h4>Wade Warren <span>UI/UX Designer</span></h4>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="testimonial_img">
                                    <img src="{{ asset("frontend-assets/images/testimonial_img.png")}}" alt="testimonial" class="img-fluid w-100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
                        TESTIMONIAL END
                    ===============================-->

    <!--===============================
                        BLOG START
                    ===============================-->
    <section class="blog pt_120 xs_pt_80">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-8">
                    <div class="section_heading">
                        <h5>LATEST NEWS</h5>
                        <h2 data-text-animation data-split="word">
                            Latest News & Updates.
                        </h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="blog_right_text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit lobortis
                            sagittis, velit nec vehicula netus elementum interdum ultricies
                            hendrerit tristique.
                        </p>
                        <a class="circle_btn" href="{{ route("blog.grid") }}">View All <br />
                            Our News <i class="fx-icon-next-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt_20">
                <div class="col-lg-4 col-md-6" data-animation="fade-left">
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
                                class="img w-100">
                                <div data-animation="img-blur" class="w-100">
                                    <img src="{{ asset("frontend-assets/images/blog_1.jpg")}}" alt="blog" class="img-fluid w-100" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-animation="fade-left" data-delay=".75">
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
                                class="img w-100">
                                <div data-animation="img-blur" class="w-100">
                                    <img src="{{ asset("frontend-assets/images/blog_2.jpg")}}" alt="blog" class="img-fluid w-100" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-animation="fade-left" data-delay="1">
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
                                class="img w-100">
                                <div data-animation="img-blur" class="w-100">
                                    <img src="{{ asset("frontend-assets/images/blog_3.jpg")}}" alt="blog" class="img-fluid w-100" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
                        BLOG END
                    ===============================-->

    <!--============================
                        BRAND START
                    =============================-->
    <section class="tf__brand pt_100 xs_pt_60 pb_100 xs_pb_60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="marquee_animi">
                        <ul class="tf__brand_logo_area d-flex flex-wrap justify-content-between">
                            <li>
                                <a href="#"><img src="{{ asset("frontend-assets/images/brand_1.jpg")}}" alt="brand"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset("frontend-assets/images/brand_5.jpg")}}" alt="brand"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset("frontend-assets/images/brand_2.jpg")}}" alt="brand"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset("frontend-assets/images/brand_3.jpg")}}" alt="brand"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset("frontend-assets/images/brand_6.jpg")}}" alt="brand"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset("frontend-assets/images/brand_4.jpg")}}" alt="brand"
                                        class="img-fluid w-100" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                        BRAND END
                    =============================-->
@endsection



@section('customjs')
@endsection
