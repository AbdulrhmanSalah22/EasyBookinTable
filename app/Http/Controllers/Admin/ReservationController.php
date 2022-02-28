<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function showReservations(){
        $reservations = Reservation::all();
       return view('Reservation.show' , compact('reservations'));
    }

    public function showOrderDetails(){
         
        return view('Reservation.orderData');
    }

    public function getOrderDetails(){
         
        
    }
}
