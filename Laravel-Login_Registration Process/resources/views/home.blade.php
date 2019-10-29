@extends('index')

@section('content')

    <!-- body contents -->
    <div class="container content_container">

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
                        <th>Username</th>
                        <th>Email</th>
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
                                <td > {{ $value->username }} </td>
                                <td > {{ $value->email }} </td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="">View</a>

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