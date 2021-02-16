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

                    {{ __('You are logged in through the MySQL database !') }}
                </br>
                    <div class="card">
                        <div class="card-header">
                            <h5>{{ __('Please select a database to connect to: ')}}</h5>
                        </div>
                        <div class="card-body">
                            <li ><a href="/book">MongoDB</a></li>
                            <li ><a href="/school/">Postgres</a></li>
                            <li><a href="/car/">Sqlite</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
