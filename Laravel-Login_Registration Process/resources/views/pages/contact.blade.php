@extends('index')

@section('content')

    <!-- contact form -->
    <div class="container content_container">

        <div class="card">

            <div class="card-header bg-light text-center">
                <h3> <strong> Contact Section<strong> </h3>
            </div>


            <div class="card-body">

                <form action="" method="POST" accept-charset="utf-8" class="custom_form">

                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="comment">Your Message:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>

                    <button type="submit" name="send" class="btn btn-success">Send</button>

                </form>

            </div><!-- card body -->

        </div><!-- card -->


    </div><!-- container -->


@endsection