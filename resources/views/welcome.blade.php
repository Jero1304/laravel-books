<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
    <style>
        li {
            list-style: none;
            padding: 10px;
        }
    </style>

</head>

<body>

    <main>
        <div class="container py-3">
            <h1>
                BOOK
            </h1>
        </div>

        {{-- <div class="container">
            <div class="row">
                index
            </div>
        </div> --}}

        @yield('content')
    </main>

</body>

</html>
