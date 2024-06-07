@extends('layouts/auth_nav')

@section('title', __('messages.register'))

@section('links')
    <li><a class="dropdown-item" href="{{ url('/en/register') }}">{{ __('messages.english') }}</a></li>
    <li><a class="dropdown-item" href="{{ url('/ar/register') }}">{{ __('messages.arabic') }}</a></li>
@endsection

@section('content')
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

        .form-container {
            max-width: 800px;
            margin: auto;
        }

        .form-control {
            width: 100%;
        }
    </style>
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
        <div class="form-container">
            <form action="{{ route('register.post') }}" method="POST" class="mt-3">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('messages.name') }}:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        placeholder="{{ __('messages.enter_name') }}">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">{{ __('messages.username') }}:</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}"
                        placeholder="{{ __('messages.enter_username') }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('messages.email') }}:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        placeholder="{{ __('messages.enter_email') }}">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">{{ __('messages.date_of_birth') }}:</label>
                    <div class="d-flex align-items-center">
                        <input type="date" class="form-control me-2" id="date" name="date"
                            value="{{ old('date') }}">
                        <button type="button" class="btn btn-secondary" id="checkActorsBtn"
                            style="white-space: nowrap;">{{ __('messages.check_actors') }}</button>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">{{ __('messages.phone_number') }}:</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"
                        placeholder="{{ __('messages.enter_phone_number') }}">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">{{ __('messages.address') }}:</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}"
                        placeholder="{{ __('messages.enter_address') }}">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('messages.password') }}:</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="{{ __('messages.enter_password') }}">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('messages.confirm_password') }}:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="{{ __('messages.confirm_password') }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">{{ __('messages.profile_image') }}:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('checkActorsBtn').addEventListener('click', function() {
            var date = document.getElementById('date').value;
            if (date) {
                var formattedDate = new Date(date).toLocaleDateString('en-GB', {
                    day: '2-digit',
                    month: '2-digit'
                }).split('/').join('-');
                var url = "{{ route('actors_ids', ['date' => ':date']) }}";
                url = url.replace(':date', formattedDate);
                window.location.href = url;
            } else {
                alert('Please select a date');
            }
        });
    </script>
@endsection
