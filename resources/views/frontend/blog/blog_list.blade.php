@extends('frontend.master')
@section('home')



<main class="main-area fix">
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
                            <span property="itemListElement" typeof="ListItem">Blog</span>
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

    <section class="blog-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="row gutter-20">
                        @foreach ($blog->take(9) as $item)
                            <div class="col-xl-4 col-md-6">
                                <div class="blog__post-item shine__animate-item">
                                    <div class="blog__post-thumb">
                                        <a href="{{ url('blog/details/'.$item->post_slug) }}" class="shine__animate-link">
                                            <img class="card-img-top lazy" src="{{ asset($item->post_image) }}" alt="{{ $item->post_title }}">
                                        </a>
                                        <a href="/blog" class="post-tag">{{ $item->blog->category_name }}</a>
                                    </div>
                                    <div class="blog__post-content">
                                        <div class="blog__post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}</li>
                                                <li><i class="flaticon-user-1"></i>by <a href="/blog_detail">Admin</a></li>
                                            </ul>
                                        </div>
                                        <h4 class="title">
                                            <a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center pt-3">
                        
                        <nav class="pagination__wrap mt-25">
                            <ul class="list-wrap">
                                @if ($blog->onFirstPage())
                                    <li class="active"><a href="#">1</a></li>
                                @else
                                    <li><a href="{{ $blog->url(1) }}">1</a></li>
                                @endif

                                @for ($i = 2; $i <= $blog->lastPage(); $i++)
                                    @if ($i == $blog->currentPage())
                                        <li class="active"><a href="#">{{ $i }}</a></li>
                                    @else
                                        <li><a href="{{ $blog->url($i) }}">{{ $i }}</a></li>
                                    @endif
                                @endfor
                            </ul>
                        </nav>
                    </div>
                </div>
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
            </div>
        </div>
    </section>
</main>

@endsection
