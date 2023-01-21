<?php

namespace App\Http\Controllers\Api;

use App\Models\Roomtype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * @group Roomtype Management
 * 
 * Apis to manage the roomtype resource.
 */
class RoomtypeController extends Controller
{
    public function index()
    {
        $roomtypes = Roomtype::all();

        if($roomtypes->count()<0){
            return response()->json([
                'status' => true,
                'message' => 'no roomtype Registered yet',
            ], 200);
        }

        return response()->json([
            'status' => true,
            'roomtypes' => $roomtypes
        ]);
    }

    public function show($id)
    {
        try {
    
            $roomtypes = Roomtype::all();
        
            if($roomtypes->count()<0){
                return response()->json([
                    'status' => true,
                    'message' => ' roomtypes unavailable'
                ], 200);
            }
        
            // $hotels = Hotel::all();
            // foreach($hotels as $hotel)
        
            // foreach($roomtypes as $roomtype)
            // dd($roomtype->hotel_id);
        
            // if($roomtype->hotel_id == $hotel->id)
            
        
            return response()->json([
                'status' => true,
                'hotels' => $roomtypes
            ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'message'=> $th->getMessage()
                ]);
                
            }
    }
}
