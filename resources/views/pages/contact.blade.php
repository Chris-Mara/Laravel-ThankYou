@extends('layouts.default')

@section('content')

    <div class="card mt-3 pt-2 pl-4 pr-4">
        <div class="card-title">
            <h1>Welcome to the Contact Page</h1>
            <p class="lead">Please use this form to contact me.</p>
        </div>
        <div class="card-body">
            <form role="form"  id="contact-form" action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="John Smith">
                </div>
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
        </div>
    </div>
@endsection