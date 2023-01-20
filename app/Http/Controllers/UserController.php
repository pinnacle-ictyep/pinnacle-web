<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
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

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('image', 'public');
        } else {
            $img_dir = 'upload photo';
        }

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
            'image' => $img_dir,
            'website' => $request->website,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('message', 'User updated Successfully');
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

    public function showlogin()
    {
        $auser = Auth::user();
        if (!$auser) {
            return view('auth.login');
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function showregister()
    {

        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // $user = Auth::user();

        if (Auth::attempt($request->only(['email', 'password']))) {

            return redirect()->route('dashboard')->withInput($request->input())->with('login', 'Logged in');
            
            $users = User::where('email', $request->email)->first();

            session(['userlogin' => true, 'user' => $users]);
        }

        // if($request()->has('rememberme')){
        // Cookie::queue('useremail', $request->email, 1440);
        // Cookie::queue('userpwd', $request->password,1440);
        // }
        return redirect()->back()->with('message', 'Invalid Email or Password');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }

    public function register(Request $request)
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

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('image', 'public');
        } else {
            $img_dir = 'please upload image';
        }

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

        if (Auth::attempt($request->only(['email', 'password'])))
            $user = User::where('email', $request->email)->first();
        session(['user' => $user]);

        return redirect()->route('dashboard')->withInput($request->input())->with('register', 'Registration Successful');
    }
}
