@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if(!Route::middleware(['isAdmin']))
                <h6 class="m-0 font-weight-bold text-primary">user <a href="{{ route('user.index') }}"
                        class="float-right btn btn-success btn-sm">View all</a>
                </h6>
                @endif
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card-body">
                <div class="text-center text-lg text-dark bg-warning">{{$user->role}}</div>
                <div class="table-responsive">
                    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(!Route::middleware(['isAdmin']))
                        @method('put') @endif
                       <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <td><input type="text" class="form-control" name="name" value="{{$user->name}}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Email<span class="text-danger">*</span></th>
                                <td><input type="email" class="form-control" name="email" value="{{$user->email}}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>phone<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>website<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="website" value="{{$user->website}}">
                                    @error('website')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>


                            <tr>
                                <th>Photo</th>
                                <td><input type="file" name="image">
                                    <input type="hidden" name="prev_photo" value="{{$user->image}}">
                                    <img src="{{asset('storage/'.$user->image)}}" class="img-fluid" width="100px"> 
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    <textarea name="address" class="form-control">{{$user->address}}</textarea> @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Gender</th>
                                <td>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value=""></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select> 
                                    @error('gender')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>change user type</th>
                                <td><select name="role" class="form-control"><option value="{{$user->role}}">change User_type</option><option value="Customer">Customer</option><option value="Agent">Agent</option></select>
                                    @error('role')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>


                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
