<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/temp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
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

    <div class="container">
        <p>Hi, Casters!</p>
        <p>
            HealMe is an open forum website designed as a safe space where you can share stories, 
            vent, or express your feelings about cyber security related problems (or honestly, any type of problems you’re currently facing) 
            <u>without fear of judgment.</u> 
        </p>
        <p>
            Every experience is valued and supported, whether it’s through encouragement from psychologists who provide empathetic responses, 
            guidance from security analysts who safeguard digital well-being and address cyber-related issues, 
            or oversight from admins who ensure the community stays healthy and positive.
        </p>
        <p>
            Blending emotional support with <u>digital protection</u>, HealMe creates a modern storytelling sanctuary wrapped in a mystical witch-inspired theme, 
            <u>where the warmth of community meets the comfort of safety</u>, all within a single platform.
        </p>
        <p>
            We hope this space can help you feel heard, supported, and protected, reminding you that you’re never alone in your journey &lt;3.
        </p>
        <p>Sincerely, <br> The Mindhealers.</p>

        <div class="hero">
            <img src="{{ asset('logo.png') }}" alt="HealMe Logo" class="logo">
        </div>
    </div>

    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>
