@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')

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
                                                        <img src="{{ (!empty($course->user->photo)) ? url('upload/instructor_images/'.$course->user->photo) : url('upload/no_image.jpg')}}">{{ $item->course->user->name }}
                                                    </a>
                                                </div>
                                                <div class="avg-rating">
                                                    <i class="fas fa-star"></i> (4.4 Reviews)
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
