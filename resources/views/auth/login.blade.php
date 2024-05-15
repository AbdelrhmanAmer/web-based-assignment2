@extends('layouts/navbar')

@section('title', 'Login')

@section('content')
    <div class="container">
        <form style="width: 500px" class="ms-auto me-auto mt-3">
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection