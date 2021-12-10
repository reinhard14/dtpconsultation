@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit a Schedule') }}</div>
                    <div class="card-body">

                        {!! Form::open (['action' => ['App\Http\Controllers\SchedulesController@update', $schedule->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                        <div class="form-group">
                            {{ Form::label ('title', 'Schedule Name: ') }}
                            {{ Form::text ('title', '', ['class' => 'form-control', 'placeholder' => 'Edit schedule name here...']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label ('start_time', 'Start time: ') }}
                            {{ Form::selectRange('start_time', 1, 24); }}
                            <strong> to </strong>
                            {{ Form::label ('end_time', 'End Time: ') }}
                            {{ Form::selectRange('end_time', 1, 24); }}
                        </div>

                        <div class="form-group">
                            {{ Form::label ('date', 'Date of Availability: ') }}
                            {{ Form::date('date', \Carbon\Carbon::now()); }}
                        </div>

                            {{ Form::hidden('_method', 'PUT') }}
                            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                            <a href="{{ URL::previous() }}"  class="btn btn-secondary"> Back </a>

                        {!! Form::close () !!}

                    </div>

            </div>
        </div>
    </div>
</div>

@endsection
