@php
    $courses = App\Models\Course::where('status',1)->orderBy('id','ASC')->limit(6)->get();
    $categories = App\Models\Category::with(['course'])->orderBy('category_name','ASC')->get();
    $no = 0;
    $sumCategories = count($categories);
@endphp

<section class="courses-area section-pt-120 section-pb-90 mt-5" data-background="assets/img/bg/courses_bg.jpg" style="background-image: url(&quot;assets/img/bg/courses_bg.jpg&quot;);">
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
                                <button class="nav-link active" id="{{$item->category_slug}}" data-bs-toggle="tab" data-bs-target="#{{$item->category_slug}}-pane" type="button" role="tab" aria-controls="{{$item->category_slug}}-pane" aria-selected="true" fdprocessedid="sevhkk">
                                    {{ $item->category_name }}
                                </button>
                                @else
                                <button class="nav-link" id="{{$item->category_slug}}" data-bs-toggle="tab" data-bs-target="#{{$item->category_slug}}-pane" type="button" role="tab" aria-controls="{{$item->category_slug}}-pane" aria-selected="true" fdprocessedid="sevhkk">
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
                $no = 0
            @endphp
            @foreach ($categories as $item)
            @if ($no++ == 0)
            <div class="tab-pane fade show active" id="{{ $item->category_slug }}-pane" role="tabpanel" aria-labelledby="{{ $item->category_slug }}" tabindex="{{ $no }}">
                <div class="swiper courses-swiper-active swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-34dea0866d5229b5" aria-live="polite">
                        @foreach ($item->course as $course)
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="{{ ++$no }} / {{ $sumCategories }}" data-swiper-slide-index="{{ $no++ }}" style="width: 330px; margin-right: 30px;">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Development</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
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
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="courses__nav">
                    <div class="courses-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-576d372f57fc2922" fdprocessedid="mhmblm"><i class="flaticon-arrow-right"></i></div>
                    <div class="courses-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-576d372f57fc2922" fdprocessedid="zhj5b"><i class="flaticon-arrow-right"></i></div>
                </div>
            </div>
            @else
            <div class="tab-pane fade" id="{{ $item->category_slug }}-pane" role="tabpanel" aria-labelledby="{{ $item->category_slug }}" tabindex="{{ $no }}">
                <div class="swiper courses-swiper-active swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-34dea0866d5229b5" aria-live="polite">
                        @foreach ($item->course as $course)
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="{{ ++$no }} / {{ $sumCategories }}" data-swiper-slide-index="{{ $no++ }}" style="width: 330px; margin-right: 30px;">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Development</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
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
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="courses__nav">
                    <div class="courses-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-576d372f57fc2922" fdprocessedid="mhmblm"><i class="flaticon-arrow-right"></i></div>
                    <div class="courses-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-576d372f57fc2922" fdprocessedid="zhj5b"><i class="flaticon-arrow-right"></i></div>
                </div>
            </div>
            @endif
            @endforeach
            {{-- <div class="tab-pane fade" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                <div class="swiper courses-swiper-active swiper-initialized swiper-horizontal">
                    <div class="swiper-wrapper" id="swiper-wrapper-70dff47067f1e1a6" aria-live="polite" style="transition-duration: 0ms; transition-delay: 0ms;">
                        <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Marketing</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning Digital Marketing on Facebook</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$24.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Business</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Financial Analyst Training &amp; Investing Course</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$12.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Development</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
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
                        <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Design</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">The Complete Graphic Design for Beginners</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$19.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Data Science</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Data Analysis &amp; Visualization Masterclass</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$27.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb06.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Mathematic</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Master the Fundamentals of Math</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$10.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="courses__nav">
                    <div class="courses-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-576d372f57fc2922"><i class="flaticon-arrow-right"></i></div>
                    <div class="courses-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-576d372f57fc2922"><i class="flaticon-arrow-right"></i></div>
                </div>
            </div>
            <div class="tab-pane fade" id="business-tab-pane" role="tabpanel" aria-labelledby="business-tab" tabindex="0">
                <div class="swiper courses-swiper-active swiper-initialized swiper-horizontal">
                    <div class="swiper-wrapper" id="swiper-wrapper-c138ad996f94b82b" aria-live="polite" style="transition-duration: 0ms; transition-delay: 0ms;">
                        <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Design</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">The Complete Graphic Design for Beginners</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$19.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Marketing</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning Digital Marketing on Facebook</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$24.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Business</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Financial Analyst Training &amp; Investing Course</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$12.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Data Science</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Data Analysis &amp; Visualization Masterclass</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$27.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Development</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
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
                        <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb06.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Mathematic</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Master the Fundamentals of Math</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$10.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="courses__nav">
                    <div class="courses-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-576d372f57fc2922"><i class="flaticon-arrow-right"></i></div>
                    <div class="courses-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-576d372f57fc2922"><i class="flaticon-arrow-right"></i></div>
                </div>
            </div>
            <div class="tab-pane fade" id="development-tab-pane" role="tabpanel" aria-labelledby="development-tab" tabindex="0">
                <div class="swiper courses-swiper-active swiper-initialized swiper-horizontal">
                    <div class="swiper-wrapper" id="swiper-wrapper-576d372f57fc2922" aria-live="polite" style="transition-duration: 0ms; transition-delay: 0ms;">
                        <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Business</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Financial Analyst Training &amp; Investing Course</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$12.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Data Science</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Data Analysis &amp; Visualization Masterclass</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$27.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb06.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Mathematic</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Master the Fundamentals of Math</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$10.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Development</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning JavaScript With Imagination</a></h5>
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
                        <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Design</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">The Complete Graphic Design for Beginners</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$19.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 6">
                            <div class="courses__item shine__animate-item">
                                <div class="courses__item-thumb">
                                    <a href="course-details.html" class="shine__animate-link">
                                        <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="course.html">Marketing</a>
                                        </li>
                                        <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                    </ul>
                                    <h5 class="title"><a href="course-details.html">Learning Digital Marketing on Facebook</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>
                                    <div class="courses__item-bottom">
                                        <div class="button">
                                            <a href="course-details.html">
                                                <span class="text">Enroll Now</span>
                                                <i class="flaticon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <h5 class="price">$24.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="courses__nav">
                    <div class="courses-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-576d372f57fc2922"><i class="flaticon-arrow-right"></i></div>
                    <div class="courses-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-576d372f57fc2922"><i class="flaticon-arrow-right"></i></div>
                </div>
            </div> --}}
        </div>
    </div>
</section><!-- end courses-area -->


