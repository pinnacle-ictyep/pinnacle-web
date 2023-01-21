<?php

namespace App\Http\Controllers\Api;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * @group Hotel Management
 * 
 * Apis to manage the Hotel resource.
 */
class HotelController extends Controller
{
    public function index()
    {

        $hotels = Hotel::all();

        if ($hotels->count() < 0) {
            return response()->json([
                'status' => true,
                'message' => 'no hotel Registed ',
            ], 200);
        }

        return response()->json([
            'status' => true,
            'hotels' => $hotels
        ]);
    }

    public function show($id)
    {
        $hotel = Hotel::where('id',$id)->with('roomtype', 'gallery')->first();

        if ($hotel->count() < 0) {
            return response()->json([
                'status' => true,
                'message' => 'no hotel in this application',
            ], 200);
        }

        return response()->json([
            'status' => true,
            'hotels' => $hotel
        ]);
    }
}
