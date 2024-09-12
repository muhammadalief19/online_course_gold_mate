@extends('admin.admin_dashboard')
@section('title', 'Admin Online-Course | Add Role Permission')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<style>
    .form-check-label{
        text-transform: capitalize;
    }
</style>


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                @if (Session::has('error'))
                <div class="alert alert-danger solid alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                    <strong>Error!</strong> {{ Session::get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success solid alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                    <strong>Success!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
                @endif
            </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                Add Role Permission
                                <form id="myForm" action="{{ route('role.permission.store') }}" method="post" class="row g-3" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label for="input1" class="form-label"> Roles Name</label>
                                        <select name="role_id" class="mb-3" aria-label="Default select example">
                                            <option selected="" disabled>Open Roles</option>
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckMain">
                                        <label class="form-check-label" for="flexCheckMain">Permission All </label>
                                    </div>
                                    <hr>
                                    @foreach ($permission_groups as $group)
                                    <div class="row">
                                        <div class="col-3">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault"> {{ $group->group_name }}</label>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            @php
                                                $permissions = App\Models\User::getpermissionByGroupName($group->group_name)
                                            @endphp

                                            @foreach ($permissions as $permission)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="checkDefault{{ $permission->id }}">
                                                <label class="form-check-label" for="checkDefault{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                            @endforeach
                                            <br>

                                        </div>

                                    </div>
                                    @endforeach

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
    </div>
</div>
<script>
    $('#flexCheckMain').click(function(){
        if ($(this).is(':checked')) {
          $('input[ type=checkbox]').prop('checked',true)
        }else{
            $('input[ type=checkbox]').prop('checked',false)
        }
    });
</script>
@endsection

{{-- <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Role In Permission</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">

            <form id="myForm" action="{{ route('role.permission.store') }}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="input1" class="form-label"> Roles Name</label>
                    <select name="role_id" class="form-select mb-3" aria-label="Default select example">
                        <option selected="" disabled>Open Roles</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckMain">
                    <label class="form-check-label" for="flexCheckMain">Permission All </label>
                </div>
                <hr>
                @foreach ($permission_groups as $group)
                <div class="row">
                    <div class="col-3">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> {{ $group->group_name }}</label>
                        </div>

                    </div>

                    <div class="col-9">
                        @php
                            $permissions = App\Models\User::getpermissionByGroupName($group->group_name)
                        @endphp

                        @foreach ($permissions as $permission)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="checkDefault{{ $permission->id }}">
                            <label class="form-check-label" for="checkDefault{{ $permission->id }}">{{ $permission->name }}</label>
                        </div>
                        @endforeach
                        <br>

                    </div>

                </div>
                @endforeach

                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
          <button type="submit" class="btn btn-primary px-4">Save Changes</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#flexCheckMain').click(function(){
        if ($(this).is(':checked')) {
          $('input[ type=checkbox]').prop('checked',true)
        }else{
            $('input[ type=checkbox]').prop('checked',false)
        }
    });
</script> --}}
