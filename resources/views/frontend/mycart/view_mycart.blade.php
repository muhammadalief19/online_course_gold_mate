{{-- @extends('frontend.master')
@section('home')

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">Shopping Cart</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Shopping Cart</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="cart-area section-padding">
    <div class="container">
        <div class="table-responsive">
            <table class="table generic-table">
                <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Course Details</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="cartPage">


                </tbody>
            </table>
            <div class="d-flex flex-wrap align-items-center justify-content-between pt-4">

                @if(Session::has('coupon'))

                @else

                    {{ json_encode(Session::get('coupon'), JSON_PRETTY_PRINT) }}

                <form  action="#">
                    <div class="input-group mb-2" id="couponField">
                        <input class="form-control form--control pl-3" type="text"  id="coupon_name" placeholder="Coupon code">
                        <div class="input-group-append">

                      <a type="submit" onclick="applyCoupon()" class="btn theme-btn">Apply Code</a>
                        </div>
                    </div>
                </form>
               @endif



            </div>
        </div>
        <div class="col-lg-4 ml-auto">
            <div class="bg-gray p-4 rounded-rounded mt-40px" id="couponCalField">


            </div>
            <a href="{{ route('checkout') }}" class="btn theme-btn w-100">Checkout <i class="la la-arrow-right icon ml-1"></i></a>
        </div>
    </div><!-- end container -->
</section>
<!-- ================================
       END CONTACT AREA
================================= -->







@endsection --}}
@extends('frontend.master')
@section('home')

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Cart</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
                <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
                <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- cart-area -->
        <div class="cart__area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <table class="table cart__table">
                            <thead>
                                <tr>
                                    <th class="product__thumb">&nbsp;</th>
                                    <th class="product__name">Product</th>
                                    <th class="product__price">Price</th>
                                    <th class="product__remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody id="cartPage">
                            </tbody>
                        </table>
                        <div class="d-flex flex-wrap align-items-center justify-content-between pt-4">
                            <td colspan="6" class="cart__actions">
                                <form action="#" class="cart__actions-form" onsubmit="event.preventDefault(); applyCoupon();">
                                    <input type="text" id="coupon_name" placeholder="Coupon code" class="form-control form--control pl-3">
                                    <button type="submit" class="btn theme-btn">Apply coupon</button>
                                </form>
                            </td>
                        </div>

                        <div class="col-lg-4 ml-auto">
                            <div class="bg-gray p-4 rounded-rounded mt-40px" id="couponCalField">
                                <!-- Rincian perhitungan kupon akan ditampilkan di sini oleh fungsi couponCalculation() -->
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="cart__collaterals-wrap">
                            <h2 class="title">Cart totals</h2>
                            <ul class="list-wrap">
                            </ul>
                            <a href="{{ route('checkout') }}" class="btn">checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-area-end -->
        @endsection
