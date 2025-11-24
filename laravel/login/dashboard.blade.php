@include('components.header')
@include('components.navbar')

<div class="container mt-5">

    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Dashboard</h2>

        <div class="row text-center">

            <div class="col-md-4 mb-3">
                <div class="p-3 border rounded bg-light">
                    <h5>Total Users</h5>
                    <p class="fw-bold">25</p>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="p-3 border rounded bg-light">
                    <h5>Your Email</h5>
                    <p class="fw-bold">example@gmail.com</p>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="p-3 border rounded bg-light">
                    <h5>Account Status</h5>
                    <span class="badge bg-success">Active</span>
                </div>
            </div>

        </div>

        <div class="mt-4 text-center">
            <a href="{{ url('/users') }}" class="btn btn-primary">View All Users</a>
            <a href="{{ url('/update-password') }}" class="btn btn-warning">Update Password</a>
        </div>
    </div>

</div>

@include('components.footer')