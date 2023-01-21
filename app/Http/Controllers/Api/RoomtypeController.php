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

   
}
