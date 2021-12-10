@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create a schedule') }}
                    <div class="float-right">
                        <a href="{{ route('schedules.create') }}" class="btn btn-primary"> Create new schedule </a>
                    </div>
                </div>

                <div class="card-body">

                    <h2>DASHBOARD for {{ Auth::user()->name }}! </h2>

                    <p>Main dashboard for teacher's accounts.</p>

                            @if(count($schedules) > 0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>

                                        @foreach($schedules as $schedule)
                                            <tr>
                                                <td>{{ $schedule->title }}</td>
                                                <td><a href="/schedules/{{ $schedule->id }}/edit" class="btn btn-secondary">Edit</a></td>
                                                <td>
                                                    {!! Form::open (['action' => ['App\Http\Controllers\SchedulesController@destroy', $schedule->id], 'method'=>'POST']) !!}

                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                            @else
                                <br>
                                    <p>No schedules created yet... click the "Click new schedule" button above to get started.</p>
                                <br>
                            @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
