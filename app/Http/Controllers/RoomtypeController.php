<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Roomtype;
use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtypes = Roomtype::all();
        return view('roomtype.index', ['roomtypes' => $roomtypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('roomtype.create', ['hotels'=> $hotels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'image'=> 'required',
            'price'=> 'required',
        ]);

        $img_dir = $request->file('image')->store('image', 'public');

        $roomtype = new Roomtype;
        $roomtype->title=$request->title;
        $roomtype->image=$img_dir;
        $roomtype->price=$request->price;
        $roomtype->hotel_id=$request->hotel_id;
        // $roomtype->hotel_id=auth()->user()->id;
        $roomtype->save();

        return redirect()->back()->with('message', 'saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function show(Roomtype $roomtype)
    {
        return view('roomtype.show', ['roomtype' => $roomtype]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomtype $roomtype)
    {
        return view('roomtype.edit', ['roomtype' => $roomtype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roomtype $roomtype)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'price' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('image', 'public');
        } else {
            $img_dir = $request->prev_photo;
        }

        $roomtype->update([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $img_dir,
            'hotel_id' => auth()->user()->id,
        ]);

        return redirect()->back()->with('message', 'SAVED!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomtype $roomtype)
    {
        $roomtype->delete();
        return redirect()->back()->with('msg', 'Deleted');
    }
}
