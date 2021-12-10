<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\SchedulesController;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\Booked;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', ('landing_page'))->name('landing');
Route::view('/about', ('about'))->name('about');

Auth::routes();

Route::resource('schedules', SchedulesController::class);
Route::resource('bookings', BookingController::class);
//Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index'])->name('home2');

//admin routin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//main routes
Route::get('/account', [App\Http\Controllers\TeachersController::class, 'account'])->name('account');
Route::get('/profile', [App\Http\Controllers\TeachersController::class, 'profile'])->name('profile');


//eloquent check
Route::get('/checkUser/{id}', function($id){

    $user = User::find($id);

    foreach( $user->schedules as $schedule) {

        echo $schedule->title . "<br>";

    }
 });


 Route::get('/checkSchedule/{id}', function($id){

    $schedules = Schedule::find($id);

        echo $schedules->user->email . "<br>";


 });

 Route::get('/checkBooks/{id}/', function($id){

    $schedules = Schedule::findOrFail($id);

    foreach( $schedules->books as $booking) {

        echo $booking->id;

    }

 });

 Route::get('/checkSchedules/{id}', function($id){

    $description = Booking::findOrFail($id);

        echo $description->schedule->title;

 });


//Mailing routes.

Route::get('/emailsmtp',function() {
    Mail::to('dwc.fs.dummy@gmail.com')->send(new Booked());
});

Route::get('/bookings/{$id}/send_email', function ($id) {

    Mail::to('dwc.fs.dummy@gmail.com')->send(new Booked());

    return new Booked();
});

Route::get('/sendNotification/{id}', [App\Http\Controllers\BookingController::class, 'sendNotification']);

/*
|--------------------------------------------------------------------------
| Web Routes for Email
|--------------------------------------------------------------------------
|
| Email routing
|
*/
Route::get('/bookings/{id}/sendNotification', [App\Http\Controllers\BookingController::class, 'sendNotification']);
