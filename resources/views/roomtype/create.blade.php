@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add RoomType <a href="{{ route('roomtype.index') }}"
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
                    <form action="{{ route('roomtype.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>title<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="title">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>price<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="price">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Photo</th>
                                <td><input type="file" class="form-control" name="image">
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Hotels</th>
                                <td>
                                    <select name="hotel_id" class="form-control">>
                                        <option value="">select hotel</option>
                                        @foreach ($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">
                                                {{ $hotel->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
{{-- 
                            <tr>
                                <th>hotel_id</th>
                                <td><input type="text" class="form-control" multiple name="hotel_id">
                                    @error('hotel_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr> --}}

                           
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
