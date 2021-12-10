<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Booking;

class Schedule extends Model
{
    use HasFactory;

    public function user() {

        return $this->belongsTo('App\Models\User');

    }

    public function books() {

        return $this->hasMany('App\Models\Booking');

    }
}
