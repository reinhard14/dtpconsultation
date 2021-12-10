<?php

namespace App\Http\Controllers;

use App\Mail\Booked;
use App\Models\Booking;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\BookedNotification;
use Illuminate\Support\Facades\Notification;


class BookingController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['store','sendNotification']]);
    }

    public function index()
    {
        //View schedules by booking
        $userId = auth()->user()->id;

        $books = DB::table('bookings as Bookings')
                ->leftJoin('schedules as Schedules',  'Bookings.schedule_id', '=', 'Schedules.id')
                ->select('Bookings.*', 'Schedules.title')
                ->where('user_id', $userId)
                ->paginate(6);

        /*
        $books = Booking::orderBy('created_at','asc')->paginate(6);
        */
        //dd($books);
        return view('admin.booked.index')->with('books', $books);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $data = $request->query();
        //dd($data['schedule_id'] );

        $this->validate($request, [
            'email' => 'required',
        ]);

        //new instance
        $booked = new Booking;
        //save
        $booked -> email = $request->input('email');
        $booked -> schedule_id = $data['schedule_id'];

        $msg = "Successfully booked! You will receive an email notification if your request was approved.";

        $booked -> save();

        return redirect('schedules')->with('success', $msg);

    }

    public function sendNotification($id) {

        $bookedUser = Booking::findOrFail($id);

        $bookingData = [
            'body' => 'Your request on our system has been approved! you can check more Schedules on our site.',
            'bookingText' => 'View Schedules',
            'url' => url('/schedules'),
        ];

        //send email
        $bookedUser -> notify(new BookedNotification($bookingData));
        //Notification::send($user, new BookedNotification($bookingData));

        //terminate after sendding
        $bookedUser -> delete();

        //redirecting with message.
        return redirect('/bookings')->with('success', 'Request approved!');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find schedule id
        $booked = Booking::find($id);
        //terminate
        $booked -> delete();
        //redirecting with message.
        return redirect('/bookings')->with('success', 'Request deleted!');
    }

}
