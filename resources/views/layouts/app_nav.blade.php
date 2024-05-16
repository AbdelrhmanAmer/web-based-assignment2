@extends('layouts.footer')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">{{ config('app.name') }}</a>

                <ul class="nav nav-pills ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('messages.language') }}
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-light" href="{{ route('locale.switch', 'en') }}">{{ __('messages.english') }}</a></li>
                            <li><a class="dropdown-item text-light" href="{{ route('locale.switch', 'ar') }}">{{ __('messages.arabic') }}</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link active" aria-current="page">{{ __('messages.log_out') }}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container my-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
