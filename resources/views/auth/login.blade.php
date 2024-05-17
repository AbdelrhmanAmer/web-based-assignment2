@extends('layouts/auth_nav')

@section('title', __('messages.login'))
<style>
    body {
        padding: 50px;
        background-image: url(https://t4.ftcdn.net/jpg/05/42/73/17/360_F_542731787_npIDENXs9NMkl1mtyHKj8De2WBL2vnFW.jpg);
        background-size: cover;
    }

    label.form-label {
        font-size: 14px;
        padding-right: 8px;
    }
</style>
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
            <input type="email" class="form-control" name="email" placeholder="{{ __('messages.enter_email') }}">
        </div>
        <div class="container my-4 mb-3">
            <input type="password" class="form-control" name="password" placeholder="{{ __('messages.enter_password') }}">
        </div>
        <div class="container my-4 mb-3">
            <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
        </div>
    </form>
</div>
@endsection