@extends('layouts.default')

@section('content')

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Thank you, {{$name}}!</h1>
                <p>Your email has been sent! I usually respond within a business day or two.</p>
            </div>
        </div>

@endsection