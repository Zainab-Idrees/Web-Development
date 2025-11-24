@include('components.header')
@include('components.navbar')

<div class="container mt-5">

    <h2 class="text-center mb-4">Users List</h2>

    @if($users->isEmpty())
        <p class="text-center">No users found.</p>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>

@include('components.footer')
