@extends('layout.master')

@section('title', 'Login')

@section('content')

<div class="d-flex justify-content-center align-items-center bg-light">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px; border-radius: 15px;">
        <h2 class="text-center mb-4 fw-bold text-success">Login</h2>

        <form action="/login" method="POST">

            <div class="mb-3">
                <label class="form-label fw-semibold">Email:</label>
                <input type="email" class="form-control form-control-lg rounded-3" name="email" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Password:</label>
                <input type="password" class="form-control form-control-lg rounded-3" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-success w-100 btn-lg fw-bold">Login</button>
        </form>

        <div class="text-center mt-3">
            <small class="text-muted">Don't have an account? <a href="{{ url('/register') }}" class="text-decoration-none text-primary">Register</a></small>
        </div>
    </div>
</div>

@endsection
