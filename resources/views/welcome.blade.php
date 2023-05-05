<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Books</title>

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
    <header class="header-bg">
        <nav class="navbar container navbar-expand-lg bg-body-tertiary">

            <div class="nav-title container">
                <div class="d-flex align-items-center justify-content-between">
                    <a class="navbar-brand fs-3" href="{{ route('books.index') }}">Books
                        <img class="rounded-pill"
                            src="https://i.pinimg.com/originals/5f/fb/de/5ffbdeceb84323decd76084b2efca958.png">
                    </a>

                </div>

            </div>

            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item ms-5">
                            <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Generi
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Avventura</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Horror</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Fantasy</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Animazione</a>
                                </li>                   <li>
                                    <a class="dropdown-item" href="#">Musical</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="py-4 d-flex flex-column align-items-center">
        <h1>Books List</h1>
        <img class="rounded-pill" width=100
            src="https://i.pinimg.com/originals/5f/fb/de/5ffbdeceb84323decd76084b2efca958.png">
    </div>

    <main>
        @yield('content')
    </main>

</body>

</html>
