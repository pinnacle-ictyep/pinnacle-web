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
                {{-- <div class="text-center text-lg text-dark bg-warning">{{$roomtype->role}}</div> --}}
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>title</th>
                                <td>{{$roomtype->title}}
                                </td>
                            </tr>
                            <tr>
                                <th>price</th>
                                <td>{{$roomtype->price}}
                                </td>
                            </tr>
                            
                            <tr>
                                <th>Photo</th>
                                <td>
                                   <img src="{{asset('storage/'.$roomtype->image)}}" class="img-fluid" width="100px"> 
                                </td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection


