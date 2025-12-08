<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg"
     style="padding-top:14px; padding-bottom:14px; border-bottom:1px solid rgba(255,255,255,0.08);">

    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="/"
           style="letter-spacing:1px; font-size:1.4rem;">

            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg"
                 alt="logo"
                 width="45"
                 style="margin-right:10px; filter:drop-shadow(0 0 5px rgba(255,255,255,0.3));">

            <span class="fw-bold" style="color:#fff;">
                MyWebsite
            </span>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto fw-semibold" style="gap:4px;">

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="/register"
                       style="transition:0.3s;">
                       Register
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="/login"
                       style="transition:0.3s;">
                       Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="/welcome"
                       style="transition:0.3s;">
                       Welcome
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link px-3"
                       href="/dashboard"
                       style="transition:0.3s;">
                       Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="/users"
                       style="transition:0.3s;">
                       Users
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="/update-password"
                       style="transition:0.3s;">
                       Update Password
                    </a>
                </li> --}}

            </ul>

        </div>

    </div>
</nav>
