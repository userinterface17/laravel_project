@extends('layouts.app')

@section('head')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="dashboard">
                        <div class="box">
                            <h3>Total Calls</h3>
                            <div class="box-content">
                                <h1>0</h1>
                            </div>
                        </div>
                        <div class="box">
                            <h3>Additional</h3>
                            <div class="box-content">
                                <h1>0</h1>
                            </div>
                        </div>
                        <div class="box">
                            <h3>Total Breaks</h3>
                            <div class="box-content">
                                <h1>0</h1>
                            </div>
                        </div>
                        
                        <div class="box">
                            <h3>Skills</h3>
                            <div class="box-content">
                                <hr>
                                <h1>0</h1>
                            </div>
                        </div>
                        <div class="box">
                            <h3>Queue Count</h3>
                            <div class="box-content">
                                <!-- Content for Queue Count -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
