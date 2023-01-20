<?php

namespace App\Http\Controllers\Api;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $hotels = Hotel::all();

        if($hotels->count()<0){
            return response()->json([
                'status' => true,
                'message' => 'no hotel in this application',
            ], 200);
        }

        return response()->json([
            'status' => true,
            'hotels' => $hotels
        ]);
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
            'name' => 'required',
            'email' => 'nullable|unique:users,email',
            'phone' => 'required',
            'location' => 'required',
            'address' => 'required',
            'price' => 'required',
            'description' => 'required',
            'amenities' => 'nullable',
            'rules' => 'nullable',
            'image' => 'required',
         ]);

         if($store->fails()){
            return response()->json([
                'status'=> 'false',
                'message'=> 'validation error',
                'errors'=> $store->errors()
            ], 404);
    }

    $hotel = Hotel::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'price' => $request->price,
        'location' => $request->location,
        'address' => $request->address,
        'image' => $request->image,
        'description' => $request->description,
        'rules' => $request->rules,
        'amenities' => $request->amenities,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Hotel Registeration Successful',
        'data' => $hotel,
    ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status'=> false,
                'message'=> 'server error',
                'error'=> $th->getMessage()
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel, $id)
    {
        $hotel = Hotel::findOrFail($id);

        if($hotel->count()<0){
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel, $id)
    {
        $input = $request->all();
        $hotel = Hotel::findOrFail($id);
        $validhotel =validator::make($request->all(),[
            'name' => 'required',
            'email' => 'nullable|unique:users,email',
            'phone' => 'required',
            'location' => 'required',
            'price' => 'required',
            'description' => 'required',
            'amenities' => 'nullable',
            'rules' => 'nullable',
            'image' => 'required',
        ]);

        if ($validhotel->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validhotel->errors()
            ], 401);
        }
        
        
        $hotel->update($input);    

        return response()->json([
            'status' => true,
            'message' => 'data Updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel, $id)
    {
        $hotel= Hotel::find($id);
       
        if($hotel == null){
        return response()->json([
            'status' => true,
            'message' => 'no such hotel in this application',  
        ], 200);
    }

    $hotel->delete($id);

    return response()->json([
        'status' => true,
        'message' => 'hotel deleted'
    ]);
    }
}
