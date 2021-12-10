@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Approve A Requested Schedule') }}
                </div>

                <div class="card-body">

                    <h2>Booked schedules for {{ Auth::user()->name }}! </h2>

                    <p>List of requested schedules selected by students.</p>

                            @if(count($books) > 0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>Scheduled</th>
                                        <th>Requested by</th>
                                        <th>Approve Request ?</th>
                                        <th>Delete</th>
                                    </tr>
                                        @foreach($books as $book)
                                            <tr>
                                                <td>{{ $book->title }}</td>
                                                <td>{{ $book->email }}</td>
                                                <td>{!! Form::open (['action' => ['App\Http\Controllers\BookingController@sendNotification', $book->id], 'method'=>'POST']) !!}

                                                    {{ Form::hidden('_method', 'GET') }}
                                                    {{ Form::submit('Approve', ['class' => 'btn btn-secondary']) }}

                                                    {!! Form::close() !!}

                                                <td>
                                                    {!! Form::open (['action' => ['App\Http\Controllers\BookingController@destroy', $book->id], 'method'=>'POST']) !!}

                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach

                                </table>
                            @else

                                <br>
                                    <p>No Booked schedules yet...</p>
                                <br>

                            @endif

                            {{ $books->links() }}


                </div>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
