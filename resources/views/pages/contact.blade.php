@extends('layouts.default')

@section('content')

        <h1>Welcome to the Contact Page</h1>
        <p class="lead">Please use this form to contact me.</p>

        <form action="/contact" method="post">
                @csrf
                <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                        <label for="message">Email Message</label>
                        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Send Email</button>
        </form>

@endsection