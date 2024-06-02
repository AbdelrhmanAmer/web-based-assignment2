<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <div class="container my-5 " >
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container mx-4">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('messages.dashboard') }}</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <ul class="nav nav-pills nav-fill me-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('messages.language') }}
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                                @yield('links')
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link underline-link" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('register') }}">{{ __('messages.register') }}</a>
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
