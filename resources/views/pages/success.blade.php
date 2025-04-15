@extends('layouts.success')
@section('title', 'Checkout Success')

@section('content')
    <!-- NAVBAR : START -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('FRONTEND/images/logo.png') }}" alt="">
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">
                        | &nbsp; Beyond the explorer of the world
                    </span>
                </li>
            </ul>
        </nav>
    </div>
    <!-- NAVBAR : END -->

    <!-- SUCCESS : START -->
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ asset('FRONTEND/images/ic_mail.png') }}">
            <h1>Yay! Success</h1>
            <p>
                We've sent you're email for trip
                <br>
                instruction please read it as well
            </p>
            <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
    <!-- SUCCESS : END -->
@endsection
