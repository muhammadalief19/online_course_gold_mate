@extends('admin.admin_dashboard')
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
                        <div class="page-title flex-wrap">
                            <form action="" method="GET" class="input-group search-area mb-md-0 mb-3" >
                                <input type="search" class="form-control" name="search" placeholder="Search here...">
                                <span class="input-group-text">
                                    <button type="submit">
                                        <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="#01A3FF"/>
                                        </svg>
                                    </button>
                                </span>
                            </form>
                            <div>
                                <a href="{{ route('add.category') }}" class="btn btn-primary px-5">Add Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <h5>All Categories</h5>
                        <div class="table-responsive full-data">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Category Image </th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($category as $key=> $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td> <img src="{{ asset($item->image) }}" alt="" style="width: 70px; height:40px;"> </td>
                                        <td>{{ $item->category_name }}</td>
                                        <td>
                                            @if (Auth::user()->can('category.edit'))
                                            <a href="{{ route('edit.category',$item->id) }}" class="btn btn-info px-5">Edit </a>
                                            @endif
                                            @if (Auth::user()->can('category.delete'))
                                            <a href="{{ route('delete.category',$item->id) }}" class="btn btn-danger px-5" id="delete">Delete </a>
                                            @endif
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

@endsection
{{-- <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Category</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
           <a href="{{ route('add.category') }}" class="btn btn-primary px-5">Add Category </a>
            </div>
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
                            <th>Category Image </th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($category as $key=> $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td> <img src="{{ asset($item->image) }}" alt="" style="width: 70px; height:40px;"> </td>
                            <td>{{ $item->category_name }}</td>
                            <td>
     @if (Auth::user()->can('category.edit'))
     <a href="{{ route('edit.category',$item->id) }}" class="btn btn-info px-5">Edit </a>
     @endif
     @if (Auth::user()->can('category.delete'))
       <a href="{{ route('delete.category',$item->id) }}" class="btn btn-danger px-5" id="delete">Delete </a>
       @endif
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>




</div> --}}
