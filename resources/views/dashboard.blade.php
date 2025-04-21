<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    
    @include('navigation')

    <div class="container text-center mt-5">
        <h2>Welcome to Your Dashboard</h2>
        <p>Manage your files, edit your profile, and view users.</p>
    </div>
</body>
</html>
