@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="content-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Report View</h5>
                        <form id="myForm" action="{{ route('search.by.date') }}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="input1" class="form-label">Search By Date</label>
                                <input type="date" name="date" class="form-control" id="input1"  >
                            </div>
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">

                        <form id="myForm" action="{{ route('search.by.month') }}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-md-12">
                                <label for="input1" class="form-label">Search By Month</label>
                                <select name="month" class="mb-3" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    <option value="Janurary">Janurary</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="Jun">Jun</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="input1" class="form-label">Search By Year</label>
                                <select name="year_name" class="mb-3" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form id="myForm" action="{{ route('search.by.year') }}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="input1" class="form-label">Search By Year</label>
                                <select name="year" class="mb-3" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                {{-- // end row  --}}
            </div>
        </div>
    </div>






</div>





@endsection
