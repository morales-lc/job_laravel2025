<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Uploaded Files</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile.edit') }}">Edit Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('password.edit') }}">Edit Password</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.list') }}">Users (Admin)</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>