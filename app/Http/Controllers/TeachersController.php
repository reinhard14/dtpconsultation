<?php

namespace App\Http\Controllers;



class TeachersController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('user_dashboard');

    }

    public function profile() {

        return view('profile');

    }

    public function account() {
        //dd(route('home'));
        //dd($role);
        //dd($data);
        //dd(auth()->user());
        //dd(route('dashboard'));
        //dd(view('alumni_dashboard'));
        return view('accounts');

    }




}
