@php
    $id = Auth::user()->id;
    $profileData = App\Models\User::find($id);
@endphp


<!-- breadcrumb-area -->
<div class="breadcrumb__area breadcrumb__bg breadcrumb__bg-three" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('') }}assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
        <img src="{{ asset('') }}assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('') }}assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('') }}assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('') }}assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- dashboard-area -->
        <div class="dashboard__top-wrap">
            <div class="dashboard__top-bg" data-background="{{ asset('') }}assets/img/bg/student_bg.jpg"></div>
            <div class="dashboard__instructor-info">
                <div class="dashboard__instructor-info-left">
                <div class="thumb">
            <img src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="img" style="width: 150px; height: 120px; border-radius: 50%; object-fit: cover;">
        </div>

                    <div class="content">
                    <h5 class="section__title fs-30" style="color: white;">{{ $profileData->name }}</h5>

                        <ul class="list-wrap">
                            <li>
                                <img src="{{ asset('') }}assets/img/icons/course_icon03.svg" alt="img" class="injectable">
                                5 Courses Enrolled
                            </li>
                            <li>
                                <img src="{{ asset('') }}assets/img/icons/course_icon05.svg" alt="img" class="injectable">
                                4 Certificate
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dashboard__instructor-info-right">
                    <a href="#" class="btn btn-two arrow-btn">Become an Instructor <img src="{{ asset('') }}assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                </div>
            </div>
        </div>
