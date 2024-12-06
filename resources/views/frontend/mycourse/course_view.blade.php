{{-- @include('frontend.mycourse.body.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<section class="header-menu-area">
    <div class="header-menu-content bg-dark">
        <div class="container-fluid">
            <div class="main-menu-content d-flex align-items-center">
                <div class="logo-box logo--box">
                    <div class="theme-picker d-flex align-items-center">
                        <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                            <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </button>
<button class="theme-picker-btn light-mode-btn" title="Light mode">
<svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="12" r="5"></circle>
    <line x1="12" y1="1" x2="12" y2="3"></line>
    <line x1="12" y1="21" x2="12" y2="23"></line>
    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
    <line x1="1" y1="12" x2="3" y2="12"></line>
    <line x1="21" y1="12" x2="23" y2="12"></line>
    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
</svg>
</button>
</div>
</div><!-- end logo-box -->
<div class="course-dashboard-header-title pl-4">
<a href="course-details.html" class="text-white fs-15">{{ $course->course->course_name }}</a>
</div><!-- end course-dashboard-header-title -->
<div class="menu-wrapper ml-auto">
<div class="theme-picker d-flex align-items-center mr-3">
<button class="theme-picker-btn dark-mode-btn" title="Dark mode">
<svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
</svg>
</button>
<button class="theme-picker-btn light-mode-btn" title="Light mode">
<svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="12" r="5"></circle>
    <line x1="12" y1="1" x2="12" y2="3"></line>
    <line x1="12" y1="21" x2="12" y2="23"></line>
    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
    <line x1="1" y1="12" x2="3" y2="12"></line>
    <line x1="21" y1="12" x2="23" y2="12"></line>
    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
</svg>
</button>
</div>
<div class="nav-right-button d-flex align-items-center">
<a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-26 text-white mr-2" data-toggle="modal" data-target="#ratingModal"><i class="la la-star mr-1"></i> leave a rating</a>
<a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-26 text-white mr-2" data-toggle="modal" data-target="#shareModal"><i class="la la-share mr-1"></i> share</a>
<div class="generic-action-wrap generic--action-wrap">
<div class="dropdown">
    <a class="action-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="la la-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Favorite this course</a>
        <a class="dropdown-item" href="#">Archive this course</a>
        <a class="dropdown-item" href="#">Gift this course</a>
    </div>
</div>
</div>
</div><!-- end nav-right-button -->
</div><!-- end menu-wrapper -->
</div><!-- end row -->
</div><!-- end container-fluid -->
</div><!-- end header-menu-content -->
</section><!-- end header-menu-area -->
<!--======================================
END HEADER AREA
======================================-->







<!--======================================
START COURSE-DASHBOARD
======================================-->
<section class="course-dashboard">
<div class="course-dashboard-wrap">
<div class="course-dashboard-container d-flex">
<div class="course-dashboard-column">



    <div class="lecture-viewer-container">
        <div class="lecture-video-item">
<iframe width="100%" height="500" id="videoContainer" src=""
    title="The Best Way to Learn With Videos and Online Classes I Video Notebook" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen></iframe>
<div id="textLesson" class="fs-24 font-weight-semi-bold pb-2 text-center mt-4">
<h3></h3>
</div>

        </div>
    </div><!-- end lecture-viewer-container -->



<div class="lecture-video-detail">
<div class="lecture-tab-body bg-gray p-4">
<ul class="nav nav-tabs generic-tab" id="myTab" role="tablist">
<li class="nav-item">
    <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
        <i class="la la-search"></i>
    </a>
</li>
<li class="nav-item mobile-menu-nav-item">
    <a class="nav-link" id="course-content-tab" data-toggle="tab" href="#course-content" role="tab" aria-controls="course-content" aria-selected="false">
        Course Content
    </a>
</li>
<li class="nav-item">
    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
        Overview
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" id="question-and-ans-tab" data-toggle="tab" href="#question-and-ans" role="tab" aria-controls="question-and-ans" aria-selected="false">
        Question & Ans
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" id="announcements-tab" data-toggle="tab" href="#announcements" role="tab" aria-controls="announcements" aria-selected="false">
        Announcements
    </a>
</li>
</ul>
</div>
<div class="lecture-video-detail-body">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
    <div class="search-course-wrap pt-40px">
        <form action="#" class="pb-5">
            <div class="input-group">
                <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="Search course content">
                <div class="input-group-append">
                    <button class="btn theme-btn"><span class="la la-search"></span></button>
                </div>
            </div>
        </form>
        <div class="search-results-message text-center">
            <h3 class="fs-24 font-weight-semi-bold pb-1">Start a new search</h3>
            <p>To find captions, lectures or resources</p>
        </div>
    </div><!-- end search-course-wrap -->
</div><!-- end tab-pane -->


<div class="tab-pane fade" id="course-content" role="tabpanel" aria-labelledby="course-content-tab">
    <div class="mobile-course-menu pt-4">
        <div class="accordion generic-accordion generic--accordion" id="mobileCourseAccordionCourseExample">



            <div class="card">
                <div class="card-header" id="mobileCourseHeadingOne">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#mobileCourseCollapseOne" aria-expanded="true" aria-controls="mobileCourseCollapseOne">
                        <i class="la la-angle-down"></i>
                        <i class="la la-angle-up"></i>
                        <span class="fs-15"> Section 1: Dive in and Discover After Effects</span>
                        <span class="course-duration">
                            <span>1/5</span>
                            <span>21min</span>
                        </span>
                    </button>
                </div><!-- end card-header -->
                <div id="mobileCourseCollapseOne" class="collapse show" aria-labelledby="mobileCourseHeadingOne" data-parent="#mobileCourseAccordionCourseExample">
                    <div class="card-body p-0">
                        <ul class="curriculum-sidebar-list">
                            <li class="course-item-link active">
                                <div class="course-item-content-wrap">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox" required>
                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox"></label>
                                    </div><!-- end custom-control -->
                                    <div class="course-item-content">
                                        <h4 class="fs-15">1. Let's Have Fun - Seriously!</h4>
                                        <div class="courser-item-meta-wrap">
                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                        </div>
                                    </div><!-- end course-item-content -->
                                </div><!-- end course-item-content-wrap -->
                            </li>
                            <li class="course-item-link">
                                <div class="course-item-content-wrap">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox2" required>
                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox2"></label>
                                    </div><!-- end custom-control -->
                                    <div class="course-item-content">
                                        <h4 class="fs-15">2. A simple concept to get ahead</h4>
                                        <div class="courser-item-meta-wrap">
                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                        </div>
                                    </div><!-- end course-item-content -->
                                </div><!-- end course-item-content-wrap -->
                            </li>
                            <li class="course-item-link active-resource">
                                <div class="course-item-content-wrap">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox3" required>
                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox3"></label>
                                    </div><!-- end custom-control -->
                                    <div class="course-item-content">
                                        <h4 class="fs-15">3. Download your Footage for your Quick Start</h4>
                                        <div class="courser-item-meta-wrap">
                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                            <div class="generic-action-wrap">
                                                <div class="dropdown">
                                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            Section-Footage.zip
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!-- end generic-action-wrap -->
                                        </div>
                                    </div><!-- end course-item-content -->
                                </div><!-- end course-item-content-wrap -->
                            </li>
                            <li class="course-item-link">
                                <div class="course-item-content-wrap">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox4" required>
                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox4"></label>
                                    </div><!-- end custom-control -->
                                    <div class="course-item-content">
                                        <h4 class="fs-15">4. Jump in and Animate your Character</h4>
                                        <div class="courser-item-meta-wrap">
                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                        </div>
                                    </div><!-- end course-item-content -->
                                </div><!-- end course-item-content-wrap -->
                            </li>
                        </ul>
                    </div><!-- end card-body -->
                </div><!-- end collapse -->
            </div><!-- end card -->






        </div><!-- end accordion-->
    </div><!-- end mobile-course-menu -->
</div><!-- end tab-pane -->




<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
    <div class="lecture-overview-wrap">
        <div class="lecture-overview-item">
            <h3 class="fs-24 font-weight-semi-bold pb-2">About this course</h3>
            <p>{{ $course->course->course_title }}</p>
        </div><!-- end lecture-overview-item -->
        <div class="section-block"></div>
        <div class="lecture-overview-item">
            <div class="lecture-overview-stats-wrap d-flex">
                <div class="lecture-overview-stats-item">
                    <h3 class="fs-16 font-weight-semi-bold pb-2">By the numbers</h3>
                </div><!-- end lecture-overview-stats-item -->
                <div class="lecture-overview-stats-item">
                    <ul class="generic-list-item">
                        <li><span>Skill level:</span>{{ $course->course->label }}</li>
                        <li><span>Students:</span>83950</li>
                        <li><span>Languages:</span>English</li>
                        <li><span>Captions:</span>Yes</li>
                    </ul>
                </div><!-- end lecture-overview-stats-item -->
                <div class="lecture-overview-stats-item">
                    <ul class="generic-list-item">
        <li><span>Resourse:</span>{{ $course->course->resources }}</li>
        <li><span>Video length:</span>{{ $course->course->duration }} total hours</li>
        <li><span>Certificate:</span>{{ $course->course->certificate }}</li>
                    </ul>
                </div><!-- end lecture-overview-stats-item -->
            </div><!-- end lecture-overview-stats-wrap -->
        </div><!-- end lecture-overview-item -->
        <div class="section-block"></div>
        <div class="lecture-overview-item">
            <div class="lecture-overview-stats-wrap d-flex">
                <div class="lecture-overview-stats-item">
                    <h3 class="fs-16 font-weight-semi-bold pb-2">Certificates</h3>
                </div><!-- end lecture-overview-stats-item -->
                <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">
                    <p class="pb-3">Get Aduca certificate by completing entire course</p>
                    <a href="#" class="btn theme-btn theme-btn-transparent">Aduca Certificate</a>
                </div><!-- end lecture-overview-stats-item -->
            </div><!-- end lecture-overview-stats-wrap -->
        </div><!-- end lecture-overview-item -->
        <div class="section-block"></div>
        <div class="lecture-overview-item">
            <div class="lecture-overview-stats-wrap d-flex">
                <div class="lecture-overview-stats-item">
                    <h3 class="fs-16 font-weight-semi-bold pb-2">Features</h3>
                </div><!-- end lecture-overview-stats-item -->
                <div class="lecture-overview-stats-item">
                    <p>Available on <a href="#" class="text-color hover-underline">IOS</a> and <a href="#" class="text-color hover-underline">Android</a></p>
                </div><!-- end lecture-overview-stats-item -->
            </div><!-- end lecture-overview-stats-wrap -->
        </div><!-- end lecture-overview-item -->
        <div class="section-block"></div>
        <div class="lecture-overview-item">
            <div class="lecture-overview-stats-wrap d-flex">
                <div class="lecture-overview-stats-item">
                    <h3 class="fs-16 font-weight-semi-bold pb-2">Description</h3>
                </div><!-- end lecture-overview-stats-item -->
                <div class="lecture-overview-stats-item lecture-overview-stats-wide-item lecture-description">
                    <h3 class="fs-16 font-weight-semi-bold pb-2">From the Author of the Best Selling After Effects CC 2020 Complete Course</h3>
                    <p> {!! $course->course->description !!} </p>




                </div><!-- end lecture-overview-stats-item -->
            </div><!-- end lecture-overview-stats-wrap -->
        </div><!-- end lecture-overview-item -->
        <div class="section-block"></div>

    </div><!-- end lecture-overview-wrap -->
</div><!-- end tab-pane -->




<div class="tab-pane fade" id="question-and-ans" role="tabpanel" aria-labelledby="question-and-ans-tab">
    <div class="lecture-overview-wrap lecture-quest-wrap">
        <div class="new-question-wrap">
            <button class="btn theme-btn theme-btn-transparent back-to-question-btn"><i class="la la-reply mr-1"></i>Back to all questions</button>
            <div class="new-question-body pt-40px">
                <h3 class="fs-20 font-weight-semi-bold">My question relates to</h3>


    <form method="post" action="{{ route('user.question') }}" class="pt-4">
        @csrf

        <input type="hidden" name="course_id" value="{{ $course->course_id }}">
        <input type="hidden" name="instructor_id" value="{{ $course->instructor_id }}">

        <div class="custom-control-wrap">
            <div class="custom-control custom-radio mb-3 pl-0">
                 <input type="text" name="subject" class="form-control form--control pl-3" >

            </div>

            <div class="custom-control custom-radio mb-3 pl-0">
                <textarea class="form-control form--control pl-3" name="question" rows="4" placeholder="Write your response..."></textarea>

            </div>

        </div>
        <div class="btn-box text-center">
            <button type="submit" class="btn theme-btn w-100">Submit Question <i class="la la-arrow-right icon ml-1"></i></button>
        </div>
    </form>
            </div>
        </div><!-- end new-question-wrap -->





        <div class="question-overview-result-wrap">




            <div class="lecture-overview-item">
                <div class="question-overview-result-header d-flex align-items-center justify-content-between">
                    <h3 class="fs-17 font-weight-semi-bold">{{ count($allquestion) }} questions in this course</h3>
                    <button class="btn theme-btn theme-btn-sm theme-btn-transparent ask-new-question-btn">Ask a new question</button>
                </div>
            </div><!-- end lecture-overview-item -->
            <div class="section-block"></div>





            <div class="lecture-overview-item mt-0">
                <div class="question-list-item">

    @php
        $id = Auth::user()->id;
        $question = App\Models\Question::where('user_id',$id)->where('course_id',$course->course->id)->where('parent_id',null)->orderBy('id','asc')->get();
    @endphp

                    @foreach ($question as $que)
                   <div class="media media-card border-bottom border-bottom-gray py-4 px-3">
                        <div class="media-img rounded-full flex-shrink-0 avatar-sm">
                            <img class="rounded-full" src="{{ (!empty($que->user->photo)) ? url('upload/user_images/'.$que->user->photo) : url('upload/no_image.jpg')}}" alt="User image">
                        </div>
                        <div class="media-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="question-meta-content">
                                    <a href="javascript:void(0)" class="d-block">
                       <h5 class="fs-16 pb-1">{{ $que->subject }} </h5>
                      <p class="text-truncate fs-15 text-gray">
                                          {{ $que->question }}
                                        </p>
                                    </a>
                                </div><!-- end question-meta-content -->

                            </div>
                            <p class="meta-tags pt-1 fs-13">
                                <span>{{ Carbon\Carbon::parse($que->created_at)->diffForHumans() }}</span>
                            </p>
                        </div><!-- end media-body -->
                    </div><!-- end media -->


    @php
        $replay = App\Models\Question::where('parent_id',$que->id)->get();
    @endphp

                    @foreach ($replay as $rep)
                    <div class="media media-card border-bottom border-bottom-gray py-4 px-3" style="background: #e6e6e6">
                        <div class="media-img rounded-full flex-shrink-0 avatar-sm">
                            <img class="rounded-full" src="{{ (!empty($rep->instructor->photo)) ? url('upload/instructor_images/'.$rep->instructor->photo) : url('upload/no_image.jpg')}}" alt="User image">
                        </div>
                        <div class="media-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="question-meta-content">
                                    <a href="javascript:void(0)" class="d-block">
                       <h5 class="fs-16 pb-1">{{ $rep->instructor->name }} </h5>
                      <p class="text-truncate fs-15 text-gray">
                                          {{ $rep->question }}
                                        </p>
                                    </a>
                                </div><!-- end question-meta-content -->

                            </div>
                            <p class="meta-tags pt-1 fs-13">
                                <span>{{ Carbon\Carbon::parse($rep->created_at)->diffForHumans() }}</span>
                            </p>
                        </div><!-- end media-body -->
                    </div><!-- end media -->

                    @endforeach

                    @endforeach
                </div>
                <div class="question-btn-box pt-35px text-center">
                    <button class="btn theme-btn theme-btn-transparent w-100" type="button">See More</button>
                </div>
            </div><!-- end lecture-overview-item -->
        </div>
    </div>
</div><!-- end tab-pane -->
<div class="tab-pane fade" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
    <div class="lecture-overview-wrap lecture-announcement-wrap">
        <div class="lecture-overview-item">
            <div class="media media-card align-items-center">
                <a href="teacher-detail.html" class="media-img d-block rounded-full avatar-md">
                    <img src="images/small-avatar-1.jpg" alt="Instructor avatar" class="rounded-full">
                </a>
                <div class="media-body">
                    <h5 class="pb-1"><a href="teacher-detail.html">Alex Smith</a></h5>
                    <div class="announcement-meta fs-15">
                        <span>Posted an announcement</span>
                        <span> · 3 years ago ·</span>
                        <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                    </div>
                </div>
            </div>
            <div class="lecture-owner-decription pt-4">
                <h3 class="fs-19 font-weight-semi-bold pb-3">Important Q&A support</h3>
                <p>Happy 2019 to everyone, thank you for being a student and all of your support.</p>
                <p><strong>Great job on enrolling and your current course progress.  I encourage you keep in pursuit of your dreams :)</strong></p>
                <p>The whole lot. In my course After Effects Complete Course packed with all Techniques and Methods (No Tricks and gimmicks).</p>
                <p class="font-italic"><strong>Unfortunately this will result in delayed responses by me in the Q&A section and to direct messages.  This is only for the next week  and once back I will be back to 100% .</strong></p>
                <p>I will continue to do my best to respond to as many questions as possible but only one person, regularly I spend 4-5 hours daily on this and with over 440000 students as you can image that its a lot of work.</p>
                <p class="font-italic">Thank you once again for your understanding and for all of the wonderful students who I have had an opportunity to communicate with regularly and all of your encouragement.</p>
                <p>Have an awesome day</p>
                <p>Alex</p>
            </div>
            <div class="lecture-announcement-comment-wrap pt-4">
                <div class="media media-card align-items-center">
                    <div class="media-img rounded-full avatar-sm flex-shrink-0">
                        <img src="images/small-avatar-1.jpg" alt="Instructor avatar" class="rounded-full">
                    </div><!-- end media-img -->
                    <div class="media-body">
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="Enter your comment">
                                <div class="input-group-append">
                                    <button class="btn theme-btn" type="button"><i class="la la-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div><!-- end media-body -->
                </div><!-- end media -->
                <div class="comments pt-40px">
                    <div class="media media-card mb-3 border-bottom border-bottom-gray pb-3">
                        <div class="media-img rounded-full avatar-sm flex-shrink-0">
                            <img src="images/small-avatar-2.jpg" alt="Instructor avatar" class="rounded-full">
                        </div><!-- end media-img -->
                        <div class="media-body">
                            <div class="announcement-meta fs-15 lh-20">
                                <a href="#" class="text-color">Tony Olsson</a>
                                <span> · 3 years ago ·</span>
                                <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                            </div>
                            <p class="pt-1">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                        </div><!-- end media-body -->
                    </div><!-- end media -->
                    <div class="media media-card mb-3 border-bottom border-bottom-gray pb-3">
                        <div class="media-img rounded-full avatar-sm flex-shrink-0">
                            <img src="images/small-avatar-3.jpg" alt="Instructor avatar" class="rounded-full">
                        </div><!-- end media-img -->
                        <div class="media-body">
                            <div class="announcement-meta fs-15 lh-20">
                                <a href="#" class="text-color">Eduard-Dan</a>
                                <span> · 2 years ago ·</span>
                                <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                            </div>
                            <p class="pt-1">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                        </div><!-- end media-body -->
                    </div><!-- end media -->
                </div><!-- end comments -->
            </div><!-- end lecture-announcement-comment-wrap -->
        </div><!-- end lecture-overview-item -->
    </div>
</div><!-- end tab-pane -->
</div><!-- end tab-content -->
</div><!-- end lecture-video-detail-body -->
</div><!-- end lecture-video-detail -->
<div class="cta-area py-4 bg-gray">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6">
    <div class="cta-content-wrap">
        <h3 class="fs-18 font-weight-semi-bold">Top companies choose <a href="for-business.html" class="text-color hover-underline">Aduca for Business</a> to build in-demand career skills.</h3>
    </div>
</div><!-- end col-lg-6 -->
<div class="col-lg-6">
    <div class="client-logo-wrap text-right">
        <a href="#" class="client-logo-item client--logo-item-2 pr-3"><img src="{{ asset('frontend/images/sponsor-img.png') }}" alt="brand image"></a>
        <a href="#" class="client-logo-item client--logo-item-2 pr-3"><img src="{{ asset('frontend/images/sponsor-img2.png') }}" alt="brand image"></a>
        <a href="#" class="client-logo-item client--logo-item-2 pr-3"><img src="{{ asset('frontend/images/sponsor-img3.png') }}" alt="brand image"></a>
    </div><!-- end client-logo-wrap -->
</div><!-- end col-lg-6 -->
</div><!-- end row -->
</div><!-- end container-fluid -->
</div><!-- end cta-area -->
<div class="footer-area pt-50px">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 responsive-column-half">
    <div class="footer-item">
        <a href="index.html">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="footer logo" class="footer__logo">
        </a>
        <ul class="generic-list-item pt-4">
            <li><a href="tel:+1631237884">+163 123 7884</a></li>
            <li><a href="mailto:support@wbsite.com">support@website.com</a></li>
            <li>Melbourne, Australia, 105 South Park Avenue</li>
        </ul>
    </div><!-- end footer-item -->
</div><!-- end col-lg-3 -->
<div class="col-lg-3 responsive-column-half">
    <div class="footer-item">
        <h3 class="fs-20 font-weight-semi-bold pb-3">Company</h3>
        <ul class="generic-list-item">
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Become a Teacher</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </div><!-- end footer-item -->
</div><!-- end col-lg-3 -->
<div class="col-lg-3 responsive-column-half">
    <div class="footer-item">
        <h3 class="fs-20 font-weight-semi-bold pb-3">Courses</h3>
        <ul class="generic-list-item">
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Hacking</a></li>
            <li><a href="#">PHP Learning</a></li>
            <li><a href="#">Spoken English</a></li>
            <li><a href="#">Self-Driving Car</a></li>
            <li><a href="#">Garbage Collectors</a></li>
        </ul>
    </div><!-- end footer-item -->
</div><!-- end col-lg-3 -->
<div class="col-lg-3 responsive-column-half">
    <div class="footer-item">
        <h3 class="fs-20 font-weight-semi-bold pb-3">Download App</h3>
        <div class="mobile-app">
            <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
            <a href="#" class="d-block mb-2 hover-s"><img src="images/appstore.png" alt="App store" class="img-fluid"></a>
            <a href="#" class="d-block hover-s"><img src="images/googleplay.png" alt="Google play store" class="img-fluid"></a>
        </div>
    </div><!-- end footer-item -->
</div><!-- end col-lg-3 -->
</div><!-- end row -->
</div><!-- end container-fluid -->
<div class="section-block"></div>
<div class="copyright-content py-4">
<div class="container-fluid">
<div class="row align-items-center">
    <div class="col-lg-6">
        <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end">
            <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
            <div class="select-container select-container-sm">
                <select class="select-container-select">
                    <option value="1">English</option>
                    <option value="2">Deutsch</option>
                    <option value="3">Español</option>
                    <option value="4">Français</option>
                    <option value="5">Bahasa Indonesia</option>
                    <option value="6">Bangla</option>
                    <option value="7">日本語</option>
                    <option value="8">한국어</option>
                    <option value="9">Nederlands</option>
                    <option value="10">Polski</option>
                    <option value="11">Português</option>
                    <option value="12">Română</option>
                    <option value="13">Русский</option>
                    <option value="14">ภาษาไทย</option>
                    <option value="15">Türkçe</option>
                    <option value="16">中文(简体)</option>
                    <option value="17">中文(繁體)</option>
                    <option value="17">Hindi</option>
                </select>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
</div><!-- end row -->
</div><!-- end container-fluid -->
</div><!-- end copyright-content -->
</div><!-- end footer-area -->
</div><!-- end course-dashboard-column -->
<div class="course-dashboard-sidebar-column">
<button class="sidebar-open" type="button"><i class="la la-angle-left"></i> Course content</button>
<div class="course-dashboard-sidebar-wrap custom-scrollbar-styled">
<div class="course-dashboard-side-heading d-flex align-items-center justify-content-between">
<h3 class="fs-18 font-weight-semi-bold">Course content</h3>
<button class="sidebar-close" type="button"><i class="la la-times"></i></button>
</div><!-- end course-dashboard-side-heading -->
<div class="course-dashboard-side-content">
<div class="accordion generic-accordion generic--accordion" id="accordionCourseExample">

@foreach ($section as $sec)

@php
    $lectures = App\Models\CourseLecture::where('section_id',$sec->id)->get();
@endphp

    <div class="card">
    <div class="card-header" id="headingOne{{ $sec->id }}">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{ $sec->id }}" aria-expanded="true" aria-controls="collapseOne">
            <i class="la la-angle-down"></i>
            <i class="la la-angle-up"></i>
            <span class="fs-15"> {{ $sec->section_title }}</span>
            <span class="course-duration">
                <span>({{ count($lectures) }})</span>
            </span>
        </button>
    </div><!-- end card-header -->
    <div id="collapseOne{{ $sec->id }}" class="collapse " aria-labelledby="headingOne{{ $sec->id }}" data-parent="#accordionCourseExample">
        <div class="card-body p-0">
            <ul class="curriculum-sidebar-list">
               @foreach ($lectures as $lect)
                <li class="course-item-link active">
                    <div class="course-item-content-wrap">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="courseCheckbox" required>
                            <label class="custom-control-label custom--control-label" for="courseCheckbox"></label>
                        </div><!-- end custom-control -->
                        <div class="course-item-content">
                            <h4 class="fs-15 lecture-title" data-video-url="{{ $lect->url }}" data-content="{!!$lect->content !!}">{{ $lect->lecture_title }}</h4>

                        </div><!-- end course-item-content -->
                    </div><!-- end course-item-content-wrap -->
                </li>
               @endforeach

            </ul>
        </div><!-- end card-body -->
    </div><!-- end collapse -->
</div><!-- end card -->

@endforeach

                        </div><!-- end accordion-->
                    </div><!-- end course-dashboard-side-content -->
                </div><!-- end course-dashboard-sidebar-wrap -->
            </div><!-- end course-dashboard-sidebar-column -->
        </div><!-- end course-dashboard-container -->
    </div><!-- end course-dashboard-wrap -->
</section><!-- end course-dashboard -->
<!--======================================
        END COURSE-DASHBOARD
======================================-->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="ratingModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="ratingModalTitle">
                        How would you rate this course?
                    </h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body text-center py-5">
                <div class="leave-rating mt-5">
                    <input type="radio" name='rate' id="star5"/>
                    <label for="star5" class="fs-45"></label>
                    <input type="radio" name='rate' id="star4"/>
                    <label for="star4" class="fs-45"></label>
                    <input type="radio" name='rate' id="star3"/>
                    <label for="star3" class="fs-45"></label>
                    <input type="radio" name='rate' id="star2"/>
                    <label for="star2" class="fs-45"></label>
                    <input type="radio" name='rate' id="star1"/>
                    <label for="star1" class="fs-45"></label>
                    <div class="rating-result-text fs-20 pb-4"></div>
                </div><!-- end leave-rating -->
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <h5 class="modal-title fs-19 font-weight-semi-bold" id="shareModalTitle">Share this course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="copy-to-clipboard">
                    <span class="success-message">Copied!</span>
                    <div class="input-group">
                        <input type="text" class="form-control form--control copy-input pl-3" value="https://www.aduca.com/share/101WxMB0oac1hVQQ==/">
                        <div class="input-group-append">
                            <button class="btn theme-btn theme-btn-sm copy-btn shadow-none"><i class="la la-copy mr-1"></i> Copy</button>
                        </div>
                    </div>
                </div><!-- end copy-to-clipboard -->
            </div><!-- end modal-body -->
            <div class="modal-footer justify-content-center border-top-gray">
                <ul class="social-icons social-icons-styled">
                    <li><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                    <li><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                    <li><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                </ul>
            </div><!-- end modal-footer -->
        </div><!-- end modal-content-->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="reportModalTitle">Report Abuse</h5>
                    <p class="pt-1 fs-14 lh-24">Flagged content is reviewed by Aduca staff to determine whether it violates Terms of Service or Community Guidelines. If you have a question or technical issue, please contact our
                        <a href="contact.html" class="text-color hover-underline">Support team here</a>.</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <form method="post">
                    <div class="input-box">
                        <label class="label-text">Select Report Type</label>
                        <div class="form-group">
                            <div class="select-container w-auto">
                                <select class="select-container-select">
                                    <option value>-- Select One --</option>
                                    <option value="1">Inappropriate Course Content</option>
                                    <option value="2">Inappropriate Behavior</option>
                                    <option value="3">Aduca Policy Violation</option>
                                    <option value="4">Spammy Content</option>
                                    <option value="5">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Write Message</label>
                        <div class="form-group">
                            <textarea class="form-control form--control pl-3" name="message" placeholder="Provide additional details here..." rows="5"></textarea>
                        </div>
                    </div>
                    <div class="btn-box text-right pt-2">
                        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Submit <i class="la la-arrow-right icon ml-1"></i></button>
                    </div>
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="insertLinkModal" tabindex="-1" role="dialog" aria-labelledby="insertLinkModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="insertLinkModalTitle">Insert Link</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <form action="#">
                    <div class="input-box">
                        <label class="label-text">URL</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Url">
                            <i class="la la-link input-icon"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Text</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Text">
                            <i class="la la-pencil input-icon"></i>
                        </div>
                    </div>
                    <div class="btn-box text-right pt-2">
                        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Insert <i class="la la-arrow-right icon ml-1"></i></button>
                    </div>
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="uploadPhotoModal" tabindex="-1" role="dialog" aria-labelledby="uploadPhotoModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="uploadPhotoModalTitle">Upload an Image</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="file-upload-wrap">
                    <input type="file" name="files[]" class="multi file-upload-input" multiple>
                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>Drop files here or click to upload</span>
                </div><!-- file-upload-wrap -->
                <div class="btn-box text-right pt-2">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Submit <i class="la la-arrow-right icon ml-1"></i></button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->


<script type="text/javascript">
    // Function to open the first lecture when the page loads
    function openFirstLecture() {
        const firstLecture = document.querySelector('.lecture-title'); // Get the first lecture element
        if (firstLecture) {
            firstLecture.click(); // Trigger the click event on the first lecture
        }
    }

    // Function to handle lecture clicks and load content
    function viewLesson(videoUrl, vimeoUrl, textContent) {
        const video = document.getElementById("videoContainer");
        const text = document.getElementById("textLesson");
        const textContainer = document.createElement("div");

        if (videoUrl && videoUrl.trim() !== "") {
            video.classList.remove("d-none");
            text.classList.add("d-none");
            text.innerHTML = "";
            video.setAttribute("src", videoUrl);
        } else if (vimeoUrl && vimeoUrl.trim() !== "") {
            video.classList.remove("d-none");
            text.classList.add("d-none");
            text.innerHTML = "";
            video.setAttribute("src", vimeoUrl);
        } else if (textContent && textContent.trim() !== "") {
            video.classList.add("d-none");
            text.classList.remove("d-none");
            text.innerHTML = "";
            textContainer.innerText = textContent;
            textContainer.style.fontSize = "14px";
            textContainer.style.textAlign = "left";
            textContainer.style.paddingLeft = "40px";
            textContainer.style.paddingRight = "40px";
            text.appendChild(textContainer);
        }
    }

    // Add a click event listener to all lecture elements
    document.querySelectorAll('.lecture-title').forEach((lectureTitle) => {
        lectureTitle.addEventListener('click', () => {
            const videoUrl = lectureTitle.getAttribute('data-video-url');
            const vimeoUrl = lectureTitle.getAttribute('data-vimeo-url');
            const textContent = lectureTitle.getAttribute('data-content');
            viewLesson(videoUrl, vimeoUrl, textContent);
        });
    });

    // Open the first lecture when the page loads
    window.addEventListener('load', () => {
        openFirstLecture();
    });
</script>
@include('frontend.mycourse.body.footer')
</body>
</html> --}}


@include('frontend.mycourse.body.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


@php
    $setting = App\Models\SiteSetting::find(1);
@endphp
    <!-- header-area -->
    <header>
        <div class="tg-header__top">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tg-header__top-info list-wrap">
                            <li><img src="{{ asset('') }}assets/img/icons/map_marker.svg" alt="Icon"> <span>jalan mars</span></li>
                            <li><img src="{{ asset('') }}assets/img/icons/envelope.svg" alt="Icon"> <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tg-header__top-right">
                            <div class="tg-header__phone">
                                <img src="{{ asset('') }}assets/img/icons/phone.svg" alt="Icon">Call us:
                                <a href="tel:00123456789">{{ $setting->phone }}</a>
                            </div>
                            <div class="tg-header__dashboard-btn">
                                @auth
                                <a href="{{ route('dashboard') }}" class="btn-dashboard">Dashboard</a>
                                @else
                                <a href="{{ route('login') }}" class="btn-dashboard">Login</a>
                                @endauth
                            </div>

                        </div>
                    </div>
                    <style>
                       .tg-header__dashboard-btn {
                            text-align: right; /* Untuk memastikan tombol berada di sebelah kanan */
                        }

                        .btn-dashboard {
                            background-color: #f5ee26; /* Sesuaikan warna sesuai desain */
                            color: #080808;
                            padding: 5px 15px; /* Mengurangi padding untuk memperkecil tombol */
                            border-radius: 5px;
                            text-decoration: none;
                            font-weight: bold;
                            transition: background-color 0.3s ease;
                            font-size: 14px; /* Tambahkan ini jika ingin mengurangi ukuran teks */
                        }

                        .btn-dashboard:hover {
                            background-color: #0066ff; /* Warna saat tombol di-hover */
                        }
                    </style>
                </div>
            </div>
        </div>
        <div id="header-fixed-height"></div>
        <div id="sticky-header" class="tg-header__area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href="{{ url('/') }}" class="logo"><img src="{{ asset($setting->logo)}}"alt="Logo"></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li class=""><a href="{{ url('/') }}">Home</a></li>
                                        <li class="menu-item-has-children"><a href="#">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.html">Course grid</a></li>
                                                <li><a href="course-details.html">Course List</a></li>
                                            </ul>
                                        </li>
                                        @php
                                    $categories = App\Models\Category::orderBy('category_name','ASC')->get();
                                        @endphp

                                        <li class="menu-item-has-children"><a href="#">Categories</a>
                                            <ul class="sub-menu">
                                                @foreach ($categories as $cat)
                                                @php
                                                $subcategories = App\Models\SubCategory::where('category_id',$cat->id)->get();
                                                @endphp
                                                <li class="menu-item-has-children">
                                                    <a href="{{ url('category/'.$cat->id.'/'.$cat->category_slug) }}">{{ $cat->category_name }}</a>
                                                    <ul class="sub-menu">
                                                        @foreach ($subcategories as $subcat)
                                                        <li><a href="{{ url('subcategory/'.$subcat->id.'/'.$subcat->subcategory_slug) }}">{{ $subcat->subcategory_name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{ route('blog') }}">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__search d-none d-md-block">
                                    <form action="#" class="tgmenu__search-form">
                                        <div class="input-grp">
                                            <input type="text" placeholder="Search For Course . . .">
                                            <button type="submit"><i class="flaticon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="wishlist-icon">
                                            <a href="cart.html" class="cart-count">
                                                <img src="{{ asset('') }}assets/img/icons/heart.svg" class="injectable" alt="img">
                                                <span class="wishlist-count">0</span>
                                            </a>
                                        </li>
                                        <li class="mini-cart-icon">
                                            <a href="{{ route('mycart') }}" class="cart-count">
                                                <img src="{{ asset('') }}assets/img/icons/cart.svg" class="injectable" alt="img">
                                                <span class="mini-cart-count" id="cartQty">0</span>
                                            </a>
                                        </li>
                                        @auth
                                        <li class="header-btn login-btn">
                                            <a href="{{ route('user.logout') }}">Logout</a>
                                        </li>
                                        @else
                                        <li class="header-btn login-btn">
                                            <a href="{{ route('login') }}">Login</a>
                                        </li>
                                        @endauth

                                    </ul>
                                </div>
                                <div class="mobile-login-btn">
                                    <a href="login.html"><img src="{{ asset('') }}assets/img/icons/user.svg" alt="" class="injectable"></a>
                                </div>
                                <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                                <div class="nav-logo">
                                    <a href="index.html"><img src="{{ asset('') }}assets/img/logo/logo.svg" alt="Logo"></a>
                                </div>
                                <div class="tgmobile__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

<!-- main-area -->
<main class="main-area fix">

    <!-- lesson-area -->
    <section class="lesson__area section-pb-120">
        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-xl-3 col-lg-4">
                    <div class="lesson__content">
                        <h2 class="title">Course Content</h2>
                        <div class="accordion" id="accordionExample">
                            @foreach ($sections as $section)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $section->id }}">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $section->id }}"
                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $section->id }}">
                                            {{ $section->section_title }}
                                            <span>1/3</span>
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $section->id }}"
                                         class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="list-wrap">
                                                @foreach ($section->lectures as $lecture)
                                                    <li class="course-item {{ $loop->first ? 'open-item' : '' }}">
                                                        <a href="#" class="course-item-link {{ $loop->first ? 'active' : '' }}">
                                                            <span class="item-name lecture-title"
                                                                  data-video-url="{{ $lecture->url }}"
                                                                  data-content="{!! $lecture->content !!}">
                                                                {{ $lecture->lecture_title }}
                                                            </span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">03:03</span>
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
                <div class="col-xl-9 col-lg-8">
                    <div class="lesson__video-wrap">
                        <div class="lesson__video-wrap-top">
                            <div class="lesson__video-wrap-top-left">
                                <a href="#"><i class="flaticon-arrow-right"></i></a>
                                <span>The Complete Design Course: From Zero to Expert!</span>
                            </div>
                            <div class="lesson__video-wrap-top-right">
                                <a href="#"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="lecture-video-item">
                            <!-- Video/iframe container -->
                            <iframe width="100%" height="500" id="videoContainer" src=""
                                title="The Best Way to Learn With Videos and Online Classes I Video Notebook" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>

                            <!-- Text lesson content -->
                            <div id="textLesson" class="fs-24 font-weight-semi-bold pb-2 text-center mt-4 d-none">
                                <h3></h3>
                            </div>
                        </div>

                        <div class="lesson__next-prev-button">
                            <button class="prev-button" title="Create a Simple React App">
                                <i class="flaticon-arrow-right"></i>
                            </button>
                            <button class="next-button" title="React for the Rest of us">
                                <i class="flaticon-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="courses__details-content lesson__details-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
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
                                    <p>{!! $course->course->description !!}</p>
                                    <h3 class="title">What you'll learn in this course?</h3>
                                    <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                                    <ul class="about__info-list list-wrap">
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">Work with color & Gradients & Grids</p>
                                        </li>
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">All the useful shortcuts</p>
                                        </li>
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">Be able to create Flyers, Brochures, Advertisements</p>
                                        </li>
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">How to work with Images & Text</p>
                                        </li>
                                    </ul>
                                    <p class="last-info">Morem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="instructors-tab-pane" role="tabpanel" aria-labelledby="instructors-tab" tabindex="0">
                                <div class="courses__instructors-wrap">
                                    <div class="courses__instructors-thumb">
                                        <img src="assets/img/courses/course_instructors.png" alt="img">
                                    </div>
                                    <div class="courses__instructors-content">
                                        <h2 class="title">Mark Jukarberg</h2>
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
                                    <h2 class="title">Reviews</h2>
                                    <div class="course-rate">
                                        <div class="course-rate__summary">
                                            <div class="course-rate__summary-value">4.8</div>
                                            <div class="course-rate__summary-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="course-rate__summary-text">
                                                12 Ratings
                                            </div>
                                        </div>
                                        <div class="course-rate__details">
                                            <div class="course-rate__details-row">
                                                <div class="course-rate__details-row-star">
                                                    5
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="course-rate__details-row-value">
                                                    <div class="rating-gray"></div>
                                                    <div class="rating" style="width:80%;" title="80%"></div>
                                                    <span class="rating-count">2</span>
                                                </div>
                                            </div>
                                            <div class="course-rate__details-row">
                                                <div class="course-rate__details-row-star">
                                                    4
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="course-rate__details-row-value">
                                                    <div class="rating-gray"></div>
                                                    <div class="rating" style="width:50%;" title="50%"></div>
                                                    <span class="rating-count">1</span>
                                                </div>
                                            </div>
                                            <div class="course-rate__details-row">
                                                <div class="course-rate__details-row-star">
                                                    3
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="course-rate__details-row-value">
                                                    <div class="rating-gray"></div>
                                                    <div class="rating" style="width:0%;" title="0%"></div>
                                                    <span class="rating-count">0</span>
                                                </div>
                                            </div>
                                            <div class="course-rate__details-row">
                                                <div class="course-rate__details-row-star">
                                                    2
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="course-rate__details-row-value">
                                                    <div class="rating-gray"></div>
                                                    <div class="rating" style="width:0%;" title="0%"></div>
                                                    <span class="rating-count">0</span>
                                                </div>
                                            </div>
                                            <div class="course-rate__details-row">
                                                <div class="course-rate__details-row-star">
                                                    1
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="course-rate__details-row-value">
                                                    <div class="rating-gray"></div>
                                                    <div class="rating" style="width:0%;" title="0%"></div>
                                                    <span class="rating-count">0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-review-head">
                                        <div class="review-author-thumb">
                                            <img src="assets/img/courses/review-author.png" alt="img">
                                        </div>
                                        <div class="review-author-content">
                                            <div class="author-name">
                                                <h5 class="name">Jura Hujaor <span>2 Days ago</span></h5>
                                                <div class="author-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h4 class="title">The best LMS Design System</h4>
                                            <p>Maximus ligula eleifend id nisl quis interdum. Sed malesuada tortor non turpis semper bibendum nisi porta, malesuada risus nonerviverra dolor. Vestibulum ante ipsum primis in faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- lesson-area-end -->
    <script type="text/javascript">
        // Function to open the first lecture when the page loads
        // Function to open the first lecture when the page loads
function openFirstLecture() {
    const firstLecture = document.querySelector('.lecture-title'); // Get the first lecture element
    if (firstLecture) {
        firstLecture.click(); // Trigger the click event on the first lecture
    }
}

// Function to handle lecture clicks and load content
function viewLesson(videoUrl, vimeoUrl, textContent) {
    const video = document.getElementById("videoContainer");
    const text = document.getElementById("textLesson");

    if (videoUrl && videoUrl.trim() !== "") {
        video.classList.remove("d-none");
        text.classList.add("d-none");
        text.innerHTML = "";
        video.setAttribute("src", videoUrl);
    } else if (vimeoUrl && vimeoUrl.trim() !== "") {
        video.classList.remove("d-none");
        text.classList.add("d-none");
        text.innerHTML = "";
        video.setAttribute("src", vimeoUrl);
    } else if (textContent && textContent.trim() !== "") {
        video.classList.add("d-none");
        text.classList.remove("d-none");
        text.innerHTML = `<div style="font-size: 14px; text-align: left; padding: 0 40px;">${textContent}</div>`;
    }
}

// Add a click event listener to all lecture elements
document.querySelectorAll('.lecture-title').forEach((lectureTitle) => {
    lectureTitle.addEventListener('click', () => {
        const videoUrl = lectureTitle.getAttribute('data-video-url');
        const vimeoUrl = lectureTitle.getAttribute('data-vimeo-url');
        const textContent = lectureTitle.getAttribute('data-content');
        viewLesson(videoUrl, vimeoUrl, textContent);
    });
});

// Open the first lecture when the page loads
window.addEventListener('load', () => {
    openFirstLecture();
});

    </script>
</main>
<!-- main-area-end -->

@include('frontend.mycourse.body.footer')
