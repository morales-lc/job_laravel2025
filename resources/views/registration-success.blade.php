<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Registration Successful</h2>
        <p class="text-center">Here is the information you submitted:</p>
        <ul class="list-group">
            <li class="list-group-item"><strong>First Name:</strong> {{ $data['first_name'] ?? '' }}</li>
            <li class="list-group-item"><strong>Last Name:</strong> {{ $data['last_name'] ?? '' }}</li>
            <li class="list-group-item"><strong>Sex:</strong> {{ $data['sex'] ?? '' }}</li>
            <li class="list-group-item"><strong>Birthday:</strong> {{ $data['birthday'] ?? '' }}</li>
            <li class="list-group-item"><strong>Username:</strong> {{ $data['username'] ?? '' }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $data['email'] ?? '' }}</li>
        </ul>
        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary">Go to Login</a>
        </div>
    </div>
</body>
</html>
