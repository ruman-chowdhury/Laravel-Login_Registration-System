@extends('index')

@section('content')


    <!-- register form -->
    <div class="container content_container">

        <div class="card">

            <div class="card-header">
                <h3>Add <strong>User</strong></h3>
            </div>
            {{--error msg--}}
            @include('helper.errorMessage')

            <div class="card-body bg-light">

                <form action="{{ route('update.data',$row->id) }}" method="POST" enctype="multipart/form-data" class="custom_form">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="name">{{ __('Name:') }}</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $row->name }}">

                    </div>


                    <div class="form-group">
                        <label for="email">{{ __('Email:') }}</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $row->email }}">


                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('Phone No:') }}</label>
                        <input type="number" name="phone" class="form-control" id="email" value="{{ $row->phone }}">

                    </div>


                    <div class="form-group">
                        <div class=" form-check-inline">
                            <label for="bdate">{{ __('Date Of Birth:') }}</label>
                            <input type="date" name="bdate" class="form-control " id="bdate" value="{{ $row->date }}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="gender">{{ __('Gender:') }}</label>

                        <div class="form-check-inline">
                            <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male">Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="radio2">
                                <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female">Female
                            </label>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="comment">{{ __('Address:') }}</label>
                        <textarea class="form-control" name="address" rows="5" id="comment"> {{ $row->address }}  </textarea>
                    </div>


                    <div class="form-group">
                        <label for="image">{{ __('Image:') }}</label>
                        <input type="file" name="image" class="form-control-file border" id="image">
                    </div>




                    <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ __('Update') }}</button>
                    </div>

                </form>

            </div><!-- card body -->

        </div><!-- card -->


    </div><!-- container -->

@endsection