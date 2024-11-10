<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>

    <title>@yield('title', 'Default')</title>
</head>
<body>
    <nav style="width: 100%;" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">EduFun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="/categories">Category</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Interactive Multimedia</a></li>
                            <li><a class="dropdown-item" href="#">Software Engineering</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/writers">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/popular">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="min-height: 100vh">
        @yield('content')
    </div>

    <footer class="bg-light text-center py-3 mt-4">
        <p>&copy; {{ date('Y') }} EduFun. All rights reserved.</p>
    </footer>

    <script src="{{ asset('bootstrap/bootstrap.bundle.js') }}"></script>
</body>
</html>
