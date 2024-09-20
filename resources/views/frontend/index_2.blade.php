@extends('frontend.layouts.main')

@section('style')
@endsection



@section('content')
    <!--===============================
        BANNER 2 START
    ===============================-->
    <section class="banner_2" id="banner_2">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 m-auto">
            <div class="banner_text_2">
              <h1 class="banner_title">We Are Digital <span>Agency.</span></h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit eros
                nullam inceptos placerat aliquet taciti conubia himenaeos
                elementum mattis per velit eleifend ridiculus.
              </p>
            </div>
          </div>
        </div>
        <div class="row mt_20">
          <div class="col-xl-4 col-md-4">
            <div class="banner_2_img_1">
              <div data-animation="img-blur" data-scroll="0">
                <img
                  src="{{ asset("frontend-assets/images/banner_2_img_1.jpg") }}"
                  alt="banner"
                  class="img-fluid w-100"
                />
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4">
            <div class="banner_2_img_2">
              <div data-animation="img-blur" data-scroll="0">
                <img
                  src="{{ asset("frontend-assets/images/banner_2_img_2.jpg") }}"
                  alt="banner"
                  class="img-fluid w-100"
                />
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4">
            <div class="banner_2_img_3">
              <div data-animation="img-blur" data-scroll="0">
                <img
                  src="{{ asset("frontend-assets/images/banner_2_img_3.jpg") }}"
                  alt="banner"
                  class="img-fluid w-100"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <ul class="banner_2_button">
        <li>
          <a href="#banner_2"><i class="fa-regular fa-arrow-up"></i></a>
        </li>
        <li>
          <a href="#counter_2"><i class="fa-regular fa-arrow-down"></i></a>
        </li>
      </ul>
    </section>
    <!--===============================
        BANNER 2 END
    ===============================-->

    <!--============================
        BRAND 2 START
    =============================-->
    <section class="tf__brand tf__brand_2 pt_110 xs_pt_70 pb_100 xs_pb_60">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p>We have collaborated with some of the world's largest brands</p>
          </div>
          <div class="col-12">
            <div class="marquee_animi">
              <ul
                class="tf__brand_logo_area d-flex flex-wrap justify-content-between"
              >
                <li data-animation data-delay="1.75">
                  <a href="#"
                    ><img
                      src="{{ asset("frontend-assets/images/brand_7.png") }}"
                      alt="brand"
                      class="img-fluid w-100"
                  /></a>
                </li>
                <li data-animation>
                  <a href="#"
                    ><img
                      src="{{ asset("frontend-assets/images/brand_8.png") }}"
                      alt="brand"
                      class="img-fluid w-100"
                  /></a>
                </li>
                <li data-animation data-delay=".75">
                  <a href="#"
                    ><img
                      src="{{ asset("frontend-assets/images/brand_9.png") }}"
                      alt="brand"
                      class="img-fluid w-100"
                  /></a>
                </li>
                <li data-animation data-delay="1">
                  <a href="#"
                    ><img
                      src="{{ asset("frontend-assets/images/brand_10.png") }}"
                      alt="brand"
                      class="img-fluid w-100"
                  /></a>
                </li>
                <li data-animation data-delay="1.25">
                  <a href="#"
                    ><img
                      src="{{ asset("frontend-assets/images/brand_11.png") }}"
                      alt="brand"
                      class="img-fluid w-100"
                  /></a>
                </li>
                <li data-animation data-delay="1.50">
                  <a href="#"
                    ><img
                      src="{{ asset("frontend-assets/images/brand_12.png") }}"
                      alt="brand"
                      class="img-fluid w-100"
                  /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        BRAND 2 END
    =============================-->

    <!--============================
        SERVICE 2 START
    =============================-->
    <section class="tf__service_2 mt_60">
      <div class="row justify-content-between">
        <div class="col-xl-5">
          <div class="tf__service_2_img">
            <div data-animation="img-blur">
              <img
                src="{{ asset("frontend-assets/images/service_2_img.jpg") }}"
                alt="service"
                class="img-fluid w-100"
              />
            </div>
          </div>
        </div>
        <div class="col-xl-7">
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
    </section>
    <!--============================
        SERVICE 2 END
    =============================-->

    <!--===============================
        COUNTER 2 START
    ===============================-->
    <section class="counter_2 pt_110 xs_pt_60 pb_70 xs_pb_20" id="counter_2">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-6 col-md-8 col-lg-6">
            <div class="counter_2_heading">
              <div class="section_heading section_heading_2">
                <h2 data-text-animation data-split="char" data-duration="1">
                  We Providing Digital Services in USA.
                </h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipiscing elit eros
                  nullam inceptos placerat aliquet taciti conubia himenaeos
                  elementum mattis per velit eleifend ridiculus.
                </p>
                <a
                  class="circle_btn circle_btn_2 learn_more_2"
                  href="{{ route("about") }}"
                  ><i class="fx-icon-long-next-arrow"></i> Learn More</a
                >
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6">
            <div class="counter_2_count_area">
              <div class="row">
                <div
                  class="col-xl-6 col-sm-6"
                  data-animation="fade-bottom"
                  data-duration="1.75"
                >
                  <div class="counter_item counter_item_icon">
                    <h2
                      data-text-animation
                      data-split="word"
                      data-duration="1"
                      class="count"
                    >
                      10
                    </h2>
                    <p>Project completed</p>
                  </div>
                </div>
                <div
                  class="col-xl-6 col-sm-6"
                  data-animation="fade-bottom"
                  data-duration="1.75"
                >
                  <div class="counter_item">
                    <h2
                      data-text-animation
                      data-split="word"
                      data-duration="1"
                      class="count"
                    >
                      180
                    </h2>
                    <p>Skilled Professional</p>
                  </div>
                </div>
                <div
                  class="col-xl-6 col-sm-6"
                  data-animation="fade-bottom"
                  data-duration="1.75"
                  data-delay="1"
                >
                  <div class="counter_item">
                    <h2
                      data-text-animation
                      data-split="word"
                      data-duration="1"
                      class="count"
                    >
                      500
                    </h2>
                    <p>Visited Conference</p>
                  </div>
                </div>
                <div
                  class="col-xl-6 col-sm-6"
                  data-animation="fade-bottom"
                  data-duration="1.75"
                  data-delay="1"
                >
                  <div class="counter_item counter_item_icon">
                    <h2
                      data-text-animation
                      data-split="word"
                      data-duration="1"
                      class="count"
                    >
                      30
                    </h2>
                    <p>Happy Clients</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--===============================
        COUNTER 2 END
    ===============================-->

    <!--===============================
        FEATURED WORK START
    ===============================-->
    <section class="tf__featured_work pt_90 xs_pt_40">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-md-8">
            <div class="section_heading section_heading_2">
              <h2 data-text-animation data-split="char" data-duration="1">
                We elevate your brand's Daring dedication.
              </h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit eros
                nullam inceptos placerat aliquet taciti conubia himenaeos
                elementum mattis per velit eleifend ridiculus time of human
                beign.
              </p>
            </div>
          </div>
        </div>
        <a class="circle_btn circle_btn_2 learn_more_2" href="{{ route("portfolio") }}"
          ><i class="fx-icon-long-next-arrow"></i> Learn More</a
        >
        <div class="row justify-content-between">
          <div class="col-xl-5 col-md-6">
            <div class="tf__featured_work_item mb-5">
              <a
                href="{{ route("services.detail") }}"
                class="tf__featured_work_item_img cursor-arrow"
              >
                <div data-animation="img-blur">
                  <img
                    src="{{ asset("frontend-assets/images/futured_work_img_1.jpg") }}"
                    alt="futured"
                    class="img-fluid w-100"
                  />
                </div>
              </a>
              <h3>Brand Design</h3>
              <p>Website Design / Brand</p>
            </div>
          </div>
          <div class="col-xl-5 col-md-6">
            <div class="tf__featured_work_item">
              <a
                href="{{ route("services.detail") }}"
                class="tf__featured_work_item_img cursor-arrow"
              >
                <div data-animation="img-blur">
                  <img
                    src="{{ asset("frontend-assets/images/futured_work_img_2.jpg") }}"
                    alt="futured"
                    class="img-fluid w-100"
                  />
                </div>
              </a>
              <h3>Website Design 2024</h3>
              <p>Website Design / Brand</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--===============================
        FEATURED WORK END
    ===============================-->

    <!--============================
        BRAND 3 START
    =============================-->
    <section class="tf__brand_3 mt_170 xs_mt_100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="marquee_animi">
              <ul>
                <li>Impaired With Creativity</li>
                <li>Design & Development Craft</li>
                <li>Crafting Emotional</li>
                <li>Product Design</li>
                <li>laravel web development</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        BRAND 3 END
    =============================-->

    <!--============================
        TEAM START
    =============================-->
    <section class="tf__team mt_170 xs_mt_70">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 col-md-8">
            <div class="section_heading section_heading_2">
              <h2 data-text-animation data-split="char" data-duration="1">
                Let’s Check our creative team.
              </h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit eros
                nullam inceptos placerat aliquet taciti conubia himenaeos
                elementum mattis per velit eleifend ridiculus.
              </p>
            </div>
          </div>
        </div>
        <a class="circle_btn circle_btn_2 learn_more_2" href="{{ route("team") }}"
          ><i class="fx-icon-long-next-arrow"></i> See All Team <br />
          Member</a
        >
        <div class="row">
          <div class="col-xl-4 col-md-6 col-lg-4" data-animation="fade-left">
            <div class="single_team">
              <a href="#" class="single_team_img cursor-arrow">
                <img
                  src="{{ asset("frontend-assets/images/team_1.jpg") }}"
                  alt="team"
                  class="img-fluid w-100"
                />
              </a>
              <h3>Wade Warren</h3>
              <p>UI/UX Designer</p>
            </div>
          </div>
          <div
            class="col-xl-4 col-md-6 col-lg-4"
            data-animation="fade-left"
            data-delay=".75"
          >
            <div class="single_team">
              <a href="#" class="single_team_img cursor-arrow">
                <img
                  src="{{ asset("frontend-assets/images/team_2.jpg") }}"
                  alt="team"
                  class="img-fluid w-100"
                />
              </a>
              <h3>Willy Tommy</h3>
              <p>Web Developer</p>
            </div>
          </div>
          <div
            class="col-xl-4 col-md-6 col-lg-4"
            data-animation="fade-left"
            data-delay="1"
          >
            <div class="single_team">
              <a href="#" class="single_team_img cursor-arrow">
                <img
                  src="{{ asset("frontend-assets/images/team_3.jpg") }}"
                  alt="team"
                  class="img-fluid w-100"
                />
              </a>
              <h3>Jacob Wilson</h3>
              <p>Digital Marketer</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        TEAM END
    =============================-->

    <!--============================
        HOME 2 CONTACT START
    =============================-->
    <section class="home_2_contact mt_60 pt_105 xs_pt_70 pb_110 xs_pb_70">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-6">
            <div class="section_heading section_heading_2">
              <h2 data-text-animation data-split="char" data-duration="1">
                Stay informed on all things Fxotary👍
              </h2>
              <p></p>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="home_2_contact_text">
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit viverra
                purus senectus sapien habitant rutrum himena curabitur
                posuerecongue ac non eu odio
              </p>
            </div>
          </div>
        </div>
        <form class="tf__contact_form">
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
                <textarea
                  rows="4"
                  placeholder="e.g. you need any help"
                ></textarea>
              </div>
              <button
                class="circle_btn circle_btn_2 learn_more_2"
                type="submit"
              >
                <i class="fx-icon-long-next-arrow"></i>
                Send Message
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!--============================
        HOME 2 CONTACT END
    =============================-->

    <!--===============================
        BLOG 2 START
    ===============================-->
    <section class="blog blog_2 pt_120 xs_pt_80">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-4">
            <div class="section_heading">
              <h2 data-text-animation data-split="char" data-duration="1">
                Latest News & Updates.
              </h2>
            </div>
          </div>
          <div class="col-xl-7">
            <div class="blog_right_text">
              <p>
                Lorem ipsum dolor sit amet consectetur inceptos placerat aliquet
                taciti conubia.
              </p>
              <a
                class="circle_btn circle_btn_2 learn_more_2"
                href="{{ route("blog.list") }}"
                ><i class="fx-icon-long-next-arrow"></i> View All Our <br />
                News</a
              >
            </div>
          </div>
        </div>
        <div class="row mt_20">
          <div class="col-lg-4 col-md-6" data-animation="fade-left">
            <div class="single_blog first_blog">
              <div class="single_blog_text">
                <a class="title" href="{{ route("blog.detail") }}"
                  >Creative advertising our life became noise.</a
                >
              </div>
              <div class="single_blog_img">
                <ul class="d-flex flex-wrap">
                  <li>
                    <i class="far fa-calendar-check"></i> September 25, 2022
                  </li>
                  <li><i class="far fa-comment-dots"></i> No Comments</li>
                </ul>
                <a
                  href="{{ route("blog.detail") }}"
                  data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                  class="img"
                >
                  <img
                    src="{{ asset("frontend-assets/images/blog_1.jpg") }}"
                    alt="blog"
                    class="img-fluid w-100"
                  />
                </a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6"
            data-animation="fade-left"
            data-delay=".75"
          >
            <div class="single_blog">
              <div class="single_blog_text">
                <a class="title" href="{{ route("blog.detail") }}"
                  >Creative advertising our life became noise.</a
                >
              </div>
              <div class="single_blog_img">
                <ul class="d-flex flex-wrap">
                  <li>
                    <i class="far fa-calendar-check"></i> September 25, 2022
                  </li>
                  <li><i class="far fa-comment-dots"></i> No Comments</li>
                </ul>
                <a
                  href="{{ route("blog.detail") }}"
                  data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                  class="img"
                >
                  <img
                    src="{{ asset("frontend-assets/images/blog_2.jpg") }}"
                    alt="blog"
                    class="img-fluid w-100"
                  />
                </a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6"
            data-animation="fade-left"
            data-delay=".75"
          >
            <div class="single_blog last_blog">
              <div class="single_blog_text">
                <a class="title" href="{{ route("blog.detail") }}"
                  >Creative advertising our life became noise.</a
                >
              </div>
              <div class="single_blog_img">
                <ul class="d-flex flex-wrap">
                  <li>
                    <i class="far fa-calendar-check"></i> September 25, 2022
                  </li>
                  <li><i class="far fa-comment-dots"></i> No Comments</li>
                </ul>
                <a
                  href="{{ route("blog.detail") }}"
                  data-cursor='<i class="fx-icon-long-next-arrow"></i>'
                  class="img"
                >
                  <img
                    src="{{ asset("frontend-assets/images/blog_3.jpg") }}"
                    alt="blog"
                    class="img-fluid w-100"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--===============================
        BLOG 2 END
    ===============================-->

    <!--===============================
        QUESTION START
    ===============================-->
    <section
      class="tf__question pt_100 xs_pt_70 pb_100 xs_pb_70"
      data-animation="fade-bottom"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <a
              href="{{ route("contact") }}"
              data-cursor='<i class="fa-light fa-envelope"></i>'
              class="tf__question_text"
            >
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
