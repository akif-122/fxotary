<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi" />
    <title>Fxotary - Digital Agency HTML Template</title>
    <link rel="icon" type="image/png" href="{{ asset("frontend-assets/images/favicon.png")}}" />
    <link rel="icon" type="image/png" href="{{ asset("frontend-assets/images/favicon.png")}}" />
    <link rel="stylesheet" href="{{ asset("frontend-assets/css/fxotary-icon.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend-assets/css/font-awesome-pro.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend-assets/css/bootstrap.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend-assets/css/slick.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend-assets/css/spacing.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend-assets/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend-assets/css/responsive.css") }}" />
  </head>

  <body>
    <!--================================
        PRELOADER START
    =================================-->
    <div class="preloader">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>
    <h5 class="preloader-text">Fxotary</h5>
    </div>
    <!--================================
        PRELOADER END
    =================================-->

    <!--===============================
        MAIN MENU START
    ===============================-->
    <header>
        <div class="main_menu navbar d-none d-xl-flex">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">
                    <img src="{{ asset("frontend-assets/images/logo.png")}}" alt="Fxotary" class="img-fluid w-100" />
                </a>
                <div class="main-menu">
                    <nav class="navbar-nav m-auto" id="navbarNav">
                        <ul>
                            <li class="dropdown-nav">
                                <a href="#" class="text_hover_animaiton">Home</a>
                                <ul class="submenu">
                                    <li><a href="{{ route("home") }}">Home 1</a></li>
                                    <li><a href="{{ route("home2") }}">Home 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route("about") }}" class="text_hover_animaiton">About</a>
                            </li>
                            <li class="dropdown-nav">
                                <a href="#" class="text_hover_animaiton">Pages</a>
                                <ul class="submenu">
                                    <li class="dropdown-nav">
                                        <a href="{{ route("services") }}">Services</a>

                                        <ul class="submenu">
                                            <li><a href="{{ route("services") }}">Service List</a></li>
                                            <li>
                                                <a href="{{ route("services.detail") }}">Service Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-nav">
                                        <a href="#">Portfolio</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route("portfolio") }}">Portfolio List</a></li>
                                            <li><a href="{{ route("portfolio.grid") }}">Portfolio Grid</a></li>
                                            <li>
                                                <a href="{{ route("portfolio.detail") }}">Portfolio Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route("team") }}">Team List</a></li>
                                    <li><a href="#">404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-nav">
                                <a href="#" class="text_hover_animaiton">Blog</a>
                                <ul class="submenu">
                                    <li><a href="{{ route("blog.grid") }}">Blog Grid</a></li>
                                    <li><a href="{{ route("blog.list") }}">Blog List</a></li>
                                    <li><a href="{{ route("blog.detail") }}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route("contact") }}" class="text_hover_animaiton">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="right_menu">
                    <a href="#" class="search_icon"><i class="fa-sharp fa-regular fa-magnifying-glass"></i></a>
                    <a href="{{ route("contact") }}" class="common_btn">Request Quote</a>
                </div>
            </div>
        </div>
        <div class="mobile-menu d-xl-none main_menu d-flex">
            <div class="container-fluid d-flex justify-content-between">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="navbar-brand ms-3">
                        <a href="index.html"><img src="{{ asset("frontend-assets/images/logo.png")}}" alt="Fxotary" class="img-fluid w-100" /></a>
                    </div>
                    <div class="text-end me-3">
                        <a class="menu-bar navbar-toggler" href="javascript:void(0)"><i
                                class="fa-solid fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile_menu_container">
            <div class="mobile_menu_content">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="navbar-brand">
                        <a href="index.html"><img src="{{ asset("frontend-assets/images/logo.png")}}" alt="Fxotary" class="img-fluid w-100" /></a>
                    </div>
                    <div class="close_btn">
                        <button><i class="fal fa-times"></i></button>
                    </div>
                </div>
                <div class="main-menu-mobile"></div>
            </div>
        </div>
    </header>
    <div class="menu_search">
        <form>
            <input type="text" placeholder="Search" />
            <button type="submit">Search</button>
            <span class="close_search c-pointer"><i class="fa-sharp fa-light fa-xmark"></i></span>
            <i class="icon-down-arrow"></i>
        </form>
    </div>
    <div class="body-overlay"></div>
    <!--===============================
        MAIN MENU END
    ===============================-->



    @yield("content")


    
    
    

    <!--===============================
        FOOTER START
    ===============================-->
    <footer class="pt_120 xs_pt_80">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-sm-8 col-md-6 col-lg-4">
                    <div class="footer_content">
                        <a class="footer_logo" href="index.html">
                            <img src="{{ asset("frontend-assets/images/footer_logo.jpg")}}" alt="Fxotary" class="img-fluid w-100" />
                        </a>
                        <p>
                            Qorem ipsum dolor sit amet, consectetur adipiscing elit aut elit
                            tellus luctus nec ulla corper mattis aulvinar daibus leo.
                        </p>
                        <!-- <form>
                <input type="text" placeholder="ENTER YOUR EMAIL" />
                <button type="submit">
                  <i class="fx-icon-next-arrow"></i>
                </button>
              </form> -->
                        <ul class="d-flex flex-wrap">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-3 col-md-6 col-lg-2">
                    <ul class="footer_menu">
                        <li>
                            <a href="{{ route("home") }}" class="text_hover_animaiton text_hover_type_2">Home</a>
                        </li>
                        <li>
                            <a href="{{ route("portfolio") }}" class="text_hover_animaiton text_hover_type_2">Portfolio</a>
                        </li>
                        <li>
                            <a href="{{ route("services") }}" class="text_hover_animaiton text_hover_type_2">Services</a>
                        </li>
                        <li>
                            <a href="{{ route("contact") }}" class="text_hover_animaiton text_hover_type_2">Contact</a>
                        </li>
                        <li>
                            <a href="{{ route("blog.grid") }}" class="text_hover_animaiton text_hover_type_2">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-3">
                    <div class="footer_address">
                        <h3>Address</h3>
                        <p>33 Road Broklyn Street, 600 New York, USA</p>
                        <p>2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-3">
                    <div class="footer_address">
                        <h3>Contact</h3>
                        <p>
                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                            <a href="callto:+926668880000">+92 (666) 888 0000</a>
                        </p>
                        <p>
                            <a href="mailto:needhelp@company.com">youmail@company.com</a>
                            <a href="callto:+926668880000">+80 (222) 888 11110</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer_copyright">
                        <p>Copyright © 2024 Codeefly. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--===============================
        FOOTER END
    ===============================-->

    <!--==============================
        SCROLL BUTTON START
    ===============================-->
    <div class="tf__scroll_btn">
        <i class="fa-regular fa-arrow-up-long"></i>
    </div>
    <!--==============================
        SCROLL BUTTON END
    ===============================-->

    <div id="magic-cursor">
        <div id="ball"></div>
    </div>

    <script src="{{ asset("frontend-assets/js/plugin.js") }}"></script>
    <script src="{{ asset("frontend-assets/js/animation.js") }}"></script>
    <script src="{{ asset("frontend-assets/js/main.js") }}"></script>
    </body>

</html>
