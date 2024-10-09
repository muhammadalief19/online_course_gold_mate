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
                                <a href="/">Home</a>
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

                <!-- Disqus Comments Section -->
                <div class="comments-wrap pt-5" id="comments">
                    <div id="disqus_thread"></div>
                    <script>
                        var disqus_config = function () {
                            this.page.url = "{{ url()->current() }}";  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = "{{ $blog->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };

                        (function() {  // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://http-127-0-0-1-8000-e7a5ag39aw.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div><!-- end comments-wrap -->



            </div><!-- end col-lg-8 -->

            <!-- Sidebar -->
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
                </aside>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       END BLOG AREA
================================= -->

@endsection
