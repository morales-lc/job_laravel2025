<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="text-center">Login</h2>
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <p class="text-center mt-3">
            <a href="{{ route('register') }}">Don't have an account? Register</a>
        </p>
        @if($errors->any())
            <div class="text-danger mt-3 text-center">{{ $errors->first() }}</div>
        @endif
    </div>
</body>

</html>