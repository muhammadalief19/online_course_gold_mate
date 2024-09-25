<section class="register-area section-padding dot-bg overflow-hidden" style="background-color: #f7f7f7;">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Form Section -->
            <div class="col-lg-6">
                <div class="card card-item" style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 15px;">
                    <div class="card-body p-5">
                        <h3 class="fs-24 font-weight-semi-bold pb-3 text-center">Sign Up for Free Courses</h3>

                        <!-- Form -->
                        <form method="post">
                            <!-- Name Input -->
                            <div class="input-box mb-4">
                                <label class="label-text">Full Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="name" placeholder="Your Name" style="border-radius: 30px; padding-left: 50px;">
                                    <span class="la la-user input-icon" style="left: 15px;"></span>
                                </div>
                            </div>

                            <!-- Email Input -->
                            <div class="input-box mb-4">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="email" name="email" placeholder="Email Address" style="border-radius: 30px; padding-left: 50px;">
                                    <span class="la la-envelope input-icon" style="left: 15px;"></span>
                                </div>
                            </div>

                            <!-- Phone Input -->
                            <div class="input-box mb-4">
                                <label class="label-text">Phone Number</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="phone" placeholder="Phone Number" style="border-radius: 30px; padding-left: 50px;">
                                    <span class="la la-phone input-icon" style="left: 15px;"></span>
                                </div>
                            </div>

                            <!-- Subject Input -->
                            <div class="input-box mb-4">
                                <label class="label-text">Subject</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="subject" placeholder="Subject" style="border-radius: 30px; padding-left: 50px;">
                                    <span class="la la-book input-icon" style="left: 15px;"></span>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <div class="banner__btn-wrap" data-aos="fade-right" data-aos-delay="800">
                                    <a href="/" class="btn arrow-btn">Apply Now <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Content Section -->
            <div class="col-lg-6">
                <div class="register-content p-5">
                    <div class="section-heading text-center">
                        <h5 class="ribbon ribbon-lg mb-3 custom-btn">Register Today</h5>
                        <h2 class="section__title mb-4">Join Our Learning Paths. Stay Ahead.</h2>
                        <p class="section__desc" style="font-size: 16px; line-height: 1.6;">
                            Learning is the key to growth and success. Our carefully designed courses are here to help you master new skills and excel in your career. Whether you're a beginner or an expert, we have something for everyone. Let's take the next step together!
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="banner__btn-wrap" data-aos="fade-right" data-aos-delay="800">
                            <a href="/" class="btn arrow-btn">Get Started Now <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inline CSS -->
<style>
    .form-group {
        position: relative;
    }

    .input-icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 20px;
        font-size: 18px;
        color: #ccc;
    }

    .form-control {
        padding-left: 50px;
        height: 45px;
        font-size: 14px;
    }

    .custom-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        padding: 10px 30px;
        border-radius: 30px;
        background-color: #4CAF50; /* Ganti dengan warna sesuai */
        color: white;
        transition: background-color 0.3s ease;
    }

    .custom-btn img {
        width: 20px;
        margin-left: 10px;
    }

    .custom-btn:hover {
        background-color: #FFC224; /* Warna hover */
    }

    .section__title {
        font-size: 32px;
        font-weight: 600;
    }

    .section__desc {
        font-size: 16px;
        color: #666;
    }

    .card {
        border-radius: 15px;
    }

    .btn-box {
        margin-top: 20px;
    }

    .card-body {
        background-color: white;
        border-radius: 15px;
    }

    .register-area {
        background-color: #f7f7f7;
        padding: 60px 0;
    }

    .register-content {
        background-color: #ffffff;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        padding: 40px;
    }

    .section-heading h5 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .ribbon-lg {
        background-color: #3d27ab; /* Warna tombol register */
        color: white;
        padding: 5px 15px;
        border-radius: 30px;
        display: inline-block;
    }
</style>




{{-- <section class="register-area section-padding dot-bg overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="fs-24 font-weight-semi-bold pb-2">Receive Free Courses</h3>
                        <div class="divider"><span></span></div>
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="name" placeholder="Your Name">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="email" name="email" placeholder="Email Address">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Phone Number</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="phone" placeholder="Phone Number">
                                    <span class="la la-phone input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Subject</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="subject" placeholder="Subject">
                                    <span class="la la-book input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-2">
                                <button class="btn theme-btn" type="submit">Apply Now <i class="la la-arrow-right icon ml-1"></i></button>
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto">
                <div class="register-content">
                    <div class="section-heading">
                        <h5 class="ribbon ribbon-lg mb-2">Register</h5>
                        <h2 class="section__title">Get ahead with Learning Paths. Stay Sharp.</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">Education is the process of acquiring the body of knowledge and skills that people are expected have in your society. A education develops a critical thought process in addition to learning. Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid architecto aspernatur, facilis perspiciatis rerum saepe vel vitae? Alias culpa dicta facere maiores quam quas, quis sapiente voluptatem? Nulla, voluptatem.</p>
                    </div><!-- end section-heading -->
                    <div class="btn-box pt-35px">
                        <a href="sign-up.html" class="btn theme-btn"><i class="la la-user mr-1"></i>Get Started</a>
                    </div>
                </div><!-- end register-content -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end register-area --> --}}
