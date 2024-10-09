@php
    $courses = App\Models\Course::where('status', 1)->orderBy('id', 'ASC')->limit(6)->get();
    $categories = App\Models\Category::with(['course'])
        ->orderBy('category_name', 'ASC')
        ->get();
    $no = 0;
    $sumCategories = count($categories);
@endphp

<section class="courses-area section-pt-120 section-pb-90 mt-5" data-background="assets/img/bg/courses_bg.jpg"
    style="background-image: url(&quot;assets/img/bg/courses_bg.jpg&quot;);">
    <div class="container">
        <div class="section__title-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">Top Class Courses</span>
                        <h2 class="title">Explore Our World's Best Courses</h2>
                        <p class="desc">When known printer took a galley of type scrambl edmake</p>
                    </div>
                    <div class="courses__nav">
                        <ul class="nav nav-tabs" id="courseTab" role="tablist">
                            @foreach ($categories as $item)
                                <li class="nav-item" role="presentation">
                                    @if ($no++ == 0)
                                        <button class="nav-link active" id="{{ $item->category_slug }}"
                                            data-bs-toggle="tab" data-bs-target="#{{ $item->category_slug }}-pane"
                                            type="button" role="tab"
                                            aria-controls="{{ $item->category_slug }}-pane" aria-selected="true"
                                            fdprocessedid="sevhkk">
                                            {{ $item->category_name }}
                                        </button>
                                    @else
                                        <button class="nav-link" id="{{ $item->category_slug }}" data-bs-toggle="tab"
                                            data-bs-target="#{{ $item->category_slug }}-pane" type="button"
                                            role="tab" aria-controls="{{ $item->category_slug }}-pane"
                                            aria-selected="true" fdprocessedid="sevhkk">
                                            {{ $item->category_name }}
                                        </button>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="courseTabContent">
            @php
                $no = 0;
            @endphp
            @foreach ($categories as $item)
                @if ($no++ == 0)
                    <div class="tab-pane fade show active" id="{{ $item->category_slug }}-pane" role="tabpanel"
                        aria-labelledby="{{ $item->category_slug }}" tabindex="0">
                        <div class="swiper courses-swiper-active">
                            <div class="swiper-wrapper">
                                @php
                                    $catwiseCourse = App\Models\Course::where('category_id', $item->id)
                                        ->where('status', 1)
                                        ->orderBy('id', 'DESC')
                                        ->get();
                                @endphp
                                @foreach ($catwiseCourse as $course)
                                    <div class="swiper-slide">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('') }}{{ $course->course_image }}" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a
                                                            href="course.html">{{ $course->category->category_name }}</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)
                                                    </li>
                                                </ul>
                                                <h5 class="title"><a
                                                        href="course-details.html">{{ $course->course_name }}</a></h5>
                                                <p class="author">By <a href="#">{{ $course->user->name }}</a>
                                                </p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.html">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$15.00</h5>
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
                @else
                    <div class="tab-pane fade" id="{{ $item->category_slug }}-pane" role="tabpanel"
                        aria-labelledby="{{ $item->category_slug }}" tabindex="0">
                        <div class="swiper courses-swiper-active">
                            <div class="swiper-wrapper">
                                @foreach ($item->course as $course)
                                    <div class="swiper-slide">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('') }}{{ $course->course_image }}" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">{{ $course->category->category_name }}</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)
                                                    </li>
                                                </ul>
                                                <a class="title" ><h5>{{ $course->course_name }}</h5></a>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.html">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$15.00</h5>
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
                @endif
            @endforeach
        </div>
    </div>
</section><!-- end courses-area -->
