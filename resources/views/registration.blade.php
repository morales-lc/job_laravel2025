<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Registration Form</h2>
        <form method="POST" action="{{ route('register.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter first name" required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter last name" required>
            </div>

            <div class="mb-3">
                <label for="sex" class="form-label">Sex</label>
                <select name="sex" id="sex" class="form-control" required>
                    <option value="">-- Select --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" name="birthday" class="form-control" id="birthday" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                <label class="form-check-label" for="agree">I agree with the Privacy Policy and Terms and Conditions</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <p class="text-center mt-3">
            <a href="{{ route('login') }}">Already have an account? Login</a>
        </p>
    </div>
</body>
</html>
