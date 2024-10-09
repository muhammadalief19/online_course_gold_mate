@extends('frontend.master')
@section('home')
@section('title')
{{ $blog->post_title  }} | Easy Learning
@endsection

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<main class="main-area fix">
    <section class="breadcrumb__area breadcrumb__bg pattern-bg" data-background="{{ asset('') }}assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content breadcrumb-content">
                        <!-- Judul Section -->
                        <div class="section-heading pb-3">
                            <h3 class="title section__title">{{ $blog->post_title }}</h3>
                        </div>

                        <!-- Breadcrumb Navigation -->
                        <nav class="breadcrumb generic-list-item generic-list-item-arrow d-flex flex-wrap align-items-center">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/blog">Blog</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span>{{ $blog->post_title }}</span>
                        </nav>

                        <!-- Metadata -->
                        <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center flex-wrap fs-14 pt-2">
    <li class="d-flex align-items-center" style="margin-right: 20px;">By <a>User</a></li>
    <li class="d-flex align-items-center" style="margin-right: 20px;">{{ $blog->created_at->format('M d Y') }}</li>
    <li class="d-flex align-items-center" style="margin-right: 20px;"><a>1 Comments</a></li>
    <li class="d-flex align-items-center">130 Shares</li>
</ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb Shapes -->
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
        </div>
    </section>
</main>

<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card card-item">
                    <div class="card-body">
                        <p class="card-text pb-3"> {!! $blog->long_descp !!} </p>
                        <div class="section-block"></div>

                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3">

                            <div class="share-wrap">

                                <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="Toggle to expand social icons"><i class="la la-share-alt"></i></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="instructor-wrap py-5">
                    <h3 class="fs-22 font-weight-semi-bold pb-4">About the author</h3>
                    <div class="media media-card">
                        <div class="media-img rounded-full avatar-lg mr-4">
                            <img src="images/img-loading.png" data-src="images/small-avatar-1.jpg" alt="Avatar image" class="rounded-full lazy">
                        </div>
                        <div class="media-body">
                            <h5>Alex Smith</h5>
                            <span class="d-block lh-18 pt-2 pb-2">www.techydevs.com</span>
                            <p class="pb-3">I'm a growth-oriented digital marketer with a passion for content marketing, social media marketing wonders, conversion rate optimization, and keyword research. I strongly support permission marketing and earned media. More than anything</p>

                        </div>
                    </div>
                </div><!-- end instructor-wrap -->
                <div class="section-block"></div>
                <div class="comments-wrap pt-5" id="comments">
                    <div class="d-flex align-items-center justify-content-between pb-4">
                        <h3 class="fs-22 font-weight-semi-bold">Comments 1</h3>
                    </div>
                    <div class="comment-list">
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <div class="media-img mr-4 rounded-full">
                                <img class="rounded-full lazy" src="images/img-loading.png" data-src="images/small-avatar-1.jpg" alt="User image">
                            </div>
                            <div class="media-body">
                                <h5 class="pb-2">Kavi arasan</h5>
                                <span class="d-block lh-18 pb-2">a month ago</span>
                                <p class="pb-3">This is one of the best courses I have taken in Udemy. It is very complete, and it has made continue learning about Java and SQL databases as well.</p>
                                <div class="helpful-action d-flex align-items-center justify-content-between">
                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30" href="#" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i> Reply</a>
                                    <div class="pl-2">
                                        <span class="fs-13">Was this review helpful?</span>
                                        <button class="btn">Yes</button>
                                        <button class="btn">No</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->


                    </div>
                    <div class="load-more-btn-box text-center pt-3 pb-5">
                        <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30"><i class="la la-refresh mr-1"></i> Load More Comment</button>
                    </div>
                </div>
                <div class="section-block"></div>
                <div class="add-comment-wrap pt-5">
                    <h3 class="fs-22 font-weight-semi-bold pb-4">Add a Comment</h3>
                    <form method="post" class="row">
                        <div class="input-box col-lg-6">
                            <label class="label-text">Name</label>
                            <div class="form-group">
                                <input class="form-control form--control" type="text" name="name" placeholder="Your Name">
                                <span class="la la-user input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-6">
                            <label class="label-text">Email</label>
                            <div class="form-group">
                                <input class="form-control form--control" type="email" name="email" placeholder="Email Address">
                                <span class="la la-envelope input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-12">
                            <label class="label-text">Message</label>
                            <div class="form-group">
                                <textarea class="form-control form--control pl-3" name="message" placeholder="Write Message" rows="5"></textarea>
                            </div>
                        </div><!-- end input-box -->
                        <div class="btn-box col-lg-12">
                            <div class="custom-control custom-checkbox mb-3 fs-15">
                                <input type="checkbox" class="custom-control-input" id="saveCheckbox" required>
                                <label class="custom-control-label custom--control-label" for="saveCheckbox">
                                    Save my name, and email in this browser for the next time I comment.
                                </label>
                            </div><!-- end custom-control -->
                            <button class="btn theme-btn" type="submit">Submit Comment</button>
                        </div><!-- end btn-box -->
                    </form>
                </div><!-- end add-comment-wrap -->
            </div><!-- end col-lg-8 -->
            <div class="col-xl-3 col-lg-4">
                    <aside class="blog-sidebar">
                        <div class="blog-widget widget_search">
                            <div class="sidebar-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="widget-title">Categories</h4>
                            <div class="shop-cat-list">
                                <ul class="list-wrap">
                                    @foreach ($bcategory as $cat)
                                        <li><a href="{{ url('blog/cat/list/'.$cat->id) }}"><i class="flaticon-angle-right"></i>{{ $cat->category_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="rc-post-list">
                                @foreach ($post as $dpost)
                                    <div class="rc-post-item">
                                        <div class="rc-post-thumb">
                                            <a href="{{ url('blog/details/'.$dpost->post_slug) }}">
                                                <img class="lazy" src="{{ asset($dpost->post_image) }}" alt="{{ $dpost->post_title }}">
                                            </a>
                                        </div>
                                        <div class="rc-post-content">
                                            <span class="date"><i class="flaticon-calendar"></i> {{ $dpost->created_at->format('d F, Y') }}</span>
                                            <h4 class="title">
                                                <a href="{{ url('blog/details/'.$dpost->post_slug) }}">{{ $dpost->post_title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                @foreach ($tags_all as $tag)
                                <a href="{{ route('blog.list', ['tag' => $tag]) }}">{{ ucwords($tag) }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="card card-item mb-4">
                            <div class="card-body">
                                <h3 class="card-title fs-4 pb-2">Sidebar Form</h3>
                                <div class="divider"><span></span></div>
                                <form method="post">
                                    <div class="form-group mb-3">
                                        <input class="form-control form--control" type="text" name="text" placeholder="Name" required>
                                        <span class="la la-user input-icon"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control form--control" type="email" name="email" placeholder="Email" required>
                                        <span class="la la-envelope input-icon"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea class="form-control form--control" name="message" rows="4" placeholder="Write message" required></textarea>
                                    </div>
                                    <div class="btn-box">
                                        <button class="btn theme-btn w-100" type="submit">Contact Author <i class="la la-arrow-right icon ml-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end card -->
                    </aside>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

@endsection
