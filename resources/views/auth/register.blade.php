@extends('layouts/auth_nav')

@section('title', 'Register')

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
        <form action="{{ route('register.post') }}" method="POST" style="width: 500px" class="ms-auto me-auto mt-3">
            @csrf

            <div class="mb-4">
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="username" placeholder="Enter your username">
            </div>

            <div class="mb-4">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>

            <div class="mb-4">
                <div class="d-flex align-items-center"> 
                    <input type="date" class="form-control me-2" name="date"> <!-- 'me-2' adds margin to the right of the input -->
                    <a class="btn btn-secondary" href="#" role="button" style="white-space: nowrap;">Check Actors</a>
                </div>
            </div>
            
            <div class="mb-4">
                <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
            </div>

            <div class="mb-4">
                <input type="text" class="form-control" name="address" placeholder="Enter your address">
            </div>

            <div class="mb-4">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="mb-4">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
            </div>

            <div class="mb-4">
                <input type="file" class="form-control" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
