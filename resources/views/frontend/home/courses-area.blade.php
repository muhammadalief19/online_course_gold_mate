@php
    $courses = App\Models\Course::where('status', 1)->orderBy('id', 'ASC')->limit(6)->get();
    $categories = App\Models\Category::orderBy('category_name', 'ASC')->get();
@endphp

<section class="courses-area section-pt-120 section-pb-90" data-background="assets/img/bg/courses_bg.jpg">
    <div class="container">
        <div class="section__title-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">Top Class Courses</span>
                        <h2 class="title">Explore Our World's Best Courses</h2>
                        <p class="desc">Choose from a wide range of amazing courses</p>
                    </div>
                    <div class="courses__nav">
                        <ul class="nav nav-tabs" id="courseTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button"
                                    role="tab" aria-controls="all-tab-pane" aria-selected="true">All Courses</button>
                            </li>
                            @foreach ($categories as $category)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="category-tab-{{ $category->id }}" data-bs-toggle="tab" data-bs-target="#category-tab-pane-{{ $category->id }}" type="button"
                                    role="tab" aria-controls="category-tab-pane-{{ $category->id }}" aria-selected="false">
                                    {{ $category->category_name }}
                                </button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content" id="courseTabContent">
            <!-- All Courses Tab -->
            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                <div class="swiper courses-swiper-active">
                    <div class="swiper-wrapper">
                        @foreach ($courses as $course)
                        <div class="swiper-slide">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb @if ($course->bestseller == 1) bestseller @endif">
                                    <a href="{{ url('course/details/'.$course->id.'/'.$course->course_name_slug) }}" class="shine__animate-link">
                                        <div class="course-labels">
                                            @php
                                                $amount = $course->selling_price - $course->discount_price;
                                                $discount = ($amount / $course->selling_price) * 100;
                                            @endphp

                                            @if ($course->discount_price == NULL)
                                                <span class="courses__label new-label">New</span>
                                            @else
                                                <span class="courses__label discount-label">{{ round($discount) }}%</span>
                                            @endif

                                            @if ($course->bestseller == 1)
                                                <span class="courses__label bestseller-label">Bestseller</span>
                                            @endif
                                        </div>
                                        <img src="{{ asset($course->course_image) }}" alt="{{ $course->course_name }}">
                                    </a>
                                </div>

                                <style>
                                    .courses__item-thumb {
                                        position: relative;
                                        overflow: hidden;
                                    }

                                    .course-labels {
                                        position: absolute;
                                        top: 10px;
                                        left: 10px;
                                        display: flex;
                                        gap: 5px;
                                    }

                                    .courses__label {
                                        padding: 5px 10px;
                                        font-size: 12px;
                                        font-weight: bold;
                                        border-radius: 3px;
                                        color: #fff;
                                    }

                                    .discount-label {
                                        background: red;
                                    }

                                    .bestseller-label {
                                        background: gold;
                                        color: black;
                                    }

                                    .new-label {
                                        background: blue;
                                    }
                                </style>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">{{ $course['category']['category_name'] }}</a>
                                        </li>
                                        @php
                            $reviewcount = App\Models\Review::where('course_id',$course->id)->where('status',1)->latest()->get();
                            $avarage = App\Models\Review::where('course_id',$course->id)->where('status',1)->avg('rating');

                        @endphp
                            <li class="avg-rating">
                                <i class="fas fa-star"></i>
                                ({{ round($avarage, 1) }} Reviews)
                            </li>

                            @php
                            $enrollmentCount = App\Models\Order::where('course_id',$course->id)->count();
                        @endphp
                                    </ul>
                                    <h5 class="title">
                                        <a href="{{ url('course/details/'.$course->id.'/'.$course->course_name_slug) }}">{{ $course->course_name }}</a>
                                    </h5>
                                    <p class="author">By <a href="{{ route('instructor.details',$course->instructor_id) }}">{{ $course['user']['name'] }}</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="javascript:void(0);" onclick="addToCart({{ $course->id }}, '{{ $course->course_name }}', '{{ $course->instructor_id }}', '{{ $course->course_name_slug }}');">
                                                <span class="text">Add to Cart</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>

                                        <h5 class="price"><del>${{ $course->selling_price }}</del>
                                            ${{ $course->discount_price }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="courses__nav">
                    <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                    <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                </div>
            </div>

            <!-- Category-Specific Tabs -->
            @foreach ($categories as $category)
            <div class="tab-pane fade" id="category-tab-pane-{{ $category->id }}" role="tabpanel" aria-labelledby="category-tab-{{ $category->id }}" tabindex="0">
                <div class="swiper courses-swiper-active">
                    <div class="swiper-wrapper">
                        @php
                            $catwiseCourse = App\Models\Course::where('category_id', $category->id)->where('status', 1)->orderBy('id', 'DESC')->get();
                        @endphp

                        @foreach ($catwiseCourse as $course)
                        <div class="swiper-slide">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb @if ($course->bestseller == 1) bestseller @endif">
                                    <a href="{{ url('course/details/'.$course->id.'/'.$course->course_name_slug) }}" class="shine__animate-link">
                                        <div class="course-labels">
                                            @php
                                                $amount = $course->selling_price - $course->discount_price;
                                                $discount = ($amount / $course->selling_price) * 100;
                                            @endphp

                                            @if ($course->discount_price == NULL)
                                                <span class="courses__label new-label">New</span>
                                            @else
                                                <span class="courses__label discount-label">{{ round($discount) }}%</span>
                                            @endif

                                            @if ($course->bestseller == 1)
                                                <span class="courses__label bestseller-label">Bestseller</span>
                                            @endif
                                        </div>
                                        <img src="{{ asset($course->course_image) }}" alt="{{ $course->course_name }}">
                                    </a>
                                </div>

                                <style>
                                    .courses__item-thumb {
                                        position: relative;
                                        overflow: hidden;
                                    }

                                    .course-labels {
                                        position: absolute;
                                        top: 10px;
                                        left: 10px;
                                        display: flex;
                                        gap: 5px;
                                    }

                                    .courses__label {
                                        padding: 5px 10px;
                                        font-size: 12px;
                                        font-weight: bold;
                                        border-radius: 3px;
                                        color: #fff;
                                    }

                                    .discount-label {
                                        background: red;
                                    }

                                    .bestseller-label {
                                        background: gold;
                                        color: black;
                                    }

                                    .new-label {
                                        background: blue;
                                    }
                                </style>

                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">{{ $category->category_name }}</a>
                                        </li>
                                        @php
                            $reviewcount = App\Models\Review::where('course_id',$course->id)->where('status',1)->latest()->get();
                            $avarage = App\Models\Review::where('course_id',$course->id)->where('status',1)->avg('rating');

                        @endphp
                            <li class="avg-rating">
                                <i class="fas fa-star"></i>
                                ({{ round($avarage, 1) }} Reviews)
                            </li>

                            @php
                            $enrollmentCount = App\Models\Order::where('course_id',$course->id)->count();
                        @endphp
                                    </ul>
                                    <h5 class="title">
                                        <a href="{{ url('course/details/'.$course->id.'/'.$course->course_name_slug) }}">{{ $course->course_name }}</a>
                                    </h5>
                                    <p class="author">By <a href="{{ route('instructor.details',$course->instructor_id) }}">{{ $course['user']['name'] }}</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="javascript:void(0);" onclick="addToCart({{ $course->id }}, '{{ $course->course_name }}', '{{ $course->instructor_id }}', '{{ $course->course_name_slug }}');">
                                                <span class="text">Add to Cart</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>

                                        <h5 class="price"><del>${{ $course->selling_price }}</del>
                                            ${{ $course->discount_price }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="courses__nav">
                    <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                    <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
