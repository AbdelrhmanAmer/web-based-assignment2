@extends('layouts/footer')

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>@yield('title')</title>
</head>

<body>
    <div class="container my-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link active" aria-current="page" href="#">Log
                            out</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <div class="container my-5">
        @yield('content')
    </div>


</body>

</html>
