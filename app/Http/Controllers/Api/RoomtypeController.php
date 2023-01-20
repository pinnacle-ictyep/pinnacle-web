<?php

namespace App\Http\Controllers\Api;

use App\Models\Roomtype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
             $store = Validator::make($request->all(),[
            'title' => 'required',
            'hotel_id' => 'exists:hotels,id',
            'price' => 'required',
            'image' => 'required',
         ]);
         
         $images = [];

         if($request->image){
            foreach ($request->image as $image) {
                $images = $image->store('image', 'public'); 
            }
         }

         if($store->fails()){
            return response()->json([
                'status'=> 'false',
                'message'=> 'validation error',
                'errors'=> $store->errors()
            ], 404);
    }

    $roomtype = Roomtype::create([
        'title' => $request->title,
        'price' => $request->price,
        'hotel_id' => $request->hotel_id,
        'image' => $images,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'roomtype Registeration Successful',
        'data' => $roomtype,
    ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
