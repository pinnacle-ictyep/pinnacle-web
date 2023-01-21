<?php

namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @group Gallery Management
 * 
 * Apis to manage the gallery resource.
 */


class GalleryController extends Controller
{

    public function index()
    {

        try {

            $galleries = Gallery::all();

            if ($galleries->count() < 0) {
                return response()->json([
                    'status' => true,
                    'message' => ' Gallery unavailable'
                ], 200);
            }

            return response()->json([
                'status' => true,
                'hotels' => $galleries
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ]);
        }
    }



}
