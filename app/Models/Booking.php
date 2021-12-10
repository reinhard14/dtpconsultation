<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Schedule;
use App\Models\User;

class Booking extends Model
{
    use HasFactory, Notifiable;

    public function schedule() {

        return $this->belongsTo('App\Models\Schedule');

    }
}
