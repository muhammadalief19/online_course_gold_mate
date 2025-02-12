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
                            <li>
                                <img src="{{ asset('') }}assets/img/icons/map_marker.svg" alt="Icon">
                                <span>{{ Str::limit($setting->address, 30) }}</span>
                            </li>
                            <li>
                                <img src="{{ asset('') }}assets/img/icons/envelope.svg" alt="Icon">
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                            </li>
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
                                            <input type="text" placeholder="Search For Course . . ." name="search">
                                            <button type="submit"><i class="flaticon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="mini-cart-icon" onmouseover="showMiniCart()" onmouseout="hideMiniCart()">
                                            <a href="{{ route('mycart') }}" class="cart-count">
                                                <img src="{{ asset('') }}assets/img/icons/cart.svg" class="injectable" alt="img">
                                                <span class="mini-cart-count" id="cartQty">0</span>
                                            </a>
                                            <div id="miniCartDropdown" class="mini-cart-dropdown" style="display: none;">
                                                <ul id="miniCart" class="list-unstyled m-0 p-3">
                                                    <!-- Mini cart items will be dynamically added here -->
                                                </ul>
                                                <div class="text-center p-2 border-top">
                                                    <a href="{{ route('mycart') }}" class="btn btn-primary btn-sm">View Cart</a>
                                                </div>
                                            </div>
                                        </li>

                                        <style>
                                            .mini-cart-dropdown {
                                                display: none;
                                                position: absolute;
                                                top: 100%;
                                                right: 0;
                                                background: #fff;
                                                border: 1px solid #ddd;
                                                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                                                width: 300px;
                                                z-index: 1000;
                                                border-radius: 5px;
                                                transition: all 0.3s ease;
                                            }

                                            .mini-cart-dropdown ul {
                                                list-style: none;
                                                padding: 0;
                                                margin: 0;
                                                max-height: 300px;
                                                overflow-y: auto;
                                            }

                                            .mini-cart-dropdown li {
                                                display: flex;
                                                align-items: center;
                                                padding: 10px;
                                                border-bottom: 1px solid #f1f1f1;
                                                flex-wrap: wrap;
                                            }

                                            .mini-cart-dropdown li:last-child {
                                                border-bottom: none;
                                            }

                                            .mini-cart-dropdown .media-img {
                                                margin-right: 10px;
                                            }

                                            .mini-cart-dropdown .media-img img {
                                                width: 50px;
                                                height: 50px;
                                                object-fit: cover;
                                            }

                                            .mini-cart-dropdown .media-body {
                                                flex: 1;
                                                min-width: 0;
                                            }

                                            .mini-cart-dropdown .remove-item {
                                                background: none;
                                                border: none;
                                                color: #1175f6;
                                                font-size: 18px;
                                                cursor: pointer;
                                                padding: 0;
                                                margin-left: 10px;
                                            }

                                            .mini-cart-dropdown .remove-item:hover {
                                                color: #d9534f;
                                            }

                                            @media (max-width: 768px) {
                                                .mini-cart-dropdown {
                                                    width: 100%;
                                                    left: 0;
                                                    right: 0;
                                                }
                                            }
                                        </style>


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
