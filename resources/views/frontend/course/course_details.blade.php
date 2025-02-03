@extends('frontend.master')
@section('title')
{{ $course->course_name }} | Easy Learning
@endsection
@section('home')


    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg breadcrumb__bg-two" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="#">{{ $course['category']['category_name'] }}</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">{{ $course['subcategory']['subcategory_name'] }}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
            <img src="{{ asset('') }}assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    {{-- courses-details-area --}}
    <section class="courses__details-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="courses__details-thumb">
                        <img src="{{asset('') }}{{$course->course_image}}" alt="img">
                    </div>
                    <div class="courses__details-content">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="/">{{ $course['category']['category_name'] }}</a>
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
                        <h2 class="title">{{ $course->course_name }}</h2>
                        <div class="courses__details-meta">
                            <ul class="list-wrap">
                                <li class="author-two">
                                    <img src="{{ (!empty($course->user->photo)) ? url('upload/instructor_images/'.$course->user->photo) : url('upload/no_image.jpg') }}" alt="img" class="small-image">
                                    <style>
                                        .small-image {
    width: 50px;
    height: 50px;
    border-radius: 50%; /* Membuat gambar menjadi lingkaran */
}

                                    </style>
                                    By
                                    <a href="#">{{ $course['user']['name'] }}</a>
                                </li>
                                <li class="date"><i class="flaticon-calendar"></i>{{ $course->created_at->format('d F, Y') }}</li>
                                <li><i class="flaticon-mortarboard"></i>{{ number_format($enrollmentCount) }} Students</li>
                            </ul>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum-tab-pane" type="button" role="tab" aria-controls="curriculum-tab-pane" aria-selected="false">Curriculum</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="instructors-tab" data-bs-toggle="tab" data-bs-target="#instructors-tab-pane" type="button" role="tab" aria-controls="instructors-tab-pane" aria-selected="false">Instructors</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane" aria-selected="false">reviews</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                                <div class="courses__overview-wrap">
                                    <h3 class="title">Course Description</h3>
                                    {!! $course->description !!}
                                    <h3 class="title">What you'll learn in this course?</h3>
                                    <p>{!! $course->prerequisites !!}</p>
                                    @foreach ($goals as $goal)
                                    <ul class="about__info-list list-wrap">
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">{{ $goal->goal_name }}</p>
                                        </li>
                                    </ul>
                                    @endforeach
                                    <p class="last-info">Morem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="curriculum-tab-pane" role="tabpanel" aria-labelledby="curriculum-tab" tabindex="0">
                                <div class="courses__curriculum-wrap">
                                    <h3 class="title">Course Curriculum</h3>
                                    <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                                    <div class="accordion" id="accordionExample">

                                        @php
                                            // Mengambil semua section berdasarkan course_id
                                            $sections = App\Models\CourseSection::where('course_id', $course->id)->orderBy('id', 'asc')->get();
                                        @endphp

                                        @foreach ($sections as $sec)
                                            @php
                                                // Mengambil semua lecture berdasarkan section_id
                                                $lectures = App\Models\CourseLecture::where('section_id', $sec->id)->get();
                                            @endphp

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading{{ $sec->id }}">
                                                    <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $sec->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $sec->id }}">
                                                        {{ $sec->section_title }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{ $sec->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{ $sec->id }}" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap">
                                                            @foreach ($lectures as $lect)
                                                                <li class="course-item">
                                                                    <!-- Menggunakan data-video-url untuk menyimpan link YouTube dari lecture -->
                                                                    <a href="javascript:void(0)" class="course-item-link" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-url="{{ $lect->url }}">
                                                                        <span class="item-name">{{ $lect->lecture_title }}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{ gmdate("i:s", $lect->duration) }}</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="instructors-tab-pane" role="tabpanel" aria-labelledby="instructors-tab" tabindex="0">
                                <div class="courses__instructors-wrap">
                                    <div class="courses__instructors-thumb">
                                        <img src="{{ (!empty($course->user->photo)) ? url('upload/instructor_images/'.$course->user->photo) : url('upload/no_image.jpg')}}" alt="img">
                                    </div>
                                    <div class="courses__instructors-content">
                                        <h2 class="title">{{ $course['user']['name'] }}</h2>
                                        <span class="designation">UX Design Lead</span>
                                        <p class="avg-rating"><i class="fas fa-star"></i>(4.8 Ratings)</p>
                                        <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                                        <div class="instructor__social">
                                            <ul class="list-wrap justify-content-start">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
                                <div class="courses__rating-wrap">
                                    <div class="course-overview-card pt-4">
                                        <h3 class="fs-24 font-weight-semi-bold pb-40px">Student Feedback</h3>
                                        <div class="feedback-wrap">
                                            <div class="media media-card align-items-center">
                                                <div class="review-rating-summary text-center">
                                                    <span class="stats-average__count display-4 font-weight-bold text-primary">{{ round($avarage,1) }}</span>
                                                    <div class="rating-wrap pt-1">
                                                        <div class="review-stars d-flex justify-content-center">
                                                            @if ($avarage == 0)
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    <span class="la la-star-o text-muted"></span>
                                                                @endfor
                                                            @else
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    <span class="la {{ $i <= $avarage ? 'la-star text-warning' : 'la-star-o text-muted' }}"></span>
                                                                @endfor
                                                            @endif
                                                        </div>
                                                        <span class="rating-total d-block mt-2">({{ count($reviewcount) }}) Total Ratings</span>
                                                        <span class="text-secondary">Overall Course Rating</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    @php
                                                        $reviewcount = App\Models\Review::where('course_id', $course->id)
                                                            ->where('status', 1)
                                                            ->select('rating', DB::raw('count(*) as count'))
                                                            ->groupBy('rating')
                                                            ->orderBy('rating', 'desc')
                                                            ->get();
                                                        $totalReviews = $reviewcount->sum('count');
                                                        $percentages = [];
                                                        for ($i = 5; $i >= 1; $i--) {
                                                            $ratingCount = $reviewcount->where('rating', $i)->first();
                                                            $count = $ratingCount ? $ratingCount->count : 0;
                                                            $percent = $totalReviews > 0 ? ($count / $totalReviews) * 100 : 0;
                                                            $percentages[] = [
                                                                'rating' => $i,
                                                                'percent' => $percent,
                                                                'count' => $count,
                                                            ];
                                                        }
                                                    @endphp
                                                    @if (count($percentages) > 0)
                                                        @foreach ($percentages as $ratingInfo)
                                                            <div class="review-bars d-flex align-items-center mb-2">
                                                                <div class="review-bars__text col-2 text-right">{{ $ratingInfo['rating'] }}<span class="la la-star text-warning"></span></div>
                                                                <div class="review-bars__fill col-8 px-2">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $ratingInfo['percent'] }}%;" aria-valuenow="{{ $ratingInfo['percent'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="review-bars__percent col-2 text-left">{{ number_format($ratingInfo['percent'], 2) }}%</div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <p class="text-muted">No Reviews Available</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Reviews Section -->
                                    <div class="course-overview-card pt-4">
                                        <h3 class="fs-24 font-weight-semi-bold pb-4">Reviews</h3>
                                        @guest
                                            <p><b><a href="{{ route('login') }}"></a></b></p>
                                        @else
                                            <div class="review-wrap">
                                                @php
                                                    $reviews = App\Models\Review::where('course_id', $course->id)
                                                        ->where('status', 1)
                                                        ->latest()
                                                        ->limit(5)
                                                        ->get();
                                                @endphp
                                                @foreach ($reviews as $item)
                                                <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4 d-flex">
                                                    <div class="media-img mr-3">
                                                        <img class="rounded-circle" src="{{ !empty($item->user->photo) ? url('upload/user_images/' . $item->user->photo) : url('upload/no_image.jpg') }}" alt="User image" style="width: 50px; height: 50px;">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h5 class="text-primary mb-0">{{ $item->user->name }}</h5>
                                                            <div class="review-stars">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    <label class="star {{ $i <= $item->rating ? 'star-filled' : 'star-empty' }}">&#9733;</label>
                                                                @endfor
                                                                <span class="badge badge-primary ml-2">{{ $item->rating }} / 5</span>
                                                            </div>
                                                        </div>
                                                        <span class="d-block text-secondary small mb-2">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                                        <p class="mb-2">{{ $item->comment }}</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="see-more-review-btn text-center">
                                                <button type="button" class="btn theme-btn theme-btn-transparent">Load more reviews</button>
                                            </div>
                                        @endguest
                                    </div>

                                    <!-- Add Review Section -->
                                    <div class="course-overview-card pt-4">
                                        <h3 class="fs-24 font-weight-semi-bold pb-4">Add a Review</h3>
                                        @guest
                                            <p><b>To add a review, please <a href="{{ route('login') }}">log in here</a>.</b></p>
                                        @else
                                            <form method="post" action="{{ route('store.review') }}" class="row">
                                                @csrf
                                                <div class="leave-rating-wrap pb-4">
                                                    <div class="leave-rating leave--rating">
                                                        <style>
                                                            .leave-rating input[type="radio"] {
                                                                display: none;
                                                            }
                                                            .leave-rating label {
                                                                font-size: 2rem;
                                                                cursor: pointer;
                                                                color: #ccc;
                                                                transition: color 0.2s ease-in-out;
                                                            }
                                                            .leave-rating label:hover,
                                                            .leave-rating label:hover ~ label {
                                                                color: #f5b301;
                                                            }
                                                            .leave-rating input[type="radio"]:checked ~ label {
                                                                color: #f5b301;
                                                            }
                                                            .star {
                                                                font-size: 2rem;
                                                                color: #ccc;
                                                                cursor: default;
                                                            }
                                                            .star.star-filled {
                                                                color: #f5b301;
                                                            }
                                                            .star.star-empty {
                                                                color: #ccc;
                                                            }
                                                        </style>
                                                        @for ($i = 5; $i >= 1; $i--)
                                                            <input type="radio" name="rate" id="star{{ $i }}" value="{{ $i }}" />
                                                            <label for="star{{ $i }}">&#9733;</label>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                                <input type="hidden" name="instructor_id" value="{{ $course->instructor_id }}">
                                                <div class="input-box col-lg-12">
                                                    <label class="label-text">Message</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control form--control pl-3" name="comment" placeholder="Write your review here..." rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="btn-box col-lg-12">
                                                    <button class="btn theme-btn" type="submit">Submit Review</button>
                                                </div>
                                            </form>
                                        @endguest
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="courses__details-sidebar">
                        <div class="courses__details-video position-relative">
                            <img src="{{ asset($course->course_image) }}" alt="img" class="w-100 rounded">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#previewModal" class="play-icon">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade modal-container" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-gray">
                                        <div class="pr-2">
                                            <p class="pb-2 font-weight-semi-bold">Course Preview</p>
                                            <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="previewModalTitle">{{ $course->course_name }}</h5>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="la la-times"></span>
                                        </button>
                                    </div>
                                    <!-- end modal-header -->
                                    <div class="modal-body">
                                        <video controls crossorigin playsinline poster="{{ asset($course->course_image) }}" id="player" class="w-100">
                                            <source src="{{ asset($course->video) }}" type="video/mp4" />
                                        </video>
                                    </div>
                                    <!-- end modal-body -->
                                </div>
                                <!-- end modal-content -->
                            </div>
                            <!-- end modal-dialog -->
                        </div>
                        <!-- end modal -->

                        <style>
                            .courses__details-video {
                                position: relative;
                            }

                            .courses__details-video .play-icon {
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                font-size: 2.5rem; /* Ukuran ikon */
                                color: white; /* Warna ikon */
                                background-color: rgba(0, 0, 0, 0.6); /* Latar belakang semi-transparan */
                                border-radius: 50%; /* Membuat latar belakang bulat */
                                padding: 15px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                transition: background-color 0.3s ease;
                            }

                            .courses__details-video .play-icon:hover {
                                background-color: rgba(0, 0, 0, 0.8); /* Warna saat hover */
                                color: #fff;
                            }
                        </style>


                        <div class="courses__cost-wrap">
                            <span>This Course Fee:</span>
                            <h2 class="title">${{ $course->discount_price }}.00 <del> ${{ $course->selling_price }}.00</del></h2>
                        </div>
                        <div class="courses__information-wrap">
                            <h5 class="title">Course includes:</h5>
                            <ul class="list-wrap">
                                <li>
                                    <img src="{{asset('')}}assets/img/icons/course_icon01.svg" alt="img" class="injectable">
                                    Level
                                    <span>{{ $course->label }}</span>
                                </li>
                                <li>
                                    <img src="{{asset('')}}assets/img/icons/course_icon02.svg" alt="img" class="injectable">
                                    Duration
                                    <span>
                                        {{ $course->duration }}
                                    </span>
                                </li>
                                <li>
                                    <img src="{{asset('')}}assets/img/icons/course_icon03.svg" alt="img" class="injectable">
                                    Lessons
                                    <span>{{ $course->resources }}</span>
                                </li>
                                <li>
                                    <img src="{{asset('')}}assets/img/icons/course_icon04.svg" alt="img" class="injectable">
                                    Quizzes
                                    <span>145</span>
                                </li>
                                <li>
                                    <img src="{{asset('')}}assets/img/icons/course_icon05.svg" alt="img" class="injectable">
                                    Certifications
                                    <span>{{ $course->certificate }}</span>
                                </li>
                                <li>
                                    <img src="{{asset('')}}assets/img/icons/course_icon06.svg" alt="img" class="injectable">
                                    Graduation
                                    <span>25K</span>
                                </li>
                            </ul>
                        </div>
                        <div class="courses__payment">
                            <h5 class="title">Secure Payment:</h5>
                            <img src="{{asset('')}}assets/img/others/payment.png" alt="img">
                        </div>
                        <div class="courses__details-social">
                            <h5 class="title">Share this course:</h5>
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="courses__details-enroll" style="margin-bottom: 20px;">
                            <div class="tg-button-wrap">
                                <a href="{{ route('mycart') }}" onclick="addToCart({{ $course->id }}, '{{ $course->course_name }}', '{{ $course->instructor_id }}', '{{ $course->course_name_slug }}'); window.location.href='/cart';" class="btn btn-two arrow-btn">
                                    Add To Cart
                                    <img src="{{ asset('') }}assets/img/icons/cart.svg" alt="img" class="injectable">
                                </a>
                            </div>
                        </div>

                        <div class="courses__details-enroll" style="margin-bottom: 20px;">
                            <div class="tg-button-wrap">
                                <a href="{{ route('checkout') }}" onclick="buyCourse({{ $course->id }}, '{{ $course->course_name }}', '{{ $course->instructor_id }}', '{{ $course->course_name_slug }}' )" class="btn btn-two arrow-btn">
                                    Buy this course
                                    <img src="{{asset('') }}assets/img/icons/right_arrow.svg" alt="img" class="injectable">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- courses-details-area-end -->


@endsection
