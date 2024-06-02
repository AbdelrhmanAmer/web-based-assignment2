@extends('layouts.app_nav')

@section('title', __('messages.home'))

@section('links')
    <li><a class="dropdown-item text-light" href="{{ url('/en') }}">{{ __('messages.english') }}</a></li>
    <li><a class="dropdown-item text-light" href="{{ url('/ar') }}">{{ __('messages.arabic') }}</a></li>
@endsection


@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.card_title') }}</h5>
                            <p class="card-text">{{ __('messages.card_body') }}</p>
                            <a href="#" class="btn btn-primary">{{ __('messages.card_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.card_title') }}</h5>
                            <p class="card-text">{{ __('messages.card_body') }}</p>
                            <a href="#" class="btn btn-primary">{{ __('messages.card_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.card_title') }}</h5>
                            <p class="card-text">{{ __('messages.card_body') }}</p>
                            <a href="#" class="btn btn-primary">{{ __('messages.card_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.card_title') }}</h5>
                            <p class="card-text">{{ __('messages.card_body') }}</p>
                            <a href="#" class="btn btn-primary">{{ __('messages.card_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.card_title') }}</h5>
                            <p class="card-text">{{ __('messages.card_body') }}</p>
                            <a href="#" class="btn btn-primary">{{ __('messages.card_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.card_title') }}</h5>
                            <p class="card-text">{{ __('messages.card_body') }}</p>
                            <a href="#" class="btn btn-primary">{{ __('messages.card_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.card_title') }}</h5>
                            <p class="card-text">{{ __('messages.card_body') }}</p>
                            <a href="#" class="btn btn-primary">{{ __('messages.card_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.card_title') }}</h5>
                            <p class="card-text">{{ __('messages.card_body') }}</p>
                            <a href="#" class="btn btn-primary">{{ __('messages.card_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
