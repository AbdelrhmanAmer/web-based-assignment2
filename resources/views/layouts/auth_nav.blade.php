<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>@yield('title')</title>
    <style>
        .underline-link {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <ul class="nav nav-pills nav-fill me-2">
                        <li class="nav-item">
                            <a class="nav-link underline-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
                        </li>
                    </ul>
                    <a class="btn btn-dark px-3" href="https://github.com/AbdelrhmanAmer/web-based-assignment2"
                        role="button"><i class="bi bi-github"></i></a>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
