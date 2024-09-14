@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<style>
    .large-checkbox{
        transform: scale(1.5);
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
                        <h5>All Active Review</h5>
                        <div class="table-responsive full-data">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Course Name </th>
                                        <th>Username </th>
                                        <th>Comment </th>
                                        <th>Rating </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($review as $key=> $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item['course']['course_name'] }}</td>
                                        <td>{{ $item['user']['name'] }}</td>
                                        <td>{{ $item->comment }}</td>
                                        <td>
                                       @if($item->rating == NULL)
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       @elseif ($item->rating == 1)
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       @elseif ($item->rating == 2)
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       @elseif ($item->rating == 3)
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       @elseif ($item->rating == 4)
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-secondary"></i>
                                       @elseif ($item->rating == 5)
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       <i class="bx bxs-star text-warning"></i>
                                       @endif
                                        </td>
                                        <td>
                                            <div class="form-check-danger form-check form-switch">
                                                <input class="form-check-input status-toggle large-checkbox" type="checkbox" id="flexSwitchCheckCheckedDanger" data-review-id="{{ $item->id }}" {{ $item->status ? 'checked' : ''}}  >
                                                <label class="form-check-label" for="flexSwitchCheckCheckedDanger"> </label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                            {{-- {{ $dataPacketFull->links() }} --}}
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
            var reviewId = $(this).data('review-id');
            var isChecked = $(this).is(':checked');

            // send an ajax request to update status

            $.ajax({
                url: "{{ route('update.review.stauts') }}",
                method: "POST",
                data: {
                    review_id : reviewId,
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

{{-- <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Active Review </li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">

        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Course Name </th>
                            <th>Username </th>
                            <th>Comment </th>
                            <th>Rating </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($review as $key=> $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item['course']['course_name'] }}</td>
                            <td>{{ $item['user']['name'] }}</td>
                            <td>{{ $item->comment }}</td>
                            <td>
                           @if($item->rating == NULL)
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           @elseif ($item->rating == 1)
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           @elseif ($item->rating == 2)
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           @elseif ($item->rating == 3)
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           @elseif ($item->rating == 4)
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-secondary"></i>
                           @elseif ($item->rating == 5)
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           @endif
                            </td>


                            <td>
    <div class="form-check-danger form-check form-switch">
        <input class="form-check-input status-toggle large-checkbox" type="checkbox" id="flexSwitchCheckCheckedDanger" data-review-id="{{ $item->id }}" {{ $item->status ? 'checked' : ''}}  >
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




</div> --}}
