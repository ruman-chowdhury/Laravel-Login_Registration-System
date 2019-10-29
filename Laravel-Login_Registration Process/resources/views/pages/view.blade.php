@extends('index')

@section('content')

    <!-- body contents -->
    <div class="container content_container">


        <div class="card">
            <div class="card-header ">
                <h3 class="text-center">
                    User <strong>Details</strong>
                    <span class="float-right"><a class="btn btn-outline-dark" href="{{route('home.content')}}">Back</a></span>
                </h3>
            </div>

            <div class="card-body custom_view">

                <table class="table table-borderless">
                    <tr>
                        <td>
                            @if($row->image != null)

                                <img class="rounded" src="{{asset('user/images/'.$row->image)}}" alt="image" width="304" height="236">

                            @else
                                <p class="text-danger" >Not Found! </p>
                            @endif
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <strong>Name:</strong> {{ $row->name }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Gender:</strong> {{ $row->gender }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Birth Date:</strong> {{ $row->date }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Address:</strong> {{ $row->address }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Phone No:</strong> {{ $row->phone }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Email:</strong> {{ $row->email }}
                        </td>
                    </tr>

                </table>

            </div>

        </div> <!-- card -->

    </div> <!-- body contents -->


@endsection