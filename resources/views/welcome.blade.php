<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            font-size: 1rem;
            line-height: 1.5;
            color: #374151;
            background-color: #f3f4f6;
        }

        .container {
            max-width: 36rem;
            margin-left: auto;
            margin-right: auto;
            padding: 1.5rem;

        }

        .card {
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            padding: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: #6366f1;
            color: #fff;
            font-weight: 600;
            align-content: center;
            text-align: center;
            border-radius: 0.375rem;
            padding: 0.75rem 1.5rem;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #4f46e5;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            @if (Route::has('login'))
                <div class="text-center mb-8">
                    @auth
                        <a href="{{ url('/home') }}" class="btn">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn mr-4">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>
</html>
