<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;


class SchedulesController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        //paginate displaying
        $schedules = Schedule::orderBy('created_at','asc')->paginate(6);
        return view('admin.bookings.index')->with('schedules', $schedules);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create() {

        return view('admin.bookings.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
        ]);

        //new schedule
        $schedules = new Schedule;
        //get form data
        $schedules -> title = $request->input('title');
        $schedules -> start_time = $request->input('start_time');
        $schedules -> end_time = $request->input('end_time');
        $schedules -> date = $request->input('date');
        //schedules assign value with logged in userid
        $schedules -> user_id = auth()->user()->id;
        //saving instance
        $schedules -> save();

        //redirecting with message.
        return redirect('/home')->with('success','Schedule created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //get model id
        $schedule = Schedule::find($id);
        //return view and send value of model
        return view('admin.bookings.show')->with('schedule', $schedule);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $schedule = Schedule::find($id);

        //check current user
        if (auth()->user()->id !== $schedule->user_id) {
            return redirect('/schedules')->with('errors', 'Unauthorized user.');
        }
        return view('admin.bookings.edit')->with('schedule', $schedule);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
        ]);

        //find schedule ID
        $schedules = Schedule::find($id);
        //fields
        $schedules -> title = $request->input('title');
        $schedules -> start_time = $request->input('start_time');
        $schedules -> end_time = $request->input('end_time');
        $schedules -> date = $request->input('date');

        //saving instance
        $schedules -> save();

        //redirecting with message.
        return redirect('/home')->with('success','Schedule updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //find schedule id
        $schedules = Schedule::find($id);
        //terminate
        $schedules -> delete();
        //redirecting with message.
        return redirect('/home')->with('success', 'Schedule deleted!');

    }

}
