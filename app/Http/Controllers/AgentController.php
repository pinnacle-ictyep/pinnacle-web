<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hotel;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    public function createhotel()
    {
        return view('hotel.createagent');
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
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required',
            'password' => 'required',
            'role' => 'nullable',
            'address' => 'nullable',
            'website' => 'nullable',
            'image' => 'nullable',
        ]);
        $img_dir = $request->file('image')->store('image', 'public');

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'image' => $img_dir,
            'website' => $request->website,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('message', 'Resgisteration Successful');
    }

    public function storehotel(Request $request)
    {
        try {
            $request->validate([
            'name' => 'required',
            'email' => 'nullable|unique:hotels,email',
            'phone' => 'required',
            'location' => 'required',
            'address' => 'required',
            'price' => 'required',
            'amenities' => 'required',
            'description' => 'required',
            'rules' => 'required',
            'user_id' => 'exists:users,id|unique:hotels,user_id',
            'image' => 'mimes:jpg,png,jpeg'
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
        foreach ($request->file('images') as $images) {
            $imgPath = $images->store('image', 'public');
            $imgData = new Gallery;
            $imgData->hotel_id = auth()->user()->id;
            $imgData->img_scr = $imgPath;
            $imgData->img_alt = $hotell->name;
            $imgData->save();
        }
        return redirect()->route('dashboard')->with('messagee', 'Hotel Registration Successful');

        } catch (\Throwable $th) {
           return response()->json([
            'error' => $th->getMessage()
           ]);
            // return redirect()->back()->with('status', 'You already registered your hotel, please create a new account to register a new hotel');
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
        $user = User::findOrFail($id);
        return view('user.show', ['user' => $user]);
    }

    public function showhotel($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotel.show', ['hotel' => $hotel]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', ['user' => $user]);
    }

    public function edithotel($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotel.edit', ['hotel' => $hotel]);
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
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'email' =>  ['required', Rule::unique('users')->ignore($user)],
            'phone' => 'required',
            'role' => 'nullable',
            'gender' => 'nullable',
            'address' => 'nullable',
            'website' => 'nullable',
            'image' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('image', 'public');
        } else {
            $img_dir = $request->prev_photo;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'gender' => $request->gender,
            'image' => $img_dir,
            'website' => $request->website,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('message', 'User updated Successfully');
    }

    public function updatehotel(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);
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
            'description' => $request->description,
            'rules' => $request->rules,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('message', 'Hotel updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('message', 'User Deleted');
    }
}
