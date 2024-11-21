@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')


@php
    $id = Auth::user()->id;
    $profileData = App\Models\User::find($id);
@endphp
<div class="col-lg-9">
    <div class="dashboard__content-wrap">
        <div class="dashboard__content-title">
            <h4 class="title">Settings</h4>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="dashboard__nav-wrap">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="itemOne-tab" data-bs-toggle="tab" data-bs-target="#itemOne-tab-pane" type="button" role="tab" aria-controls="itemOne-tab-pane" aria-selected="true">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="itemTwo-tab" data-bs-toggle="tab" data-bs-target="#itemTwo-tab-pane" type="button" role="tab" aria-controls="itemTwo-tab-pane" aria-selected="false">Password</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="itemOne-tab-pane" role="tabpanel" aria-labelledby="itemOne-tab" tabindex="0">
                        <div class="setting-body">
                            <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>

                            <form method="post" action="{{ route('user.profile.update') }}" enctype="multipart/form-data" class="row pt-40px">
                                @csrf
                                <div class="media media-card align-items-center">
                                    <div class="media-img media-img-lg mr-4 bg-gray">
                                        <img class="mr-3" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="avatar image" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
                                    </div>
                                    <div class="media-body">
                                        <div class="file-upload-wrap file-upload-wrap-2">
                                            <input type="file" name="photo" class="multi file-upload-input with-preview" multiple>
                                            <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a Photo</span>
                                        </div>
                                        <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                                    </div>
                                </div>

                                <div class="input-box col-lg-6">
                                    <label class="label-text">Name</label>
                                    <div class="form-group">
                                        <input class="form-control form--control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name', $profileData->name) }}">
                                        <span class="la la-user input-icon"></span>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-box col-lg-6">
                                    <label class="label-text">User Name</label>
                                    <div class="form-group">
                                        <input class="form-control form--control @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username', $profileData->username) }}">
                                        <span class="la la-user input-icon"></span>
                                        @error('username')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-box col-lg-6">
                                    <label class="label-text">Email</label>
                                    <div class="form-group">
                                        <input class="form-control form--control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email', $profileData->email) }}">
                                        <span class="la la-envelope input-icon"></span>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-box col-lg-6">
                                    <label class="label-text">Phone</label>
                                    <div class="form-group">
                                        <input class="form-control form--control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone', $profileData->phone) }}">
                                        <span class="la la-phone input-icon"></span>
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-box col-lg-6">
                                    <label class="label-text">Address</label>
                                    <div class="form-group">
                                        <input class="form-control form--control @error('address') is-invalid @enderror" type="text" name="address" value="{{ old('address', $profileData->address) }}">
                                        <span class="la la-map input-icon"></span>
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-box col-lg-12">
                                    <button class="btn theme-btn" type="submit">Save Changes</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="itemTwo-tab-pane" role="tabpanel" aria-labelledby="itemTwo-tab" tabindex="0">
                        <div class="setting-body">
                            <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>
                            <form method="post" action="{{ route('user.password.update') }}" class="row pt-40px">
                                @csrf
                                <div class="input-box col-lg-12">
<label class="label-text"> Old Password</label>
<div class="form-group">
    <input class="form-control form--control @error('old_password') is-invalid @enderror" type="password" name="old_password" id="old_password" >
    <span class="la la-user input-icon"></span>

    @error('old_password')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>
</div><!-- end input-box -->


<div class="input-box col-lg-12">
<label class="label-text"> New Password</label>
<div class="form-group">
    <input class="form-control form--control @error('new_password') is-invalid @enderror" type="password" name="new_password" id="new_password" >
    <span class="la la-user input-icon"></span>

    @error('new_password')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>
</div><!-- end input-box -->

<div class="input-box col-lg-12">
<label class="label-text"> Confirm New Password</label>
<div class="form-group">
    <input class="form-control form--control" type="password" name="new_password_confirmation" id="new_password_confirmation" >
    <span class="la la-user input-icon"></span>
</div>
</div><!-- end input-box -->



<div class="input-box col-lg-12 py-2">
<button class="btn theme-btn">Save Changes</button>
</div><!-- end input-box -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- dashboard__content-wrap-end -->
</div>


@endsection
