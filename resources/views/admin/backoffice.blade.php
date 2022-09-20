@extends('admin.layouts.app')
@section('title')
    <title>{{ __('Dashboard') }}</title>
@endsection
@section('main')
    <div class="main_content">
        <div class="mcontainer">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">{{ __('Dashboard') }}</h3>
                        <p>{{ __('You are logged in!') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
