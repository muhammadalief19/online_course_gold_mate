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
                            <a href="{{ url('/') }}">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">SignUp</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<section class="singUp-area section-py-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="singUp-wrap">
                    <h2 class="title">Create Your Account</h2>
                    <p>Hey there! Ready to join the party? We just need a few details from you to get started. Let's do this!</p>
                    
                    <div class="account__social">
                        <a href="#" class="account__social-btn">
                            <img src="assets/img/icons/google.svg" alt="img"> Continue with Google
                        </a>
                    </div>
                    <div class="account__divider">
                        <span>or</span>
                    </div>

                    <!-- Registration Form -->
                    <form method="POST" action="{{ route('register') }}" class="account__form">
                        @csrf

                        <div class="form-grp">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="First name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-grp">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-grp">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-grp">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-two arrow-btn">
                            Sign Up
                            <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable">
                        </button>
                    </form>

                    <div class="account__switch">
                        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
