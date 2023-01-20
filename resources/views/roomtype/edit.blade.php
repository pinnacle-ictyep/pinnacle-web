@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">roomtype <a href="{{ route('roomtype.index') }}"
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
                    <form action="{{route('roomtype.update', $roomtype->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
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
                            <td><input type="file" name="image">
                                <input type="hidden" name="prev_photo" value="{{$roomtype->image}}">
                                <img src="{{asset('storage/'.$roomtype->image)}}" class="img-fluid" width="100px">
                                @error('image')
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
