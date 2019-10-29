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

{{--registration msg            --}}
@if($msg = Session::get('msg'))
    <span class="alert alert-success">
        {{ $msg }}
    </span>
@endif
@php Session::put('msg',NULL); @endphp

            <div class="card-body bg-light">

                <form action="{{ route('form.data') }}" method="POST" enctype="multipart/form-data" class="custom_form">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="name">{{ __('Name:') }}</label>
                        <input type="text" name="name" class="form-control" id="name">

                    </div>


                    <div class="form-group">
                        <label for="email">{{ __('Email:') }}</label>
                        <input type="email" name="email" class="form-control" id="email">


                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('Phone No:') }}</label>
                        <input type="number" name="phone" class="form-control" id="email">

                    </div>


                    <div class="form-group">
                        <div class=" form-check-inline">
                            <label for="bdate">{{ __('Date Of Birth:') }}</label>
                            <input type="date" name="bdate" class="form-control " id="bdate">
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
                        <textarea class="form-control" name="address" rows="5" id="comment"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="image">{{ __('Image:') }}</label>
                        <input type="file" name="image" class="form-control-file border" id="image">
                    </div>




                    <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ __('Save Data') }}</button>
                    </div>

                </form>

            </div><!-- card body -->

        </div><!-- card -->


    </div><!-- container -->

@endsection