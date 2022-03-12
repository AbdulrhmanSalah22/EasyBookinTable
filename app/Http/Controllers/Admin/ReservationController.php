<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order_Meals;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function showReservations(){
        $reservations = Reservation::all();
       return view('Reservation.show' , compact('reservations'));
    }

    public function showOrderDetails($id){

   $details =   Order_Meals::with(['getOption','getMeals'])->where('order_id' , $id)->get();
        return view('Reservation.orderData' , compact('details'));
    }

    public function deleteReservations(){
        Reservation::truncate();
        return redirect(route('ShowReservations'));
    }
}
