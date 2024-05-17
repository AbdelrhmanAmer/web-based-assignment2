@extends('layouts/auth_nav')

@section('title', __('messages.login'))

@section('content')
    <div class="container">
        <div class="mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
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
                <input type="email" class="form-control" name="email" placeholder="{{ __('messages.enter_email') }}">
            </div>
            <div class="container my-4 mb-3">
                <input type="password" class="form-control" name="password"
                    placeholder="{{ __('messages.enter_password') }}">
            </div>
            <div class="container my-4 mb-3">
                <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
            </div>
        </form>
    </div>
@endsection
