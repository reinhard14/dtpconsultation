@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create a schedule') }}</div>
                    <div class="card-body">

                            {!! Form::open (['action' => 'App\Http\Controllers\SchedulesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                <div class="form-group">
                                    {{ Form::label ('title', 'Schedule Name: ') }}
                                    {{ Form::text ('title', '', ['class' => 'form-control', 'placeholder' => 'Insert schedule name here...']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label ('start_time', 'Start time: ') }}
                                    {{ Form::selectRange('start_time', 01, 24); }}
                                    <!--<input type="time">-->
                                    <strong> to </strong>
                                    {{ Form::label ('end_time', 'End Time: ') }}
                                    {{ Form::selectRange('end_time', 1, 24); }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label ('date', 'Date of Availability: ') }}
                                    {{ Form::date('date', \Carbon\Carbon::now()); }}
                                </div>

                                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

                                <div class="d-flex justify-content-center">
                                    <a href="{{ URL::previous() }}"  class="btn btn-secondary"> Back </a>
                                </div>

                            {!! Form::close () !!}
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
