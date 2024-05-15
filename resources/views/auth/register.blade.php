@extends('layouts/navbar')

@section('title', 'Register')

@section('content')
    <div class="container">
        <form style="width: 500px" class="ms-auto me-auto mt-3">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Enter your username">
            </div>
            
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <input id="startDate" class="form-control" name="date" type="date" />
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
            </div>
           
            <div class="mb-3">
                <input type="text" class="form-control" name="address" placeholder="Enter your address">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
            </div>
            
            <div class="mb-3">
                <input type="file" class="form-control" name="file" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
