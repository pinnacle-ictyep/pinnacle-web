@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if(!Route::middleware(['isAdmin']))
                <h6 class="m-0 font-weight-bold text-primary">hotel <a href="{{ route('hotel.index') }}"
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
                <div class="table-responsive">
                    <form action="{{ route('hotel.update', $hotel->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(!Route::middleware(['isAdmin']))
                        @method('put') 
                        @endif
                       <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <td><input type="text" class="form-control" name="name" value="{{$hotel->name}}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Email<span class="text-danger">*</span></th>
                                <td><input type="email" class="form-control" name="email" value="{{$hotel->email}}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>phone<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="phone" value="{{$hotel->phone}}">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>location<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="location"  value="{{$hotel->location}}">
                                    @error('location')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>phone<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="phone"  value="{{$hotel->phone}}">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>rules<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="rules"  value="{{$hotel->rules}}">
                                    @error('rules')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>amenities<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="amenities"  value="{{$hotel->amenities}}">
                                    @error('amenities')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>description<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="description" value="{{$hotel->description}}">
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>price<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="price"  value="{{$hotel->price}}">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Photo</th>
                                <td><input type="file" name="image">
                                    <input type="hidden" name="prev_photo" value="{{$hotel->image}}">
                                    <img src="{{asset('storage/'.$hotel->image)}}" class="img-fluid" width="100px"> 
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    <textarea name="address" class="form-control">{{$hotel->address}}</textarea> @error('address')
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
