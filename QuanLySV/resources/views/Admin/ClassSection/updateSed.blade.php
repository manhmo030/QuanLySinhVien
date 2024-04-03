@extends('LayoutAdmin.index')
@section('admin_content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Update Start End Date</h4>

                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="{{ route('admin.classSectionSchedule.form', ['start_end_date_id' => $sed->start_end_date_id]) }}">Schedule</a>
                        </li>
                        <li class="breadcrumb-item active"><a>Update Start End Date</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide"
                                    action="{{ route('admin.updateSed.submit', ['start_end_date_id' => $sed->start_end_date_id]) }}"
                                    method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-2">
                                        </div>
                                        <div class="col-xl-8">

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="val-currency">Start Date
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="date" class="form-control" name="start_date"
                                                        value="{{ $sed->start_date }}">
                                                    @if ($errors->has('start_date'))
                                                        <p class="error-message">{{ $errors->first('start_date') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="val-currency">End Date
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="date" class="form-control" name="end_date"
                                                        value="{{ $sed->end_date }}">
                                                    @if ($errors->has('end_date'))
                                                        <p class="error-message">{{ $errors->first('end_date') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="val-currency">
                                                </label>
                                                <div class="col-lg-9">
                                                    <button id="deleteSed-btn" type="button" style="float: right;"
                                                        class="btn btn-primary bg-danger">Delete</button>
                                                    <button type="submit" style="float: right;"
                                                        class="btn btn-primary mr-3 ">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                        </div>
                                    </div>
                                </form>
                                <form id="deleteSed"
                                    action="{{ route('admin.deleteSed.submit', ['start_end_date_id' => $sed->start_end_date_id]) }}"
                                    method="POST">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @if (session('success'))
        <input type="hidden" id="inputToastSuccess" value="{{ session('success') }}">
    @endif
    @if (session('error'))
        <input type="hidden" id="inputToastError" value="{{ session('error') }}">
    @endif

    <script src="{{ asset('assetAdmin/js/a/delete.js') }}"></script>
@endsection