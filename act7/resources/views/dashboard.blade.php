@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-body text-center">
            <h1 class="mb-3">Dashboard</h1>

            <p class="lead">
                Welcome, {{ Auth::user()->name }}.
            </p>

            <p class="text-muted">
                This page is only available to authenticated users.
            </p>
        </div>
    </div>
</div>
@endsection