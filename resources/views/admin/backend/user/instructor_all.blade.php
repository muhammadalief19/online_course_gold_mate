@extends('admin.admin_dashboard')
@section('title','Admin Online-Course | All Instructor')
@section('admin')

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
                        <h5>All Instructor</h5>
                        <div class="table-responsive full-data">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>User Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Is Active</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key=> $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td> <img src="{{ (!empty($item->photo)) ? url('upload/user_images/'.$item->photo) : url('upload/no_image.jpg')}}" alt="" style="width: 70px; height:40px;"> </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td> @if ($item->status == 1)
                                            <span class="btn btn-success">Active </span>
                                            @else
                                            <span class="btn btn-danger">InActive </span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->UserOnline())
                                            <span class="badge badge-pill bg-success">Active Now</span>
                                            @else
                                            <span class="badge badge-pill bg-danger">{{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }} </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="form-check-danger form-check form-switch">
                                                <input class="form-check-input status-toggle large-checkbox" type="checkbox" id="flexSwitchCheckCheckedDanger" data-user-id="{{ $item->id }}" {{ $item->status ? 'checked' : ''}}  >
                                                <label class="form-check-label" for="flexSwitchCheckCheckedDanger"> </label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.status-toggle').on('change', function(){
            var userId = $(this).data('user-id');
            var isChecked = $(this).is(':checked');

            // send an ajax request to update status

            $.ajax({
                url: "{{ route('update.user.stauts') }}",
                method: "POST",
                data: {
                    user_id : userId,
                    is_checked: isChecked ? 1 : 0,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response){
                    toastr.success(response.message);
                },
                error: function(){

                }
            });

        });
    });
</script>
@endsection
