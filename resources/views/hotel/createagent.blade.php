@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add hotel <a href="{{ route('hotel.index') }}"
                        class="float-right btn btn-success btn-sm">View all</a>
                </h6>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (session()->has('status'))
            <div class="alert alert-danger">
                {{ session()->get('status') }}
                <div><a href="{{ route('showregister') }}">To register new account click here </a></div>
            </div>
        @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('hotel.storee') }}" method="POST" enctype="multipart/form-data"> 

                        @csrf
                        <table class="table table-bordered">
                            {{-- <input type="text" class="form-control" name="user_id" disabled
                                value="{{ Auth::user()->id }}"> --}}
                            <tr>
                                <th>Hotel Name<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Hotel Email<span class="text-danger">*</span></th>
                                <td><input type="email" class="form-control" name="email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>location<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="location">
                                    @error('location')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>phone<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="phone">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Hotel Rules<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="rules">
                                    @error('rules')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>amenities<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="amenities">
                                    @error('amenities')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>description<span class="text-danger">*</span></th>
                                <td><input type="text" class="form-control" name="description">
                                    @error('description')
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
                                <th>Address</th>
                                <td>
                                    <textarea name="address" class="form-control"></textarea> @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>Gallery</th>
                                <td><input type="file" class="form-control" multiple name="images[]">
                                    <small>Please provide at least 4 beautiful images of different parts of your
                                        hotel</small>
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
