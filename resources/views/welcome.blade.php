<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <style>
body {
    font-family: 'Figtree', sans-serif;
    color: rgb(145, 202, 24);
    background-image: url("/images/sea.jfif");
    background-size: cover;
    background-position: center; 
    margin: 0;
    padding: 0;
}

.font-sans {
    font-family: 'Figtree', sans-serif;
}

.antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.navbar {
    background-color: transparent; /* Make the navbar transparent */
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 15px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease; /* Add transition for background color */
}

.nav-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #ffffff; 
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #272b38;
}

.navbar:hover {
    background-color: #c2dfff; 
}

.menu-toggle {
    display: none;
    cursor: pointer;
}

@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        padding: 10px 20px;
    }

    .nav-links {
        display: none;
        flex-direction: column;
        text-align: center;
        width: 100%;
        background-color: #374151; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
    }

    .nav-links li {
        margin-right: 0;
        margin-bottom: 10px;
    }

    .menu-toggle {
        display: block;
    }

    .menu-toggle:checked + .nav-links {
        display: flex;
    }

    .menu-label {
        display: block;
        text-align: center;
        color: #ffffff; 
        font-size: 18px;
        cursor: pointer;
    }
}

    </style>
</head>
<body class="font-sans antialiased">
    <header class="navbar">
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="menu-label"></label>
        <ul class="nav-links">
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </header>
</body>
</html>
