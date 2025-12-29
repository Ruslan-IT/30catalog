
<!-- ...:::: Start Header Section:::... -->
<header class="header-section d-lg-block d-none">
    <!-- Start Header Top Area -->
    <div class="header-top">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-6">
                    <div class="header-top--left">
                        <span>Welcome to our store!</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-top--right">
                        <!-- Start Header Top Menu -->
                        <ul class="header-user-menu">
                            {{--<li class="has-user-dropdown">
                                <a href="">Setting</a>
                                <!-- Header Top Menu's Dropdown -->
                                <ul class="user-sub-menu">
                                    <li><a href="">Checkout</a></li>
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">Shopping Cart</a></li>
                                    <li><a href="">Wishlist</a></li>
                                </ul>
                            </li>--}}
                           {{-- <li class="has-user-dropdown">
                               --}}{{-- <a href="">$ USD</a>
                                <!-- Header Top Menu's Dropdown -->
                                <ul class="user-sub-menu">
                                    <li><a href="">EUR – Euro</a></li>
                                    <li><a href="">GBP – British Pound</a></li>
                                    <li><a href="">INR – India Rupee</a></li>
                                </ul>--}}{{--
                            </li>--}}
                            <li class="has-user-dropdown">
                                <a href="">English</a>
                                <!-- Header Top Menu's Dropdown -->
                               {{-- <ul class="user-sub-menu">
                                    <li><a href=""><img class="user-sub-menu-in-icon" src="assets/images/icon/lang-en.png" alt=""> English</a></li>
                                    <li><a href=""><img class="user-sub-menu-in-icon" src="assets/images/icon/lang-gr.png" alt=""> Germany</a></li>
                                </ul>--}}
                            </li>
                            {{--<li><a href=""><i class="icon-repeat"></i>--}}{{-- Compare (0)--}}{{--</a></li>--}}
                        </ul> <!-- End Header Top Menu -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Header Top Area -->

    <!-- Start Header Center Area -->
    <div class="header-center">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-3">
                    <!-- Logo Header -->
                    <div class="header-logo">
                        <a  href="/">
                            <img  style="width: 145px; height: 40px" src="/assets/images/logo/logo-3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Start Header Search -->
                    <div class="header-search">
                        <form action="#" method="post">
                            <div class="header-search-box default-search-style d-flex">
                                <input class="default-search-style-input-box border-around border-right-none" type="search" placeholder="Search entire store here ..." required>
                                <button class="default-search-style-input-btn" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div> <!-- End Header Search -->
                </div>
                <div class="col-3 text-right">
                    <!-- Start Header Action Icon -->
                    <ul class="header-action-icon">
                        <li>
                           {{-- <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                <i class="icon-heart"></i>
                                <span class="header-action-icon-item-count">3</span>
                            </a>--}}
                        </li>
                        <li>
                           {{-- <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                <i class="icon-shopping-cart"></i>
                                <span class="header-action-icon-item-count">3</span>
                            </a>--}}
                        </li>
                    </ul> <!-- End Header Action Icon -->
                </div>
            </div>
        </div>
    </div> <!-- End Header Center Area -->

    <!-- Start Bottom Area -->
    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Header Main Menu -->
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}"
                                       class="main-menu-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('category.index') }}"
                                       class="main-menu-link {{ request()->routeIs('category.*') ? 'active' : '' }}">
                                        Categories
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('contacts') }}"
                                       class="main-menu-link {{ request()->routeIs('contacts') ? 'active' : '' }}">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> <!-- Header Main Menu Start -->
                </div>
            </div>
        </div>
    </div> <!-- End Bottom Area -->
</header> <!-- ...:::: End Header Section:::... -->

<!-- ...:::: Start Mobile Header Section:::... -->
<div class="mobile-header-section d-block d-lg-none">
    <!-- Start Mobile Header Wrapper -->
    <div class="mobile-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <div class="mobile-header--left">
                        <a href="" class="mobile-logo-link">
                            <img src="assets/images/logo/logo.png" alt="" class="mobile-logo-img">
                        </a>
                    </div>
                    <div class="mobile-header--right">
                        <a href="#mobile-menu-offcanvas" class="mobile-menu offcanvas-toggle">
                            <span class="mobile-menu-dash"></span>
                            <span class="mobile-menu-dash"></span>
                            <span class="mobile-menu-dash"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Mobile Header Wrapper -->
</div> <!-- ...:::: Start Mobile Header Section:::... -->
