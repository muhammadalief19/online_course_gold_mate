@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')
{{--
<div class="container-fluid">

    <div class="section-block mb-5"></div>
    <div class="dashboard-heading mb-5">
        <h3 class="fs-22 font-weight-semi-bold">My Courses</h3>
    </div>
    <div class="dashboard-cards mb-5">

       @foreach ($mycourse as $item)
        <div class="card card-item card-item-list-layout">
            <div class="card-image">
                <a href="{{ route('course.view',$item->course_id) }}" class="d-block">
                    <img class="card-img-top" src="{{ asset($item->course->course_image) }}" alt="Card image cap">
                </a>

            </div><!-- end card-image -->
            <div class="card-body">
                <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{ $item->course->label }}</h6>
                <h5 class="card-title"><a href="{{ route('course.view',$item->course_id) }}">{{ $item->course->course_name }}</a></h5>
                <p class="card-text"><a href="teacher-detail.html">{{ $item->course->user->name }}</a></p>
                <div class="rating-wrap d-flex align-items-center py-2">
                    <div class="review-stars">
                        <span class="rating-number">4.4</span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star-o"></span>
                    </div>
                    <span class="rating-total pl-1">(20,230)</span>
                </div><!-- end rating-wrap -->
                <ul class="card-duration d-flex align-items-center fs-15 pb-2">
                    <li class="mr-2">
                        <span class="text-black">Status:</span>
                        <span class="badge badge-success text-white">Published</span>
                    </li>
                    <li class="mr-2">
                        <span class="text-black">Duration:</span>
                        <span>{{ $item->course->duration }} hours </span>
                    </li>
                    <li class="mr-2">
                        <span class="text-black">Students:</span>
                        <span>30,405</span>
                    </li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-price text-black font-weight-bold">${{ $item->course->selling_price }}</p>
                    <div class="card-action-wrap pl-3">
                        <a href="course-details.html" class="icon-element icon-element-sm shadow-sm cursor-pointer ml-1 text-success" data-toggle="tooltip" data-placement="top" data-title="View"><i class="la la-eye"></i></a>
                        <div class="icon-element icon-element-sm shadow-sm cursor-pointer ml-1 text-secondary" data-toggle="tooltip" data-placement="top" data-title="Edit"><i class="la la-edit"></i></div>
                        <div class="icon-element icon-element-sm shadow-sm cursor-pointer ml-1 text-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                            <span data-toggle="modal" data-target="#itemDeleteModal" class="w-100 h-100 d-inline-block"><i class="la la-trash"></i></span>
                        </div>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
        @endforeach



    </div><!-- end col-lg-12 -->


</div><!-- end container-fluid --> --}}





<div class="col-lg-9">
    <div class="dashboard__content-wrap dashboard__content-wrap-two">
        <div class="dashboard__content-title">
            <h4 class="title">Enrolled Courses</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="dashboard__nav-wrap">
                    <ul class="nav nav-tabs" id="courseTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button"
                                role="tab" aria-controls="all-tab-pane" aria-selected="true">
                                Enrolled Courses
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button"
                                role="tab" aria-controls="design-tab-pane" aria-selected="false">
                                Active Courses
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="business-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button"
                                role="tab" aria-controls="business-tab-pane" aria-selected="false">
                                Completed Courses
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="courseTabContent">
                    <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                        <div class="swiper dashboard-courses-active">
                            <div class="swiper-wrapper">

                                @foreach ($mycourse as $item)
                                <div class="swiper-slide">
                                    <div class="courses__item courses__item-two shine__animate-item">
                                        <div class="courses__item-thumb courses__item-thumb-two">
                                            <a href="{{ route('course.view', $item->course_id) }}" class="shine__animate-link">
                                                <img src="{{ asset($item->course->course_image) }}" alt="Course Image">
                                            </a>
                                        </div>
                                        <div class="courses__item-content courses__item-content-two">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="course.html">{{ $item->course->label }}</a>
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="{{ route('course.view', $item->course_id) }}">{{ $item->course->course_name }}</a></h5>
                                            <div class="courses__item-content-bottom">
                                                <div class="author-two">
                                                    <a href="instructor-details.html">
                                                        <img src="assets/img/courses/course_author001.png" alt="Instructor Image">{{ $item->course->user->name }}
                                                    </a>
                                                </div>
                                                <div class="avg-rating">
                                                    <i class="fas fa-star"></i> (4.4 Reviews)
                                                </div>
                                            </div>
                                            <div class="progress-item progress-item-two">
                                                <h6 class="title">COMPLETE <span>88%</span></h6>
                                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 88%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="courses__item-bottom-two">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-book"></i>{{ $item->course->modules_count }}</li>
                                                <li><i class="flaticon-clock"></i>{{ $item->course->duration }} hours</li>
                                                <li><i class="flaticon-mortarboard"></i>Students: {{ $item->course->students_count }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection
