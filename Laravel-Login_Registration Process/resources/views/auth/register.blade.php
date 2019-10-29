@extends('index')

@section('content')


    <!-- register form -->
    <div class="container content_container">

        <div class="card">

            <div class="card-header">
                <h3>User <strong>Registration</strong></h3>
            </div>
            {{--error msg will also show--}}
            {{--@include('helper.errorMessage')--}}

            {{--registration msg            --}}
            @if($msg = Session::get('msg'))
                <span class="alert alert-success">
                    {{ $msg }}
                </span>
            @endif
            @php Session::put('msg',NULL); @endphp

            <div class="card-body bg-light">

                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="custom_form">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="username">{{ __('Username') }}</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}">

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">{{ __('Register') }}</button>

                </form>

            </div><!-- card body -->

        </div><!-- card -->


    </div><!-- container -->

@endsection