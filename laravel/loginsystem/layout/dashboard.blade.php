@extends('layout.master')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

    <!-- Top Navbar -->
    <div class="d-flex justify-content-between align-items-center py-3">
        <h2 class="fw-bold text-primary">Dashboard</h2>
        <div class="d-flex align-items-center">
            <input type="text" class="form-control me-2 rounded-3" placeholder="To find">
            <button class="btn btn-outline-primary me-2">
                <i class="bi bi-bell-fill">Search</i>
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card shadow-sm p-4 text-center rounded-4 bg-light">
                <i class="bi bi-people-fill fs-2 text-primary mb-2"></i>
                <h5 class="fw-bold">Total Users</h5>
                <p class="text-muted fs-5">150 Users</p>
                <div class="progress" style="height:6px;">
                    <div class="progress-bar bg-primary" style="width:75%"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm p-4 text-center rounded-4 bg-light">
                <i class="bi bi-envelope-fill fs-2 text-success mb-2"></i>
                <h5 class="fw-bold">New Messages</h5>
                <p class="text-muted fs-5">23 Messages</p>
                <div class="progress" style="height:6px;">
                    <div class="progress-bar bg-success" style="width:60%"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm p-4 text-center rounded-4 bg-light">
                <i class="bi bi-check2-square fs-2 text-warning mb-2"></i>
                <h5 class="fw-bold">Tasks Completed</h5>
                <p class="text-muted fs-5">48/60</p>
                <div class="progress" style="height:6px;">
                    <div class="progress-bar bg-warning" style="width:80%"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm p-4 text-center rounded-4 bg-light">
                <i class="bi bi-server fs-2 text-danger mb-2"></i>
                <h5 class="fw-bold">Server Status</h5>
                <p class="text-muted fs-5">Online</p>
                <div class="progress" style="height:6px;">
                    <div class="progress-bar bg-danger" style="width:100%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities and Charts -->
    <div class="row g-4 mt-4">
        <!-- Recent Activities -->
        <div class="col-lg-4">
            <div class="card shadow-sm p-4 rounded-4 bg-light">
                <h5 class="fw-bold mb-3">Recent Activities</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        User registered
                        <span class="badge bg-primary rounded-pill">2 min ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Task completed
                        <span class="badge bg-success rounded-pill">1 hr ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Server restarted
                        <span class="badge bg-danger rounded-pill">3 hrs ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        New message received
                        <span class="badge bg-warning rounded-pill">5 hrs ago</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Chart Example -->
        <div class="col-lg-8">
            <div class="card shadow-sm p-4 rounded-4 bg-light">
                <h5 class="fw-bold mb-3">User Growth (Monthly)</h5>
                <canvas id="userChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- User Table -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm p-4 rounded-4 bg-light">
                <h5 class="fw-bold mb-3">User List</h5>
                <table class="table table-hover table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sahiba</td>
                            <td>sahiba@example.com</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <button class="btn btn-sm btn-primary">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ali</td>
                            <td>ali@example.com</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-sm btn-primary">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('userChart').getContext('2d');
    const userChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun'],
            datasets: [{
                label: 'Users',
                data: [10, 20, 30, 45, 60, 80],
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13,110,253,0.2)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });
</script>
@endsection
