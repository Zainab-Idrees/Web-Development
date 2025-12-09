<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #f4f6f9;
        }
        .content-wrapper {
            flex: 1;
            padding: 30px;
        }
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #111;
            color: #fff;
            text-align: center;
            padding: 12px 0;
            font-size: 14px;
            letter-spacing: .5px;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.3);
        }
        .navbar-brand img{
            height: 34px;
            margin-right: 8px;
        }
        .main-card{
            background: #fff;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    {{-- Header / Navbar --}}
    @include('components.navbar')

    {{-- Page Body --}}
    <div class="content-wrapper">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer>
        © 2025 Your Website | All Rights Reserved
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>