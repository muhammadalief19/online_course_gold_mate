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

                                @if(Session::has('coupon'))

                                @else
                                {{ json_encode(Session::get('coupon'), JSON_PRETTY_PRINT) }}

                                <form action="#" class="cart__actions-form" id="couponField">
                                    <input type="text" id="coupon_name" placeholder="Coupon code" class="form-control form--control pl-3">
                                    <button type="submit"onclick="applyCoupon()" class="btn theme-btn">Apply coupon</button>
                                </form>
                                @endif
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
