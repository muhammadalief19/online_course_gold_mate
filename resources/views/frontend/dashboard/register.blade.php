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
                            <h3 class="title">Student SignUp</h3>
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

{{-- <!-- ================================
       START CONTACT AREA
================================= -->
<section class="contact-area section--padding position-relative">
    <span class="ring-shape ring-shape-1"></span>
    <span class="ring-shape ring-shape-2"></span>
    <span class="ring-shape ring-shape-3"></span>
    <span class="ring-shape ring-shape-4"></span>
    <span class="ring-shape ring-shape-5"></span>
    <span class="ring-shape ring-shape-6"></span>
    <span class="ring-shape ring-shape-7"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title text-center fs-24 lh-35 pb-4">Create an Account and <br> Start Learning!</h3>
                        <div class="section-block"></div>

        <form method="POST"  class="pt-4" action="{{ route('register') }}">
            @csrf

        <div class="d-flex flex-wrap align-items-center pb-4">
            <button class="btn theme-btn flex-grow-1 mx-2 mb-2"><i class="la la-google mr-2"></i>Google</button>
            <button class="btn theme-btn flex-grow-1 mx-2 mb-2"><i class="la la-facebook mr-2"></i>Facebook</button>
            <button class="btn theme-btn flex-grow-1 mx-2 mb-2"><i class="la la-twitter mr-2"></i>Twitter</button>
        </div>
        <div class="text-center pt-3 pb-4">
            <div class="icon-element icon-element-md fs-25 shadow-sm">Or</div>
        </div>
        <div class="input-box">
            <label class="label-text"> Name</label>
            <div class="form-group">
                <input class="form-control form--control" id="name" type="text" name="name" placeholder="First name">
                <span class="la la-user input-icon"></span>
            </div>
        </div><!-- end input-box -->
        <div class="input-box">
            <label class="label-text">Email</label>
            <div class="form-group">
                <input class="form-control form--control" id="email" type="email" name="email" placeholder="email">
                <span class="la la-user input-icon"></span>
            </div>
        </div><!-- end input-box -->
        <div class="input-box">
            <label class="label-text">Password</label>
            <div class="form-group">
                <input class="form-control form--control" id="password" type="password" name="password" placeholder="Username">
                <span class="la la-user input-icon"></span>
            </div>
        </div><!-- end input-box -->
        <div class="input-box">
            <label class="label-text">Confirm Password</label>
            <div class="form-group">
                <input class="form-control form--control" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password">
                <span class="la la-envelope input-icon"></span>
            </div>
        </div><!-- end input-box -->


        <div class="btn-box">
            <div class="custom-control custom-checkbox mb-2 fs-15">
                <input type="checkbox" class="custom-control-input" id="receiveCheckbox" required>
                <label class="custom-control-label custom--control-label lh-20" for="receiveCheckbox">Yes! I want to get the most out of Aduca by receiving emails with exclusive deals, personal recommendations and learning tips!</label>
            </div><!-- end custom-control -->
            <div class="custom-control custom-checkbox mb-4 fs-15">
                <input type="checkbox" class="custom-control-input" id="agreeCheckbox" required>
                <label class="custom-control-label custom--control-label" for="agreeCheckbox">by signing i agree to the
                    <a href="terms-and-conditions.html" class="text-color hover-underline">terms and conditions</a> and
                    <a href="privacy-policy.html" class="text-color hover-underline">privacy policy</a>
                </label>
            </div><!-- end custom-control -->
            <button class="btn theme-btn" type="submit">Register Account <i class="la la-arrow-right icon ml-1"></i></button>
            <p class="fs-14 pt-2">Already have an account? <a href="{{ route('login') }}" class="text-color hover-underline">Log in</a></p>
        </div><!-- end btn-box -->
    </form>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end contact-area -->
<!-- ================================
       END CONTACT AREA
================================= --> --}}

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
                        <div class="form-grp">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="first name" class="form-control">
                            <span class="la la-envelope input-icon"></span>
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
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                            <span class="la la-lock input-icon"></span>
                        </div>

                        <button type="submit" class="btn btn-two arrow-btn">Sign Up
                            <img src="{{ asset('') }}assets/img/icons/right_arrow.svg" alt="img" class="injectable">
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





@endsection
