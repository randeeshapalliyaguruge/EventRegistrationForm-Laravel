@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <br>
                    <p><a href="myevents">My Events</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

                        {{--User Details--}}

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">{{ __('User Details') }}</div>

                                        <div class="card-body">
                                            {{--User Details--}}
                                            @if (Auth::check())
                                            <p>Name: {{$user->name}}</p>
                                            <p>Email: {{$user->email}}</p>
                                            <p>Phone Number: {{$user->phone}}</p>
                                            <p>Date of Birth: {{$user->dob}}</p>

                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
