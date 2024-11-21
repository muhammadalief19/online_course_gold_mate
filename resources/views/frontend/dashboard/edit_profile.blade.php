@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')

@php
    $id = Auth::user()->id;
    $profileData = App\Models\User::find($id);
@endphp
<div class="col-lg-9">
    <div class="dashboard__content-wrap">
        <div class="dashboard__content-title">
            <h4 class="title">My Profile</h4>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="profile__content-wrap">
                    <ul class="list-wrap">
                        <li><span>Name</span> {{ $profileData->name }}</li>
                        <li><span>Username</span> {{ $profileData->username }}</li>
                        <li><span>Email</span> {{ $profileData->email }}</li>
                        <li><span>Phone Number</span> {{ $profileData->phone }}</li>
                        <li><span>Address</span> {{ $profileData->address }}</li>
                    </ul>
                </div>
        </div>
    </div>
</div>
</div>
@endsection
