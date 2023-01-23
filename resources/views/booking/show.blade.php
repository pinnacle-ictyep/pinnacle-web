@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- @if(!Route::middleware(['isAdmin']))
                <h6 class="m-0 font-weight-bold text-primary">booking <a href="{{ route('booking.index') }}"
                        class="float-right btn btn-success btn-sm">View all</a>
                </h6>
                @endif --}}
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    {{-- <form action="{{ route('booking.store') }}" method="POST"> --}}
                        {{-- @csrf --}}
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td>{{$booking->name}}
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$booking->email}}
                                </td>
                            </tr>
                            <tr>
                                <th>phone</th>
                                <td>{{$booking->phone}}
                                </td>
                            </tr>
                            <tr>
                                <th>Hotel name</th>
                                <td>{{$booking->hotel_name}}
                                </td>
                            </tr>
                            <tr>
                                <th>Hotel location</th>
                                <td>{{$booking->hotel_location}}
                                </td>
                            </tr>
                            <tr>
                                <th>roomtype</th>
                                <td>{{$booking->roomtype}}
                                </td>
                            </tr>
                            <tr>
                                <th>check_in</th>
                                <td>{{$booking->check_in}}
                                </td>
                            </tr>
                            <tr>
                                <th>check_out</th>
                                <td>{{$booking->check_out}}
                                </td>
                            </tr>
                            <tr>
                                <th>total</th>
                                <td>{{$booking->total}}
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
