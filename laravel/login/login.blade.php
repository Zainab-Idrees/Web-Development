@include('components.header')
@include('components.navbar')

<div class="container mt-5">

    <h2 class="text-center mb-4">Login</h2>

    <div class="card p-4 shadow mx-auto" style="max-width: 450px;">

        <form action="/login" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>

            <button class="btn btn-dark w-100">Login</button>
        </form>

    </div>
</div>

@include('components.footer')
