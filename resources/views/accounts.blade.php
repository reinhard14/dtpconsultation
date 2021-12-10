@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Account settings for ')}}{{ auth()->user()->name }}</div>

                <div class="card-body">

                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="contactNumber" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-md-10">
                                    <input type="email" class="form-control" id="contactNumber" placeholder="{{ auth()->user()->name; }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email Address</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="{{ auth()->user()->email; }}">
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-md-10">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                </div>
                                </div>
                            </form>

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
</div>

@endsection
