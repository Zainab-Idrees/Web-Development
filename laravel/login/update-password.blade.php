@include('components.header')
@include('components.navbar')

<div class="container mt-5">

    <h2 class="text-center mb-4">Update Password</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card p-4 shadow mx-auto" style="max-width: 450px;">

        <form action="/update-password" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter new password" required>
            </div>

            <button class="btn btn-warning w-100">Update Password</button>
        </form>

    </div>

</div>

@include('components.footer')
