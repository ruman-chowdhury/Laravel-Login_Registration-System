@extends('index')

@section('content')

		<!-- body contents -->
		<div class="container content_container">

			<div class="card">
				<div class="card-header bg-light">
					<span class="float-left">
						<h3> User <strong>List</strong> </h3>
					</span>


				</div>

				<div class="card-body custom_card_body">
					<table class="table table-borderless">
						<tr>
							<th>Serial</th>
							<th class="text-center">Image</th>
							<th>Name</th>
							<th>Email</th>
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
							<td > {{ $value->gender }} </td>
							<td>
								<a class="btn btn-info btn-sm" href="{{route('view.data',$value->id)}}">View</a>


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