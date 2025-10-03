<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HealMe</title>
    <link rel="stylesheet" href="{{ asset('css/temp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tarot.css') }}">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="hamburger" onclick="toggleMenu()">☰</div>
            <nav>
                <a href="{{ route('aboutus') }}">ABOUT US</a>
                <a href="{{ route('contactus') }}">CONTACT US</a>
                <a href="{{ route('login') }}">LOGIN</a>
            </nav>
        </div>
        <div id="sidebar" class="sidebar">
                <ul class="menu" id="menuList">
                    <li><a href="{{ route('Open Forum') }}">Open Forum</a></li>
                    <li><a href="{{ route('Security Analyst') }}">Our Security Analyst</a></li>
                    <li><a href="{{ route('Psychologist') }}">Our Psychologists</a></li>
                    <li><a href="{{ route('Tarot') }}">Tarot Reading</a></li>
                </ul>
            </div>
    </header>

    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>