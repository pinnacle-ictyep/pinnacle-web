<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Gallery;
use App\Models\Roomtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Gallery::all();
        $roomtypes = roomtype::all();
        return view('gallery.index', ['gallerys'=> $gallerys], ['roomtypes'=> $roomtypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    public function creategallery()
    {
        return view('gallery.createagent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'img_scr'=> 'required',
        //     'img_alt'=> 'required',
        //     'roomtype_id'=> 'required'
        // ]);

        // foreach($request->file('img_scr') as $images){
        //     $imgPath=$images->store('gallery', 'public');
        //     $imgData = new Gallery;
        //     $imgData->roomtype_id=$request->roomtype_id;
        //     $imgData->img_scr = $imgPath;
        //     $imgData->img_alt = $request->img_alt;
        //     $imgData->save();
        // }

        // return redirect()->back()->with('message', 'saved');
    }

    public function storegallery(Request $request)
    {
        $request->validate([
            'img_scr'=> 'required',
            'hotel_id'=> 'exists:hotels,id'
        ]);

        $hotel= Hotel::find(auth()->user()->id);
        foreach($request->file('img_scr') as $images){
            $imgPath=$images->store('gallery', 'public');
            $imgData = new Gallery;
            $imgData->hotel_id=auth()->user()->id;
            $imgData->img_scr = $imgPath;
            $imgData->img_alt = $hotel->name;
            $imgData->save();
        }

        return redirect()->back()->with('message', 'saved');
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

    public function showgallery()
    {
        $gallery = Gallery::all();
        $roomtypes = Roomtype::all();
        return view('gallery.showagent', ['galleries'=> $gallery]);
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

    public function editgallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', ['gallery' => $gallery]);
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
    public function delete($id)
    {
        //
    }

    public function deletegallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->back()->with('stat', 'Deleted');
    }
}
