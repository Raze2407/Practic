<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/app.css">
    <title>BigWork</title>
</head>

<body>
    <header>
        <h1>My App</h1>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
            <li><a href="{{ route('advertisements.create') }}">Create Advertisement</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @endguest
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
    </footer>
</body>

</html>