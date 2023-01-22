
@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">gallery
                <a href="{{route('gallery.create')}}" class="float-right btn btn-success btn-sm">Add New</a>
            </h6> --}}
        </div>
        @if (session()->has('message'))
        <div class="alert alert-danger">
            {{ session()->get('message') }}
        </div>
    @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            {{-- <th>Full Name</th> --}}
                            <th>gallery</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            {{-- <th>Full Name</th> --}}
                            <th>gallery</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($gallerys as $gallery)
                            <tr>
                            <td>{{$gallery->id}}</td>
                            <td>{{$gallery->hotel_id}}</td>
                            <td>
                                <img src="{{asset('storage/'.$gallery->img_scr)}}" class="img-fluid" width="100px"> 
                             </td>
                            <td>
                                {{-- <a href="{{route('gallery.show', $gallery->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{route('gallery.edit', $gallery->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> --}}
                                <a href="{{route('gallery.destroy', $gallery->id)}}" class="btn btn-danger btn-sm" onclick="confirm ('are you sure you want to delete this')"><i class="fa fa-trash"></i></a>
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