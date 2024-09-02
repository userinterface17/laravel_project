<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Laravel')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation Bar -->
        <nav class="navbar" x-data="{ open: false }">
            <div class="nav-container">
                <!-- Brand Title -->
                <a href="{{ url('/') }}" class="brand">
                    Laravel
                </a>

                <!-- Navigation Links -->
                <div class="collapse">
                    <ul class="nav">
                        @guest
                            <li class="item">
                                <a href="{{ route('login') }}" class="link">
                                    {{ __('Login') }}
                                </a>
                            </li>
                            <li class="item">
                                <a href="{{ route('register') }}" class="link">
                                    {{ __('Register') }}
                                </a>
                            </li>
                        @endguest
                        <!-- Add more nav items here as needed -->
                    </ul>
                </div>

                
            </div>

            
        </nav>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
