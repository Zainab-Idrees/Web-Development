<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">My Laravel App</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/users') }}">User List</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/update-password') }}">Update Password</a>
                </li>

            </ul>
        </div>

    </div>
</nav>
