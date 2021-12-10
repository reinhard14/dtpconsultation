<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        //return dd($user->schedules);
        //$all_schedules = $user->schedules;
        //dd($all_schedules);
        return view('user_dashboard')->with('schedules', $user->schedules);
    }


}
