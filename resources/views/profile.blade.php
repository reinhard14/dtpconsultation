@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Profile Information') }}</div>

                    <div class="card-body box-profile">
                        <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="../../dist/img/user4-128x128.png"
                            alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"> {{ Auth::user()->name }} </h3>

                        <p class="text-muted text-center">Secret Agent</p>
                    </div>

                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Basic Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Educational Background</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Employment Infomation</a>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Job related</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                            </br>
                                            <div class="container">
                                                <div class="row">

                                                    <!-- /First -->
                                                    <div class="col-md-3">
                                                        <strong><i class="fas fa-book mr-1"></i> Acct Number</strong>
                                                            <p class="text-muted">
                                                                {{ Auth::user()->id }}
                                                            </p>
                                                    </div>

                                                    <!-- /Second -->
                                                    <div class="col-md-3">
                                                        <strong> First Name</strong>
                                                            <p class="text-muted">
                                                                {{ Auth::user()->name }}
                                                            </p>
                                                    </div>
                                                    <!-- /Third -->
                                                    <div class="col-md-3">
                                                        <strong> Email</strong>
                                                            <p class="text-muted">
                                                                {{ Auth::user()->email }}
                                                            </p>
                                                    </div>

                                                    <!-- /Fourth -->
                                                    <div class="col-md-3">

                                                        <strong><i class="far fa-file-alt mr-1"></i> Facebook Account</strong>
                                                            <p class="text-muted">
                                                                na
                                                            </p>
                                                    </div>
                                                    <!-- /Col -->
                                                </div>
                                                <!-- /Row -->
                                            </div>
                                            <!-- /Container -->
                                        </div>
                                        <!-- /pane close -->
                                        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                                            </br>
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                   <thead>
                                                        <tr>
                                                            <th>Name of School</th>
                                                            <th>Course</th>
                                                            <th>Month and year graduated</th>
                                                            <th>Address</th>
                                                            <th>Honors Received</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><b>ELEMENTARY:</b>
                                                                </br>
                                                                N/A
                                                            </td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>SECONDARY:</b>
                                                                </br>
                                                                NA
                                                            </td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>SENIOR HIGH SCHOOL:</b>
                                                                </br>
                                                                N/A
                                                            </td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>TECHNICAL / VOCATIONAL:</b>
                                                                </br>
                                                                N/A
                                                            </td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>BACCALAUREATE:</b>
                                                                </br>
                                                                N/A
                                                                        </td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>GRADUATE STUDIES:</b>
                                                                </br>
                                                                N/A
                                                            </td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>POST GRADUATE:</b>
                                                                </br>
                                                                N/A
                                                            </td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                                            </br>
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Employment History</th>
                                                            <th>Address</th>
                                                            <th>Job title</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><b>First Employment:</b>
                                                                </br>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <select class="custom-select" id="gender" disabled>
                                                                            <option>Private</option>
                                                                            <option>Public</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                </br>
                                                                N/A
                                                            </td>
                                                            <td>
                                                                </br>
                                                                N/A
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Current Employment:</b>
                                                                </br>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <select class="custom-select" id="gender" disabled>
                                                                            <option>Private</option>
                                                                            <option>Public</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                </br>
                                                                N/A
                                                            </td>
                                                            <td>
                                                                </br>
                                                                N/A
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Business Name:</b>
                                                                </br>
                                                                N/A
                                                            </td>
                                                            <td>
                                                                </br>
                                                                N/A</td>
                                                            <td>
                                                                </br>
                                                                N/A</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                                            </br>
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Duration</th>
                                                            <th>Date Hired</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <select class="custom-select" id="gender" disabled>
                                                                            <option>Less than a Month</option>
                                                                            <option></option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                N/A
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.Tab Content -->
                            </div>
                            <!-- /.Body -->
                    </div>
                    <!-- /.Head -->


                </div>
            </br>
                    <!-- /.SAVING HERE -->
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-md-3">
                                <a href="/home" class="btn btn-secondary"> Back </a>
                            </div>

                        </div>
                    </div>
                    <!-- /.SAVING HERE -->
            </div>

        </div>
    </div>
</div>

@endsection
