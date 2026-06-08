<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
{
    $reservations = Reservation::latest()->get();

    return view('reservations.index', compact('reservations'));
}

 public function store(Request $request)
{
    $request->validate([
        'customer_name' => 'required',
        'email' => 'required|email',
        'reservation_date' => 'required',
        'reservation_time' => 'required',
        'number_of_people' => 'required|integer|min:1',
    ]);

    Reservation::create([
        'customer_name' => $request->customer_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'reservation_date' => $request->reservation_date,
        'reservation_time' => $request->reservation_time,
        'number_of_people' => $request->number_of_people,
        'note' => $request->note,
        'status' => 'pending'
    ]);
        

    return redirect()->route('reservations.index');
} 

}