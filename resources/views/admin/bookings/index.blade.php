@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Schedule lists') }}</div>
                    <div class="card-body box-profile">

                        @if(count($schedules)>0)

                            @foreach ($schedules as $schedule)

                                <div class="well">
                                    <h5><a href="/schedules/{{ $schedule->id }}"> {{ $schedule->title }}</a></h5>
                                        <small><strong> Scheduled by:</strong> {{ $schedule->user->name }}</small>
                                        <small><strong> Date:</strong> {{ $schedule->date }}{{ $schedule->time }}</small>
                                        <hr>
                                </div>

                            @endforeach

                            <br></br>
                            <div class="d-flex justify-content-center">
                                    {{ $schedules->links() }}
                            </div>
                        @else

                            <p>No lists of schedules yet...</p>

                        @endif
                        <div class="d-flex justify-content-center">
                            <a href="{{ URL::previous() }}"  class="btn btn-secondary"> Back </a>
                        </div>

                    </div>

            </div>
        </div>
    </div>
</div>

@endsection
