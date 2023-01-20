@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
           
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (session()->has('messag'))
            <div class="alert alert-danger">
                {{ session()->get('messag') }}
            </div>
        @endif
            <div class="card-body">
                <div class="table-responsive">
                    @foreach ($roomtypes as $roomtype)
                    @if($roomtype->hotel_id == auth()->user()->id)
                    <form action="{{ route('updateRT', $roomtype->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                            <table class="table table-bordered">
                            <tr>
                                <th>title<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="title" value="{{$roomtype->title}}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>price<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="price" value="{{$roomtype->price}}">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Photo</th>
                                <td><input type="file" class="form-control" name="image" value="{{asset('storage/'.$roomtype->image)}}">
                                    <input type="hidden" name="prev_photo" value="{{$roomtype->image}}">
                                    <span><img src="{{asset('storage/'.$roomtype->image)}}" class="img-fluid" width="100px"></span> 
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('deleteRT', $roomtype->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
