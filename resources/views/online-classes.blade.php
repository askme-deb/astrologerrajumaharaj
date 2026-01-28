@extends('layouts.app')

@section('title', 'Online Classes - Coming Soon')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-8 text-center">

            <h1 class="display-4 fw-bold mb-3">
                🚀 Coming Soon
            </h1>

            <p class="lead text-muted mb-4">
                Our <strong>Online Classes</strong> are currently under development.  
                We’re working hard to bring you something amazing!
            </p>

            <div class="d-flex justify-content-center mb-4">
                <span class="badge bg-primary fs-6 px-3 py-2 me-2">Live Sessions</span>
                <span class="badge bg-success fs-6 px-3 py-2 me-2">Expert Mentors</span>
                <span class="badge bg-warning text-dark fs-6 px-3 py-2">Flexible Timing</span>
            </div>

            <div class="mt-4">
                <a href="{{ url('/') }}" class="btn btn-outline-primary btn-lg">
                    ← Back to Home
                </a>
            </div>

        </div>
    </div>
</div>
@endsection