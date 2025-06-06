@extends('admin.admin_dashboard')
@section('title', 'Admin Online-Course | Edit Roles')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Edit Role</h5>
                        <form id="myForm" action="{{ route('update.roles') }}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $roles->id }}">
                            <div class="form-group col-md-6">
                                <label for="input1" class="form-label">Roles Name</label>
                                <input type="text" name="name" class="form-control" id="input1" value="{{ $roles->name }}" >
                            </div>
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Roles</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Edit Roles</h5>
            <form id="myForm" action="{{ route('update.roles') }}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $roles->id }}">

                <div class="form-group col-md-6">
                    <label for="input1" class="form-label">Roles Name</label>
                    <input type="text" name="name" class="form-control" id="input1" value="{{ $roles->name }}" >
                </div>


                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
          <button type="submit" class="btn btn-primary px-4">Save Changes</button>

                    </div>
                </div>
            </form>
        </div>
    </div>




</div> --}}
