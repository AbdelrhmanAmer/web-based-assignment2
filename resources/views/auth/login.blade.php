@extends('layouts/auth_nav')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="mt-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <form action="{{ route('login.post') }}" method="POST" style="width: 500px" class="ms-auto me-auto mt-3">
            @csrf

            <div class="container my-4 mb-3">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="container my-4   mb-3">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="container my-4   mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
@endsection
