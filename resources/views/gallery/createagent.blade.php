@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Photos <a href="{{ route('showGL') }}"
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
                    <form action="{{ route('storeGL') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <input type="hidden" class="form-control" name="hotel_id" value="{{Auth::user()->id}}" >
                            <tr>
                                <th>Images</th>
                                <td><input type="file" class="form-control" multiple name="img_scr[]">
                                    @error('img_scr')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th>image_name</th>
                                <td><input type="text" class="form-control" multiple name="img_alt">
                                    @error('img_alt')
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
