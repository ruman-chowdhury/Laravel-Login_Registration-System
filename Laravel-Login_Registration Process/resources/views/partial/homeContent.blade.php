@extends('index')

@section('content')

    <!-- body contents -->
    <div class="container content_container">
        {{--update msg --}}
        @if($msg = Session::get('msg'))
            <span class="alert alert-warning">
                    {{ $msg }}
                </span>
        @endif
        @php Session::put('msg',NULL); @endphp

        <div class="card">
            <div class="card-header bg-light">
                <span class="float-left">
                    <h3> User <strong>List</strong> </h3>
                </span>

                <span class="float-right">

                    <h5>
                        Welcome! <strong> {{ 'ruman' }} </strong>
                        <i class="far fa-smile text-info"></i>
                    </h5>

				</span>

            </div>

            <div class="card-body custom_card_body">
                <table class="table table-borderless">
                    <tr>
                        <th>Serial</th>
                        <th class="text-center">Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>

                    @if( $allData->count() > 0)
                        @php $i=0; @endphp
                        @foreach($allData as $value)
                            @php $i++; @endphp

                            <tr>
                                <td> {{ $i }} </td>

                                <td width="12%">
                                    @if($value->image != null)

                                        <img class="rounded" src="{{asset('user/images/'.$value->image)}}" alt="image" width="80%" height="80">

                                    @else
                                        <p class="text-danger" >Not Found! </p>
                                    @endif
                                </td>

                                <td > {{ $value->name }} </td>
                                <td > {{ $value->email }} </td>
                                <td > {{ $value->phone }} </td>
                                <td > {{ $value->gender }} </td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('view.data',$value->id)}}">View</a>

                                    <a class="btn btn-outline-secondary btn-sm" href="{{route('edit.data',$value->id)}}">Edit</a>

                                    <a class="btn btn-danger btn-sm" href="{{route('delete.data',$value->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>

                                </td>
                            </tr>


                        @endforeach

                    @else



                </table>
                <p class="text-secondary text-center error_msg">Data not Found!</p>

                @endif
            </div>

        </div> <!-- card -->

    </div> <!-- body contents -->

@endsection