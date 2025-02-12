
@php
    $blog = App\Models\BlogPost::with('blog')->latest()->limit(4)->get();
@endphp
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
