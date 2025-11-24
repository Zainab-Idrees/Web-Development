@include('components.header')
@include('components.navbar')

<div class="container mt-5">

    <h2 class="text-center text-dark mb-4">Registration Form</h2>

    <div class="card p-4 shadow mx-auto" style="max-width: 500px;">

        <form action="/register" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Enter first name">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter last name">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <textarea name="address" class="form-control" rows="2" placeholder="Enter your address"></textarea>
            </div>

            <button class="btn btn-dark w-100">Register</button>
        </form>

    </div>
</div>

@include('components.footer')
