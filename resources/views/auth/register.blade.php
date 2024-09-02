@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

<div class="page-container">
    <div class="form-container">
        <!-- Use POST method for form submission -->
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf

            <h2>Register</h2>

            <!-- First Name -->
            <div>
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus>
                @error('first_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Last Name -->
            <div>
                <label for="last_name">Last Name</label>
                <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
                @error('last_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Date of Birth -->
            <div>
                <label for="dob">Date of Birth</label>
                <input id="dob" type="date" name="dob" value="{{ old('dob') }}" required>
                @error('dob')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Contact Number -->
            <div>
                <label for="contact">Contact Number</label>
                <input id="contact" type="text" name="contact" value="{{ old('contact') }}" required>
                @error('contact')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit">register</button>
            </div>
            
        </form>    
    </div>    
</div>

@endsection
