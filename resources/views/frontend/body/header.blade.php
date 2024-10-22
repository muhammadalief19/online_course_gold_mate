{{-- @php
    $setting = App\Models\SiteSetting::find(1);
@endphp

<header class="header-menu-area bg-white">
    <div class="header-top pr-150px pl-150px border-bottom border-bottom-gray py-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-phone mr-1"></i><a href="tel:00123456789"> {{ $setting->phone }}</a></li>
                            <li class="d-flex align-items-center"><i class="la la-envelope-o mr-1"></i><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">

     @auth
    <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-sign-in mr-1"></i><a href="{{ route('dashboard') }}"> Dashboard</a></li>
    <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="{{ route('user.logout') }}"> Logout</a></li>

    @else

    <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-sign-in mr-1"></i><a href="{{ route('login') }}"> Login</a></li>
    <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="{{ route('register') }}"> Register</a></li>

    @endauth




                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content pr-150px pl-150px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="{{ url('/') }}" class="logo"><img src="{{ asset($setting->logo)}}" alt="logo"></a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->

@php
    $categories = App\Models\Category::orderBy('category_name','ASC')->get();
@endphp

<div class="col-lg-10">
    <div class="menu-wrapper">
        <div class="menu-category">
            <ul>
                <li>
                    <a href="#">Categories <i class="la la-angle-down fs-12"></i></a>
                    <ul class="cat-dropdown-menu">

                        @foreach ($categories as $cat)
        @php
        $subcategories = App\Models\SubCategory::where('category_id',$cat->id)->get();
        @endphp
                        <li>
                            <a href="{{ url('category/'.$cat->id.'/'.$cat->category_slug) }}">{{ $cat->category_name }}<i class="la la-angle-right"></i></a>
                            <ul class="sub-menu">
                                @foreach ($subcategories as $subcat)
                                <li><a href="{{ url('subcategory/'.$subcat->id.'/'.$subcat->subcategory_slug) }}">{{ $subcat->subcategory_name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach

                    </ul>
                </li>
            </ul>
        </div><!-- end menu-category -->
        <form method="post">
            <div class="form-group mb-0">
                <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                <span class="la la-search search-icon"></span>
            </div>
        </form>
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home  </a>

                </li>
                <li>
                    <a href="#">courses <i class="la la-angle-down fs-12"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="course-grid.html">course grid</a></li>
                        <li><a href="course-list.html">course list</a></li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('blog') }}">blog  </a>

                </li>
            </ul><!-- end ul -->
        </nav><!-- end main-menu -->


        <div class="shop-cart mr-4">
            <ul>
                <li>
                    <p class="shop-cart-btn d-flex align-items-center">
                        <i class="la la-shopping-cart"></i>
                        <span class="product-count" id="cartQty">0</span>
                    </p>

                    <ul class="cart-dropdown-menu">

                        <div id="miniCart">

                        </div>
                       <br><br>

                        <li class="media media-card">
                            <div class="media-body fs-16">
                                <p class="text-black font-weight-semi-bold lh-18">Total: $<span class="cart-total" id="cartSubTotal"> </span>  </p>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('mycart') }}" class="btn theme-btn w-100">Go to cart <i class="la la-arrow-right icon ml-1"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- end shop-cart -->
        <div class="nav-right-button">
            <a href="admission.html" class="btn theme-btn d-none d-lg-inline-block"><i class="la la-user-plus mr-1"></i> Admission</a>
        </div><!-- end nav-right-button -->
    </div><!-- end menu-wrapper -->
</div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="#">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="home-2.html">Home Two</a></li>
                    <li><a href="home-3.html">Home Three</a></li>
                    <li><a href="home-4.html">Home four</a></li>
                </ul>
            </li>
            <li>
                <a href="#">courses</a>
                <ul class="sub-menu">
                    <li><a href="course-grid.html">course grid</a></li>
                    <li><a href="course-list.html">course list</a></li>
                    <li><a href="course-grid-left-sidebar.html">grid left sidebar</a></li>
                    <li><a href="course-grid-right-sidebar.html">grid right sidebar</a></li>
                    <li><a href="course-list-left-sidebar.html">list left sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                    <li><a href="course-list-right-sidebar.html">list right sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                    <li><a href="course-details.html">course details</a></li>
                    <li><a href="lesson-details.html">lesson details</a></li>
                    <li><a href="my-courses.html">My courses</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Student</a>
                <ul class="sub-menu">
                    <li><a href="student-detail.html">student detail</a></li>
                    <li><a href="student-quiz.html">take quiz</a></li>
                    <li><a href="student-quiz-results.html">quiz results</a></li>
                    <li><a href="student-quiz-result-details.html">quiz details</a></li>
                    <li><a href="student-quiz-result-details-2.html">quiz details 2</a></li>
                    <li><a href="student-path.html">path details</a></li>
                    <li><a href="student-path-assessment.html">Skill Assessment</a></li>
                    <li><a href="student-path-assessment-result.html">Skill result</a></li>
                </ul>
            </li>
            <li>
                <a href="#">pages</a>
                <ul class="sub-menu">
                    <li><a href="/dashboard">dashboard <span class="ribbon">Hot</span></a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="teachers.html">Teachers</a></li>
                    <li><a href="teacher-detail.html">Teacher detail</a></li>
                    <li><a href="careers.html">careers</a></li>
                    <li><a href="career-details.html">career details</a></li>
                    <li><a href="categories.html">categories</a></li>
                    <li><a href="terms-and-conditions.html">Terms & conditions</a></li>
                    <li><a href="privacy-policy.html">privacy policy</a></li>
                    <li><a href="for-business.html">for business</a></li>
                    <li><a href="become-a-teacher.html">become an instructor</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="admission.html">admission</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="pricing-table.html">pricing tables</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="sign-up.html">sign-up</a></li>
                    <li><a href="login.html">login</a></li>
                    <li><a href="recover.html">recover</a></li>
                    <li><a href="shopping-cart.html">cart</a></li>
                    <li><a href="checkout.html">checkout</a></li>
                    <li><a href="error.html">page 404</a></li>
                </ul>
            </li>
            <li>
                <a href="#">blog</a>
                <ul class="sub-menu">
                    <li><a href="blog-full-width.html">blog full width </a></li>
                    <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                    <li><a href="blog-single.html">blog detail</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header><!-- end header-menu-area --> --}}
@php
    $setting = App\Models\SiteSetting::find(1);
@endphp
    <!-- header-area -->
    <header>
        <div class="tg-header__top">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tg-header__top-info list-wrap">
                            <li><img src="{{ asset('') }}assets/img/icons/map_marker.svg" alt="Icon"> <span>jalan mars</span></li>
                            <li><img src="{{ asset('') }}assets/img/icons/envelope.svg" alt="Icon"> <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tg-header__top-right">
                            <div class="tg-header__phone">
                                <img src="{{ asset('') }}assets/img/icons/phone.svg" alt="Icon">Call us:
                                <a href="tel:00123456789">{{ $setting->phone }}</a>
                            </div>
                            <div class="tg-header__dashboard-btn">
                                @auth
                                <a href="{{ route('dashboard') }}" class="btn-dashboard">Dashboard</a>
                                @else
                                <a href="{{ route('login') }}" class="btn-dashboard">Login</a>
                                @endauth
                            </div>

                        </div>
                    </div>
                    <style>
                       .tg-header__dashboard-btn {
    text-align: right; /* Untuk memastikan tombol berada di sebelah kanan */
}

.btn-dashboard {
    background-color: #f5ee26; /* Sesuaikan warna sesuai desain */
    color: #080808;
    padding: 5px 15px; /* Mengurangi padding untuk memperkecil tombol */
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
    font-size: 14px; /* Tambahkan ini jika ingin mengurangi ukuran teks */
}

.btn-dashboard:hover {
    background-color: #0066ff; /* Warna saat tombol di-hover */
}


                    </style>
                </div>
            </div>
        </div>
        <div id="header-fixed-height"></div>
        <div id="sticky-header" class="tg-header__area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href="{{ url('/') }}" class="logo"><img src="{{ asset($setting->logo)}}"alt="Logo"></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li class=""><a href="{{ url('/') }}">Home</a></li>
                                        <li class="menu-item-has-children"><a href="#">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.html">Course grid</a></li>
                                                <li><a href="course-details.html">Course List</a></li>
                                            </ul>
                                        </li>
                                        @php
                                    $categories = App\Models\Category::orderBy('category_name','ASC')->get();
                                        @endphp

                                        <li class="menu-item-has-children"><a href="#">Categories</a>
                                            <ul class="sub-menu">
                                                @foreach ($categories as $cat)
                                                @php
                                                $subcategories = App\Models\SubCategory::where('category_id',$cat->id)->get();
                                                @endphp
                                                <li class="menu-item-has-children">
                                                    <a href="{{ url('category/'.$cat->id.'/'.$cat->category_slug) }}">{{ $cat->category_name }}</a>
                                                    <ul class="sub-menu">
                                                        @foreach ($subcategories as $subcat)
                                                        <li><a href="{{ url('subcategory/'.$subcat->id.'/'.$subcat->subcategory_slug) }}">{{ $subcat->subcategory_name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{ route('blog') }}">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__search d-none d-md-block">
                                    <form action="#" class="tgmenu__search-form">
                                        <div class="input-grp">
                                            <input type="text" placeholder="Search For Course . . .">
                                            <button type="submit"><i class="flaticon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="wishlist-icon">
                                            <a href="cart.html" class="cart-count">
                                                <img src="{{ asset('') }}assets/img/icons/heart.svg" class="injectable" alt="img">
                                                <span class="wishlist-count">0</span>
                                            </a>
                                        </li>
                                        <li class="mini-cart-icon">
                                            <a href="{{ route('mycart') }}" class="cart-count">
                                                <img src="{{ asset('') }}assets/img/icons/cart.svg" class="injectable" alt="img">
                                                <span class="mini-cart-count" id="cartSubTotal">Total$</span>
                                            </a>
                                        </li>
                                        @auth
                                        <li class="header-btn login-btn">
                                            <a href="{{ route('user.logout') }}">Logout</a>
                                        </li>
                                        @else
                                        <li class="header-btn login-btn">
                                            <a href="{{ route('login') }}">Login</a>
                                        </li>
                                        @endauth
                                        {{-- @auth
                                        <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-sign-in mr-1"></i><a href="{{ route('dashboard') }}"> Dashboard</a></li>
                                        <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="{{ route('user.logout') }}"> Logout</a></li>

                                        @else

                                        <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-sign-in mr-1"></i><a href="{{ route('login') }}"> Login</a></li>
                                        <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="{{ route('register') }}"> Register</a></li>

                                        @endauth --}}
                                    </ul>
                                </div>
                                <div class="mobile-login-btn">
                                    <a href="login.html"><img src="{{ asset('') }}assets/img/icons/user.svg" alt="" class="injectable"></a>
                                </div>
                                <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                                <div class="nav-logo">
                                    <a href="index.html"><img src="{{ asset('') }}assets/img/logo/logo.svg" alt="Logo"></a>
                                </div>
                                <div class="tgmobile__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->
