@extends('layout.master')

@section('title', 'Register')

@section('content')

<div class="d-flex justify-content-center align-items-center mt-4 bg-light">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 600px; border-radius: 15px;">
        <h2 class="text-center mb-4 fw-bold text-success">Registration</h2>

        <form action="/register" method="POST">
          @csrf
            <!-- Name Fields -->
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">First Name:</label>
                    <input type="text" class="form-control form-control-lg rounded-3" placeholder="Enter first name">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Last Name:</label>
                    <input type="text" class="form-control form-control-lg rounded-3" placeholder="Enter last name">
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Email:</label>
                <input type="email" class="form-control form-control-lg rounded-3" placeholder="Enter your email">
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Password:</label>
                <input type="password" class="form-control form-control-lg rounded-3" placeholder="Enter your password">
            </div>
            <button class="btn btn-success w-100 btn-lg fw-bold">Register</button>
        </form>

        <div class="text-center mt-3">
            <small class="text-muted">
                Already have an account? 
                <a href="{{ url('/login') }}" class="text-decoration-none">Login</a>
            </small>
        </div>

    </div>
</div>

@endsection
