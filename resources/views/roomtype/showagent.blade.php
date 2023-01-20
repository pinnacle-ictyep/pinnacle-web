@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @foreach ($roomtypes as $roomtype)
            @if($roomtype->hotel_id == auth()->user()->id)
              <div class="card-body">
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
                    </form>
                </div>
            </div> 
            @endif 
            @endforeach
            
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection