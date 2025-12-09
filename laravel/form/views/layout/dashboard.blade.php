@extends('layout.master')

@section('content')

<style>
    .dashboard-wrapper {
        display: flex;
        gap: 20px;
    }

    /* Sidebar */
    .sidebar {
        width: 250px;
        background: #111827;
        border-radius: 14px;
        padding: 25px 20px;
        color: #fff;
        height: 100%;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    .sidebar h3 {
        font-weight: bold;
        font-size: 22px;
        margin-bottom: 25px;
    }

    .sidebar a {
        display: block;
        padding: 10px;
        color: #d1d5db;
        text-decoration: none;
        border-radius: 8px;
        margin-bottom: 8px;
        transition: 0.3s;
    }

    .sidebar a:hover {
        background: #2563eb;
        color: #fff;
    }

    /* Content Area */
    .content-box {
        flex: 1;
        padding: 25px;
        border-radius: 14px;
        background: #fff;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    /* Topbar */
    .topbar {
        background: linear-gradient(to right, #3b82f6, #06b6d4);
        padding: 18px 25px;
        border-radius: 14px;
        color: #fff;
        margin-bottom: 25px;
    }

    /* Cards */
    .stat-card {
        padding: 25px;
        border-radius: 14px;
        background: #f8fafc;
        box-shadow: 0 3px 12px rgba(0,0,0,0.07);
        transition: 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 18px rgba(0,0,0,0.12);
    }

    .stat-number {
        font-size: 32px;
        font-weight: bold;
    }

    .stat-label {
        color: #64748b;
        font-size: 15px;
    }

    .grid-3 {
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
        gap: 20px;
    }
</style>

<div class="dashboard-wrapper">

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Dashboard</h3>

        <a href="/dashboard">🏠 Home</a>
        <a href="/users">👥 Users</a>
        <a href="/register">📝 Register</a>
        <a href="/login">🔐 Login</a>
        <a href="/update-password">🔑 Update Password</a>
    </div>

    <!-- Content -->
    <div class="content-box">

        <!-- TOP BAR -->
        <div class="topbar">
            <h4 class="m-0 fw-bold">Welcome to Your Dashboard</h4>
            <p class="m-0">Manage your system activities from one place</p>
        </div>

        <!-- STATS CARDS -->
        <div class="grid-3 mb-4">

            <div class="stat-card">
                <div class="stat-number">120</div>
                <div class="stat-label">Total Users</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">58</div>
                <div class="stat-label">New Registrations</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">12</div>
                <div class="stat-label">Pending Tasks</div>
            </div>

        </div>

        <!-- MAIN CONTENT -->
        <div class="card p-4 shadow-sm">
            <h5 class="fw-bold mb-3">Activity Overview</h5>

            <p class="text-muted">
                This is your main dashboard section. You can add charts, tables, analytics, 
                or anything you want here for a complete admin panel.
            </p>
        </div>

    </div>

</div>

@endsection
