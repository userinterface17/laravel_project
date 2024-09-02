@extends('layouts.app')

@section('content')
<!-- Include the external CSS file -->
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

<div class="page-container">
    <div class="form-container">
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            <h2>Login</h2>

            <!-- Display errors if any -->
            @if ($errors->any())
                <div class="form-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Email Address -->
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <!-- Password -->
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>

            <!-- Remember Me -->
            <div>
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <!-- Login Button -->
            <div>
                <button type="submit">Login</button>
            </div>

            <!-- Forgot Password Link 
            <div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
            </div> -->
            
        </form>
    </div>
</div>
@endsection
