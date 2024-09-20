@extends('frontend.layouts.main')

@section('style')
@endsection



@section('content')
    <!--===============================
            BLOG DETAILS START
        ===============================-->
    <section class="tf__blog_details mt_190 xs_mt_150">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="tf__blog_details_header">
                        <h5>DIGITAL MARKETING / 25 Jan 2023</h5>
                        <h1 class="banner_title">
                            Extraordinary claims necessitate a network of wormhole colonies.
                        </h1>
                        <ul>
                            <li>
                                <div class="img">
                                    <img src="{{ asset("frontend-assets/images/details_bloger.png") }}" alt="bloger" class="img-fluid w-100" />
                                </div>
                            </li>
                            <li>
                                <h4>Written by</h4>
                                <p>Tomas Markt</p>
                            </li>
                            <li>
                                <h4>Viewed</h4>
                                <p>3 min read</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="tf__blog_details_img">
                        <div data-animation="img-blur" data-scroll="0">
                            <img src="{{ asset("frontend-assets/images/futured_work_img_9.jpg") }}" alt="blog details" class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xxl-7 col-lg-8">
                    <div class="tf__blog_details_text">
                        <p>
                            Why I say old chap that is, spiffing jolly good a load of old
                            tosh spend a penny tosser arse over tit, excuse my French owt to
                            do with me up the kyver matie boy at public school. Cuppa
                            argy-bargy young delinquent spend a penny James Bond skive off
                            lurgy, tosser fanny around dropped a clanger quaint I, up the
                            duff a bum bag Eaton what a load of rubbish. Matie boy pardon me
                            blow off easy
                        </p>

                        <p>
                            Cras mush pardon you knees up he lost his bottle it’s all gone
                            to pot faff about porkies arse, barney argy-bargy cracking goal
                            loo cheers spend a penny bugger all mate in my flat, hunky-dory
                            well get stuffed mate David morish bender lavatory. What a load
                            of rubbish car boot bite your arm off blatant pardon you, old
                            tosser get stuffed mate tomfoolery mush
                        </p>
                        <div class="details_quot_text">
                            <p>
                                Elizabeth ummm I’m telling bodge spend a penny say wellies say
                                James Bond, bubble and squeak a such a fibber optical service
                                your business you mug quaint cack what.!
                            </p>
                        </div>
                        <p>
                            Bloke cracking goal the full monty get stuffed mate posh wellies
                            fantastic knackered tickety-boo Harry porkies, mush excuse my
                            French bender down the pub Oxford bum bag gutted mate car boot
                            pukka loo it’s your round, cor blimey guvnor is on your bike
                            mate cup of char some dodgy chav blag happy days nancy boy
                            hotpot.
                        </p>
                        <p>
                            Cras chinwag brown bread Eaton cracking goal so I said a load of
                            old tosh baking cakes, geeza arse it’s your round grub sloshed
                            burke, my good sir chancer he legged it he lost his bottle pear
                            shaped bugger all mate. Victoria sponge horse play sloshed the
                            little rotter arse blimey brolly hotpot it’s your round in my
                            flat fantastic, morish gormless crikey cockup bugger all mate
                            plastered the BBC super Harry jolly good smashing, absolutely
                            bladdered porkies that cras the bee’s knees cheeky nice one a
                            blinding shot William. Brolly bevvy James Bond is porkies
                            Elizabeth
                        </p>
                    </div>
                    <form class="tf__contact_form blog_contact_form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="tf__contact_form_imput">
                                    <label>First Name:</label>
                                    <input type="text" placeholder="e.g. Willy" />
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tf__contact_form_imput">
                                    <label>Email:</label>
                                    <input type="email" placeholder="e.g. youremail@gmail.com" />
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tf__contact_form_imput">
                                    <label>Phone:</label>
                                    <input type="text" placeholder="e.g. +8801" />
                                </div>
                            </div>
                            <div class="col-xl-6">
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
                <div class="col-xxl-4 col-lg-4">
                    <div class="tf__details_sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_search">
                            <form>
                                <input type="text" placeholder="Search" />
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="tf__sidebar_post mt_35">
                            <h3>Recent Posts</h3>
                            <ul>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/sidebar_post_img_1.jpg") }}" alt="post" class="img-fluid w-100" />
                                    </div>
                                    <div class="text">
                                        <a href="{{ route("blog.detail") }}">Doloremque velit sapien</a>
                                        <p>January 14, 2021</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/sidebar_post_img_2.jpg") }}" alt="post" class="img-fluid w-100" />
                                    </div>
                                    <div class="text">
                                        <a href="{{ route("blog.detail") }}">Aliquam mollit nemo taci</a>
                                        <p>January 14, 2021</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/sidebar_post_img_3.jpg") }}" alt="post" class="img-fluid w-100" />
                                    </div>
                                    <div class="text">
                                        <a href="{{ route("blog.detail") }}">Interdum luctus accu sam</a>
                                        <p>January 14, 2021</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/sidebar_post_img_4.jpg") }}" alt="post" class="img-fluid w-100" />
                                    </div>
                                    <div class="text">
                                        <a href="{{ route("blog.detail") }}">Why I say old chat that</a>
                                        <p>January 14, 2021</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset("frontend-assets/images/sidebar_post_img_5.jpg") }}" alt="post" class="img-fluid w-100" />
                                    </div>
                                    <div class="text">
                                        <a href="{{ route("blog.detail") }}">Bloke cracking goal the</a>
                                        <p>January 14, 2021</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tf__sidebar_archive mt_65">
                            <h3>Archive</h3>
                            <p>January 2021</p>
                            <p>February 2021</p>
                        </div>

                        <div class="tf__sidebar_category mt_65">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Food for thought</a></li>
                                <li><a href="#">Gaming</a></li>
                                <li><a href="#">Quote</a></li>
                                <li><a href="#">Video post</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============================
            BLOG DETAILS END
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
