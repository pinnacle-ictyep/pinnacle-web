@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if(!Route::middleware(['isAdmin']))
                <h6 class="m-0 font-weight-bold text-primary">user <a href="{{ route('user.index') }}"
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
                <div class="text-center text-lg text-dark bg-warning">{{$user->role}}</div>
                <div class="table-responsive">
                    {{-- <form action="{{ route('user.store') }}" method="POST"> --}}
                        {{-- @csrf --}}
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td>{{$user->name}}
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$user->email}}
                                </td>
                            </tr>
                            <tr>
                                <th>phone</th>
                                <td>{{$user->phone}}
                                </td>
                            </tr>
                            <tr>
                                <th>website</th>
                                <td>{{$user->website}}
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$user->address}}
                                </td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>
                                   <img src="{{asset('storage/'.$user->image)}}" class="img-fluid" width="100px"> 
                                </td>
                            </tr>
                        </table>
                    {{-- </form> --}}
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
