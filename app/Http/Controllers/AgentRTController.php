<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Http\Request;

class AgentRTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createroomtypes()
    {
        return view('roomtype.createagent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeroomtypes(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'price' => 'required',
        ]);

        $img_dir = $request->file('image')->store('image', 'public');

        $roomtype = new Roomtype;
        $roomtype->title = $request->title;
        $roomtype->image = $img_dir;
        $roomtype->price = $request->price;
        $roomtype->hotel_id = auth()->user()->id;
        $roomtype->save();

        return redirect()->back()->with('message', 'saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showroomtypes()
    {
        $roomtypes = Roomtype::all();
        return view('roomtype.showagent', ['roomtypes' => $roomtypes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editroomtypes($id)
    {
        $roomtypes = Roomtype::all();
        return view('roomtype.editagent',  ['roomtypes' => $roomtypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateroomtypes(Request $request, $id)
    {
        $roomtype = Roomtype::findOrFail($id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteroomtypes($id)
    {
        $roomtype = Roomtype::findOrFail($id);
        $roomtype->delete($id);
        return redirect()->back()->with('messag', 'Deleted');
    }
}
