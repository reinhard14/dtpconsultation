@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $schedule->title }}</div>
                <div class="card-body box-profile">

                        <h3>Date of Schedule {{ $schedule->date }}</h3>

                        <h5>From {{  $schedule->start_time }} to {{ $schedule->end_time }}</h5>

                        @if(!Auth::guest())
                            @if (Auth::user()->id == $schedule->user_id)

                                <a href="/schedule/{{ $schedule->id }}/edit" class="btn btn-primary"> Edit </a>

                                {!! Form::open (['action' => ['App\Http\Controllers\SchedulesController@destroy', $schedule->id], 'method'=>'POST', 'class' => 'btn pull-left']) !!}

                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

                            @endif
                                {!! Form::close() !!}
                                <a href="{{ URL::previous() }}"  class="btn btn-secondary"> Back </a>
                        @else

                        {!! Form::open (['action' => ['App\Http\Controllers\BookingController@store', 'schedule_id' => $schedule->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                            <div class="form-group">
                                {{ Form::label ('email', 'Please enter email address: ') }}
                                {{ Form::text ('email', '', ['class' => 'form-control', 'placeholder' => 'Insert active email address here...', 'required autocomplete' => 'email']) }}

                            </div>

                            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

                        <a href="{{ URL::previous() }}"  class="btn btn-secondary"> Back </a>

                        {!! Form::close () !!}

                        @endif

                    <hr>
                    <small> by: {{ $schedule->user->name }}</small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



