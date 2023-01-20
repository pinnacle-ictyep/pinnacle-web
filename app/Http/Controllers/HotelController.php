<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Hotel;
use Illuminate\Http\Request;

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
        return view('hotel.index', ['hotels' => $hotels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create',);
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
             $request->validate([
            'name' => 'required',
            'email' => 'nullable|unique:users,email',
            'phone' => 'required',
            'location' => 'required',
            'address' => 'required',
            'price' => 'required',
            'amenities' => 'required',
            'description' => 'required',
            'rules' => 'required',
            'user_id' => 'unique:hotels,user_id',
            'image' =>'mimes:jpg,png,jpeg'
        ]);  

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('image', 'public');
        } else {
             $img_dir = 'upload photo';
        }

        $hotel = new Hotel;
            $hotel->name = $request->name;
            $hotel->email = $request->email;
            $hotel->phone = $request->phone;
            $hotel->price = $request->price;
            $hotel->location = $request->location;
            $hotel->amenities = $request->amenities;
            $hotel->description = $request->description;
            $hotel->rules = $request->rules;
            $hotel->address = $request->address;
            $hotel->user_id = auth()->user()->id;
            $hotel->id = auth()->user()->id;
            $hotel->image = $img_dir;
            $hotel->save();

            $hotell= Hotel::find(auth()->user()->id);
        foreach($request->file('images') as $images){
            $imgPath=$images->store('image', 'public');
            $imgData = new Gallery;
            $imgData->hotel_id = $hotel->id;
            $imgData->img_scr = $imgPath;
            $imgData->img_alt = $hotell->name;
            $imgData->save();
        }
        return redirect()->back()->with('message', 'Hotel Registration Successful');
        } catch (\Throwable $th) {
            return redirect()->back()->with('status', 'You already registered your hotel, please create a new account to register a new hotel');
           
        }
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('hotel.show', ['hotel' => $hotel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('hotel.edit', ['hotel' => $hotel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|unique:users,email',
            'phone' => 'required',
            'location' => 'required',
            'address' => 'required',
            'price' => 'required',
            'description' => 'required',
            'amenities' => 'required',
            'rules' => 'required',
            'image' => 'mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('image', 'public');
        } else {
            $img_dir = $request->prev_photo;
        }

        $hotel->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'price' => $request->price,
            'location' => $request->location,
            'image' => $img_dir,
            'amenities' => $request->amenities,
            'descrition' => $request->description,
            'rules' => $request->rules,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('message', 'Hotel updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel=Hotel::findOrFail($id);
        $hotel->delete();
        return redirect()->back()->with('message', 'Deleted');
    }
    
}
