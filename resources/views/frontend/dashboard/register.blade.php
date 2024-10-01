@extends('frontend.master')
@section('home')
@section('title')
Register Page | Easy Learning
@endsection

       <!-- breadcrumb-area -->
       <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Student SingUp</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">SingUp</span>
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

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="singUp-area section-py-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="singUp-wrap">
                    <h2 class="title">Create Your Account</h2>
                    <p>Hey there! Ready to join the party? We just need a few details from you to get <br> started. Let's do this!</p>
                    <div class="account__social">
                        <a href="#" class="account__social-btn">
                            <img src="assets/img/icons/google.svg" alt="img">
                            Continue with Google
                        </a>
                    </div>
                    <div class="account__divider">
                        <span>or</span>
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="account__form">
                        @csrf
                        <div class="row gutter-20">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="name">First Name</label>
                                    <input type="text" id="name" name="name" placeholder="First Name" class="form-control">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="last-name">Last name</label>
                                    <input type="text" id="last-name" name="last_name" placeholder="Last name" class="form-control">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-grp">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                            <span class="la la-envelope input-icon"></span>
                        </div>
                        <div class="form-grp">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            <span class="la la-lock input-icon"></span>
                        </div>
                        <div class="form-grp">
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" id="confirm-password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                            <span class="la la-lock input-icon"></span>
                        </div>

                        <div class="custom-control custom-checkbox mb-2 fs-15">
                            <input type="checkbox" class="custom-control-input" id="receiveCheckbox" required>
                            <label class="custom-control-label" for="receiveCheckbox">Yes! I want to receive emails with exclusive deals and tips!</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-4 fs-15">
                            <input type="checkbox" class="custom-control-input" id="agreeCheckbox" required>
                            <label class="custom-control-label" for="agreeCheckbox">By signing up, I agree to the <a href="terms-and-conditions.html">terms and conditions</a> and <a href="privacy-policy.html">privacy policy</a>.</label>
                        </div>

                        <button type="submit" class="btn btn-two arrow-btn">Sign Up
                            <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable">
                        </button>
                    </form>
                    <div class="account__switch">
                        <p>Already have an account?<a href="{{ route('login') }}">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact-area -->
<!-- ================================
       END CONTACT AREA
================================= -->






@endsection
