@php
    $category = App\Models\Category::latest()->limit(6)->get();
@endphp
<section class="category-area pb-90px">
    <div class="container">
        <div class="row align-items-center">
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Trending Categories</span>
                            <h2 class="title">Top Category We Have</h2>
                            <p class="desc">when known printer took a galley of type scrambl edmake</p>
                        </div>
                    </div>
                </div>

            </div><!-- end col-lg-9 -->
            <div class="col-lg-3"><!-- end category-btn-box-->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="category-wrapper mt-30px">
            <div class="row">
                <div class="col-12">
                    <div class="categories__wrap">
                        <div class="swiper categories-active">
                            <div class="swiper-wrapper">
                                @foreach ($category as $cat)
                                    @php
                                        $course = App\Models\Course::where('category_id', $cat->id)->get();
                                    @endphp
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="{{ url('category/'.$cat->id.'/'.$cat->category_slug) }}">
                                                <div class="icon">
                                                    <div class="icon-circle">
                                                        <img class="cat__img lazy" src="{{ asset($cat->image) }}" data-src="{{ asset($cat->image) }}" alt="Category image">
                                                        <i class="flaticon-{{ strtolower(str_replace(' ', '-', $cat->category_name)) }}"></i>
                                                    </div>
                                                </div>

                                                <style>
                                                    .icon-circle {
                                                        position: relative;
                                                        width: 80px; /* Ukuran lingkaran */
                                                        height: 80px; /* Ukuran lingkaran */
                                                        border-radius: 50%; /* Membuat elemen berbentuk lingkaran */
                                                        overflow: hidden; /* Menyembunyikan bagian gambar yang keluar dari lingkaran */
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: #f0f0f0; /* Warna background jika dibutuhkan */
                                                    }

                                                    .cat__img {
                                                        width: 100%;
                                                        height: 100%;
                                                        object-fit: cover; /* Memastikan gambar memenuhi lingkaran secara proporsional */
                                                        object-position: center; /* Memusatkan gambar */
                                                    }

                                                    .icon i {
                                                        position: absolute;
                                                        font-size: 24px;
                                                        color: white; /* Sesuaikan warna ikon */
                                                        z-index: 1;
                                                    }
                                                </style>

                                                <span class="name">{{ $cat->category_name }}</span>
                                                <span class="courses">({{ count($course) }} courses)</span>
                                            </a>
                                        </div><!-- end categories__item -->
                                    </div><!-- end swiper-slide -->
                                @endforeach
                            </div><!-- end swiper-wrapper -->
                        </div><!-- end swiper -->
                        <div class="categories__nav">
                            <button class="categories-button-prev">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 7L1 7M1 7L7 1M1 7L7 13" stroke="#161439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="categories-button-next">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="#161439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div><!-- end categories__nav -->
                    </div><!-- end categories__wrap -->
                </div><!-- end col-12 -->
            </div><!-- end row -->
        </div><!-- end category-wrapper -->
    </div><!-- end container -->
</section><!-- end category-area -->
