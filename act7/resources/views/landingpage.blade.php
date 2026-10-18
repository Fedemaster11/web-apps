@extends('layouts.app')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-4 mb-3">Welcome to the Landing Page</h1>

    <p class="lead mb-4">
        This page is available to guest users.
    </p>

    <a href="{{ route('login') }}" class="btn btn-primary me-2">
        Login
    </a>

    <a href="{{ route('register') }}" class="btn btn-outline-primary">
        Register
    </a>
</div>
@endsection