
@php
    $blog = App\Models\BlogPost::with('blog')->latest()->limit(4)->get();
@endphp

{{-- <section class="blog-area section--padding bg-gray overflow-hidden">
    <div class="container">
        <div class="section-heading text-center">
            <h5 class="ribbon ribbon-lg mb-2">News feeds</h5>
            <h2 class="section__title">Latest News & Articles</h2>
            <span class="section-divider"></span>
        </div><!-- end section-heading -->
        <div class="blog-post-carousel owl-action-styled half-shape mt-30px">


           @foreach ($blog as $item)
            <div class="card card-item">
                <div class="card-image">
                    <a href="blog-single.html" class="d-block">
                        <img class="card-img-top" src="{{ asset($item->post_image) }}" alt="Card image cap">
                    </a>
                    <div class="course-badge-labels">
                        <div class="course-badge">
                            {{ $item->created_at->format('M d Y') }}</div>
                    </div>
                </div><!-- end card-image -->
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a></h5>
                    <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center flex-wrap fs-14 pt-2">
                        <li class="d-flex align-items-center">By<a href="#">Admin</a></li>
                        <li class="d-flex align-items-center"><a href="#">4 Comments</a></li>
                        <li class="d-flex align-items-center"><a href="#">130 Likes</a></li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center pt-3">
                        <a href="blog-single.html" class="btn theme-btn theme-btn-sm theme-btn-white">Read More <i class="la la-arrow-right icon ml-1"></i></a>
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

            @endforeach


        </div><!-- end blog-post-carousel -->
    </div><!-- end container -->
</section><!-- end blog-area --> --}}
<section class="blog__post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section__title text-center mb-40">
                    <span class="sub-title">News & Blogs</span>
                    <h2 class="title">Our Latest News Feed</h2>
                    <p>when known printer took a galley of type scrambl edmake</p>
                </div>
            </div>
        </div>

        <div class="row gutter-20">
            @foreach ($blog as $item)
            <div class="col-xl-3 col-md-6">
                <div class="blog__post-item shine__animate-item">
                    <div class="blog__post-thumb">
                        <a href="{{ url('blog/details/'.$item->post_slug) }}" class="shine__animate-link">
                            <img src="{{ asset($item->post_image) }}" alt="img"></a>
                        <a href="blog.html" class="post-tag">{{ $item->blog->category_name }}</a>
                    </div>
                    <div class="blog__post-content">
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}</li>
                                <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
