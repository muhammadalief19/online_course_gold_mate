@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')

        <div class="col-lg-9">
            <div class="dashboard__content-wrap dashboard__content-wrap-two">
                <div class="dashboard__content-title">
                    <h4 class="title">Dashboard</h4>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="dashboard__counter-item">
                            <div class="icon">
                                <i class="skillgro-book"></i>
                            </div>
                            <div class="content">
                                <span class="count odometer" data-count="30"></span>
                                <p>ENROLLED COURSES</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="dashboard__counter-item">
                            <div class="icon">
                                <i class="skillgro-tutorial"></i>
                            </div>
                            <div class="content">
                                <span class="count odometer" data-count="10"></span>
                                <p>ACTIVE COURSES</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="dashboard__counter-item">
                            <div class="icon">
                                <i class="skillgro-diploma-1"></i>
                            </div>
                            <div class="content">
                                <span class="count odometer" data-count="7"></span>
                                <p>COMPLETED COURSES</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<!-- dashboard-area-end -->

@endsection
