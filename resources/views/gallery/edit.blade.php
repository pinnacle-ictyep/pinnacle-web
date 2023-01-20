@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">hotel <a href="{{ route('hotel.index') }}"
                        class="float-right btn btn-success btn-sm">View all</a>
                </h6>
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
                        @method('put')
                       <table class="table table-bordered">
                                <input type="hidden" type="text" class="form-control" name="name" value="{{$hotel->name}}">
                                <td><input type="hidden" type="email" class="form-control" name="email" value="{{$hotel->email}}">
                                <input type="hidden" type="text" class="form-control" name="phone" value="{{$hotel->phone}}">
                                <input type="hidden" type="text" class="form-control" name="location"  value="{{$hotel->location}}">
                                <input type="hidden" type="text" class="form-control" name="phone"  value="{{$hotel->phone}}">
                                <input type="hidden" type="text" class="form-control" name="rules"  value="{{$hotel->rules}}">
                                <input type="hidden" type="text" class="form-control" name="amenities"  value="{{$hotel->amenities}}">
                                <input type="hidden" type="text" class="form-control" name="description">
                                {{-- <input type="text" type="hidden" class="form-control" name="price"  value="{{$hotel->price}}"> --}}
                                <input type="hidden" type="file" name="image">
                                    <input type="hidden" name="prev_photo" value="{{$hotel->image}}">
                                    <input type="hidden" name="address" class="form-control" value="{{$hotel->address}}">

                                    <tr>
                                        <th>Gallery</th>
                                        <td><input type="file" class="form-control" multiple name="images[]">
                                            <small>Please provide at least 4 beautiful images of different parts of your hotel</small>
                                            @error('images[]')
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
