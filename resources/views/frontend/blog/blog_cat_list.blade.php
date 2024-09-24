@extends('frontend.master')
@section('home')

{{--<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">{{ $breadcat->category_name }} Category</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
                <li>{{ $breadcat->category_name }}</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="row">






                </div><!-- end row -->
                <div class="text-center pt-3">
                    <nav aria-label="Page navigation example" class="pagination-box">

                  {{-- {{ $blog->links() }} --

                  {{ $blog->links('vendor.pagination.custom') }}

                    </nav>

                </div>
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Blog Category</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item">
                                @foreach ($bcategory as $cat)
                                <li><a href="{{ url('blog/cat/list/'.$cat->id) }}">{{ $cat->category_name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Recent Posts</h3>
                            <div class="divider"><span></span></div>

                           @foreach ($post as $dpost)
                            <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                                <a href="{{ url('blog/details/'.$dpost->post_slug) }}" class="media-img">
                                    <img class="mr-3" src="{{ asset($dpost->post_image) }}" alt="Related course image">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-15"><a href="{{ url('blog/details/'.$dpost->post_slug) }}">{{ $dpost->post_title }}</a></h5>
                                    <span class="d-block lh-18 py-1 fs-14">Admin </span>
                                </div>
                            </div><!-- end media -->

                            @endforeach

                            <div class="view-all-course-btn-box">
                                <a href="blog-no-sidebar.html" class="btn theme-btn w-100">View All Posts <i class="la la-arrow-right icon ml-1"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->


                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Sidebar Form</h3>
                            <div class="divider"><span></span></div>
                            <form method="post" action="https://formspree.io/f/mwpejbeo">
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="full-name" id="full-name" placeholder="Name">
                                    <span class="la la-user input-icon"></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form--control" type="email" name="email" placeholder="Email">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form--control pl-3" name="message" id="message" rows="4" placeholder="Write message"></textarea>
                                </div>
                                <div class="btn-box">
                                    <button class="btn theme-btn w-100">Contact Author <i class="la la-arrow-right icon ml-1"></i></button>
                                </div>
                            </form>
                        </div>
                    </div><!-- end card -->

                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Connect & Follow</h3>
                            <div class="divider"><span></span></div>
                            <ul class="social-icons social-icons-styled social--icons-styled">
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-instagram"></i></a></li>
                                <li><a href="#"><i class="la la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= --> --}}


<main class="main-area fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Halaman Blog</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Blogs</span>
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

   <!-- blog-area -->
<section class="blog-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="row gutter-20">

                    <!-- Loop through blog items, limit to 9 items and 3 per row -->
                    @foreach ($blog->take(9) as $item)
                    <div class="col-xl-4 col-md-6"> <!-- 3 per row -->
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="{{ url('blog/details/'.$item->post_slug) }}">
                                    <img class="card-img-top lazy" src="{{ asset($item->post_image) }}" alt="{{ $item->post_title }}">
                                </a>
                                <a href="/blog" class="post-tag">{{ $item->blog->category_name }}</a> <!-- Menampilkan category_name -->
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}</li>
                                        <li><i class="flaticon-user-1"></i>by <a href="/blog_detail">Admin</a></li>
                                    </ul>
                                </div>
                                <h4 class="title">
                                    <a href="{{ url('blog/details/'.$item->post_slug) }}">
                                        {{ $item->post_title }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- Slider/Pagination for more than 9 posts -->
                @if ($blog->count() > 9)
                <nav class="pagination__wrap mt-25">
                    <ul class="list-wrap">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="/blog?page=2">2</a></li>
                        <li><a href="/blog?page=3">3</a></li>
                        <li><a href="/blog?page=4">4</a></li>
                    </ul>
                </nav>
                @endif
            </div>

            <!-- Sidebar Area -->
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
                        <h4 class="widget-title">Latest Post</h4>
                        <div class="rc-post-item">
                            <div class="rc-post-thumb">
                                <a href="/blog_detail">
                                    <img src="assets/img/blog/latest_post01.jpg" alt="img">
                                </a>
                            </div>
                            <div class="rc-post-content">
                                <span class="date"><i class="flaticon-calendar"></i> April 13, 2024</span>
                                <h4 class="title"><a href="/blog_detail">The Right Learning Path for You</a></h4>
                            </div>
                        </div>
                        <!-- Add more latest posts as needed -->
                    </div>
                    <div class="blog-widget">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tagcloud">
                            <a href="#">Education</a>
                            <a href="#">Training</a>
                            <a href="#">Online</a>
                            <a href="#">Learn</a>
                            <a href="#">Course</a>
                            <a href="#">LMS</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->


    </main>
    <!-- main-area-end -->


@endsection


{{--
    <div class="col-lg-6">
        <div class="card card-item">
            <div class="card-image">
                <a href="blog-single.html" class="d-block">
                    <img class="card-img-top lazy" src="{{ asset($item->post_image)  }}" data-src="images/img8.jpg" alt="Card image cap">
                </a>
                <div class="course-badge-labels">
                </div>
            </div><!-- end card-image -->
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a></h5>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center flex-wrap fs-14 pt-2">
                    <li class="d-flex align-items-center">By<a href="#">Admin </a></li>
                    <li class="d-flex align-items-center"><a href="#">4 Comments</a></li>
                    <li class="d-flex align-items-center"><a href="#">130 Likes</a></li>
                </ul>
                <div class="d-flex justify-content-between align-items-center pt-3">
                    <a href="{{ url('blog/details/'.$item->post_slug) }}" class="btn theme-btn theme-btn-sm theme-btn-white">Read More <i class="la la-arrow-right icon ml-1"></i></a>
                    <div class="share-wrap">
                        <ul class="social-icons social-icons-styled">
                            <li class="mr-0"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                            <li class="mr-0"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                            <li class="mr-0"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                        </ul>
                        <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="Toggle to expand social icons"><i class="la la-share-alt"></i></div>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col-lg-6 -->
    <div class="col">
        <div class="courses__item shine__animate-item">
            <div class="courses__item-thumb">
                <a href="/course_detail" class="shine__animate-link">
                    <img src="{{ asset($item->post_image) }}" alt="img">
                </a>
            </div>
            <div class="courses__item-content">
                <ul class="courses__item-meta list-wrap">
                    <li class="courses__item-tag">
                        <a href="course.html">Data Science</a>
                    </li>
                    <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                </ul>
                <h5 class="title"><a href="/course_detail">{{ $item->post_title }}</a></h5>
                <p class="author">By <a href="#">Guy Hawkins</a></p>
                <div class="courses__item-bottom">
                    <div class="button">
                        <a href="/course_detail">
                            <span class="text">Enroll Now</span>
                            <i class="flaticon-arrow-right"></i>
                        </a>
                    </div>
                    <h5 class="price">$27.00</h5>
                </div>
            </div>
        </div>
    </div>
    @endforeach --}}