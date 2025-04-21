<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    @include('navigation')

    <div class="container-fluid py-4">
        <h2 class="text-center mb-4">User List</h2>

        <form method="GET" action="{{ route('user.list') }}" class="mb-4">
            <h4>Search Users</h4>
            <div class="row g-2">
                <div class="col-md-4">
                    <input type="text" name="name" placeholder="Search by name" value="{{ request('name') }}" class="form-control">
                </div>
                <div class="col-md-4">
                    <input type="text" name="email" placeholder="Search by email" value="{{ request('email') }}" class="form-control">
                </div>
                <div class="col-md-4 d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Filter</button>
                    @if(request('name') || request('email'))
                        <a href="{{ route('user.list') }}" class="btn btn-secondary">Clear Filters</a>
                    @endif
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->user_type }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-3">
            {{ $users->links() }}
        </div>

        <a href="{{ route('dashboard') }}" class="btn btn-secondary w-100 mt-3">Back to Dashboard</a>
    </div>
</body>

</html>
