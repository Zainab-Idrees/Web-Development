@extends('layout.master')

@section('title', 'Register')

@section('content')

<div class="d-flex justify-content-center align-items-center  bg-light">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 500px; border-radius: 15px;">
        <h2 class="text-center mb-4 fw-bold text-success">Registration</h2>

        <form action="{{ route('doregister') }}" method="POST">
          @csrf
            <!-- Name Fields -->
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold" for="firstName">First Name:</label>
                    <input type="text" class="form-control form-control-lg rounded-3" placeholder="Enter first name" name="firstName">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold" for="lastName">Last Name:</label>
                    <input type="text" class="form-control form-control-lg rounded-3" placeholder="Enter last name" name="lastName">
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label fw-semibold" for="email">Email:</label>
                <input type="email" class="form-control form-control-lg rounded-3" placeholder="Enter your email" name="email">
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label fw-semibold" for="password">Password:</label>
                <input type="password" class="form-control form-control-lg rounded-3" placeholder="Enter your password" name="password">
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
