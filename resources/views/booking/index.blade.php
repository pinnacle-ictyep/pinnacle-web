
@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">booking
                <a href="" class="float-right btn btn-success btn-sm">Add New</a>
            </h6>
        </div> -->
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                            <td>{{$booking->id}}</td>
                            <td>{{$booking->name}}</td>
                            <td>{{$booking->email}}</td>
                            <td>
                                <a href="{{route('book.show', $booking->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                {{-- <a href="{{route('booking.edit', $booking->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> --}}
                                <a href="{{route('book.destroy', $booking->id)}}" class="btn btn-danger btn-sm" onclick="confirm ('are you sure you want to delete this')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

 @endsection