<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::all();
        return view('booking.index',['bookings'=>$bookings]);
    }

    public function show($id){
        $booking = Booking::findOrFail($id);
        return view('booking.show', ['booking'=> $booking]);
    }

    public function destroy($id){
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->back()->with('message', 'Deleted');
    }
}
