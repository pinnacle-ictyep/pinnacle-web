<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @group Booking Management
 * 
 * Apis to manage the booking resource.
 */
class BookingController extends Controller
{
    public function store(Request $request){
        $input = $request->all();
        $update = Validator::make($request->all(),[
            'hotel_name' => 'required',
            'hotel_location' => 'required',
            'roomtype' => 'required',
            'hotel_id' => 'exists:hotels,id',
            'roomtype_id' => 'exists:roomtypes,id',
            'total' => 'required',
            'user_id' => 'nullable',
            'check_in' => 'required',
            'check_out' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'comment' => 'nullable',
        ]);

        if ($update->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $update->errors()
            ], 404);
        }

        Booking::create($input);
    

    return response()->json([
        'status' => true,
        'message' => 'Booked'
    ]);

    }

    public function show($id){
        $user = User::find($id);
        return response()->json([
            'status'=> true,
            'booking'=>$user->bookings()->get()
        ]);

        
    }
}
