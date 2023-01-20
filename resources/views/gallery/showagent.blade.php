@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        @if (session()->has('stat'))
            <div class="alert alert-danger">
                {{ session()->get('stat') }}
            </div>
        @endif
        <div class="row p-5 justify-content-center">
            @foreach ($galleries as $gallery)
            @if($gallery->hotel_id == auth()->user()->id)
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div>
                        <a href="{{route('deleteGL', $gallery->id)}}" title="delete" class="btn btn-outline-danger">x</a>
                        <img src="{{ asset('storage/' . $gallery->img_scr) }}" alt="" class="img-fluid" width="">
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
