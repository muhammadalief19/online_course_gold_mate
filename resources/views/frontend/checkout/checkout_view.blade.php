@extends('frontend.master')
@section('home')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="YOUR_CLIENT_KEY"></script>

{{-- <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">Checkout</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Checkout</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= --> --}}
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Checkout</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Checkout</span>
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

<!-- checkout-area -->
<div class="checkout__area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coupon__code-wrap">
                    <div class="coupon__code-info">
                        <span><i class="far fa-bookmark"></i> Have a coupon?</span>
                        <a href="#" id="coupon-element">Click here to enter your code</a>
                    </div>
                    <form action="#" class="coupon__code-form">
                        <p>If you have a coupon code, please apply it below.</p>
                        <input type="text" placeholder="Coupon code">
                        <button type="submit" class="btn">Apply coupon</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <!-- Form untuk Billing Details -->
                <form action="{{ route('payment') }}" method="post" enctype="multipart/form-data" class="customer__form-wrap">
                    @csrf
                    <span class="title">Billing Details</span>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label for="first-name">First name *</label>
                                <input type="text" id="first-name" name="name" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label for="email">Email address *</label>
                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <label for="street-address">Address *</label>
                        <input type="text" id="street-address" name="address" value="{{ Auth::user()->address }}" placeholder="House number and street name">
                    </div>
                    <div class="form-grp">
                        <label for="phone">Phone *</label>
                        <input type="tel" id="phone" name="phone" value="{{ Auth::user()->phone }}">
                    </div>

                    <!-- Select Payment Method -->
                    <span class="title title-two">Select Payment Method</span>
                    <div class="payment-option-wrap">
                        <div class="payment-tab is-active">
                            <div class="payment-tab-toggle">
                                <input checked id="directPayment" name="cash_delivery" type="radio" value="handcash">
                                <label for="directPayment">Direct Payment</label>
                            </div>
                            {{-- <div class="payment-tab-toggle">
                                <input id="stripePayment" name="cash_delivery" type="radio" value="stripe">
                                <label for="stripePayment">Stripe Payment</label>
                            </div> --}}
                        </div>
                    </div>


                </div>

                <div class="col-lg-5">
                    <!-- Order Details -->
                    <div class="order__info-wrap">
                        <h2 class="title">YOUR ORDER</h2>
                        <ul class="list-wrap">
                            <li class="title">Product <span>Subtotal</span></li>
                            @foreach ($carts as $item)
                                <li>
                                    {{ $item->name }} × 1
                                    <span>${{ $item->price }}</span>
                                    <input type="hidden" name="course_id[]" value="{{ $item->id }}">
                                    <input type="hidden" name="course_title[]" value="{{ $item->name }}">
                                    <input type="hidden" name="price[]" value="{{ $item->price }}">
                                    <input type="hidden" name="instructor_id[]" value="{{ $item->options->instructor }}">
                                </li>
                            @endforeach
                            <li>Total <span>${{ $cartTotal }}</span></li>
                        </ul>
                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>.</p>
                        <button type="submit" class="btn">Place order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- checkout-area-end -->



@endsection
