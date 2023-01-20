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
                    {{-- <form action="{{ route('hotel.store') }}" method="POST"> --}}
                        {{-- @csrf --}}
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td>{{$hotel->name}}
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$hotel->email}}
                                </td>
                            </tr>
                            <tr>
                                <th>phone</th>
                                <td>{{$hotel->phone}}
                                </td>
                            </tr>
                            <tr>
                                <th>location</th>
                                <td>{{$hotel->location}}
                                </td>
                            </tr>
                            <tr>
                                <th>rules</th>
                                <td>{{$hotel->rules}}
                                </td>
                            </tr>
                            <tr>
                                <th>amenities</th>
                                <td>{{$hotel->amenities}}
                                </td>
                            </tr>
                            <tr>
                                <th>description</th>
                                <td>{{$hotel->description}}
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$hotel->address}}
                                </td>
                            </tr>
                            <tr>
                                <th>image</th>
                                <td>
                                   <img src="{{asset('storage/'.$hotel->image)}}" class="img-fluid" width="100px"> 
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
