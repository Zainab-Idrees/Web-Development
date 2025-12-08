@extends('layout.master')

@section('title', 'Update Password')

@section('content')

<div class="d-flex justify-content-center align-items-center mt-4 bg-light">
    <div class="card shadow-lg p-4 rounded-4" style="width: 100%; max-width: 450px;">
        
        <h2 class="text-center mb-4 fw-bold text-warning">Update Password</h2>

        <form>
            <div class="mb-3">
                <label class="form-label fw-semibold">Email:</label>
                <input
                    type="email"
                    class="form-control form-control-lg rounded-3"
                    name="email"
                    placeholder="Enter your email"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">New Password:</label>
                <input
                    type="password"
                    class="form-control form-control-lg rounded-3"
                    name="new_password"
                    placeholder="Enter new password"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Confirm Password:</label>
                <input
                    type="password"
                    class="form-control form-control-lg rounded-3"
                    name="confirm_password"
                    placeholder="Confirm password"
                    required>
            </div>

            <button class="btn btn-warning w-100 btn-lg fw-bold mt-2">Update Password</button>
        </form>

        <div class="text-center mt-3">
            <small class="text-muted">Remembered your password? 
                <a href="{{ url('/login') }}" class="text-decoration-none">Login</a>
            </small>
        </div>

    </div>
</div>

@endsection