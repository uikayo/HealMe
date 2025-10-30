<!-- <?php
use Illuminate\Support\Facades\Auth;

if (Auth::check()) {
    $username = Auth::user()->name; // ambil kolom "name" dari tabel users
    echo "Hello, $username<br>How are you currently Feeling?";
} else {
    echo "Hello, Guest<br>Please login first.";
}
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Up</title>
    <link rel="stylesheet" href="{{ asset('css/mood.css') }}">
</head>
<body>

<div class="container1">
    <u>CHECKING UP ON YOU ❤</u> 
    <div class="profile"> <img src="{{ asset('assets/profile.png') }}" alt="profile"> </div>
</div>

<div class="container2">
    <div class="content">
        <h2>
            @if (Auth::check())
                Hello, {{ Auth::user()->name }}!
            @else
                Hello, Guest. Please login first!
            @endif
        </h2>

        <p class="subtitle">HOW ARE YOU CURRENTLY FEELING?<br>
        <small>Please choose one that describes your current mood the most</small></p>

        <form action="{{ route('mood') }}" method="POST">
            @csrf
            <div class="emoji-container">
                <label>
                    <input type="radio" name="mood" value="happy">
                    <img src="{{ asset('assets/happy.png') }}" alt="Happy"><br>HAPPY
                </label>
                <label>
                    <input type="radio" name="mood" value="sad">
                    <img src="{{ asset('assets/sad.png') }}" alt="Sad"><br>SAD
                </label>
                <label>
                    <input type="radio" name="mood" value="anxious">
                    <img src="{{ asset('assets/anxious.png') }}" alt="Anxious"><br>ANXIOUS
                </label>
                <label>
                    <input type="radio" name="mood" value="excited">
                    <img src="{{ asset('assets/excited.png') }}" alt="Excited"><br>EXCITED
                </label>
                <label>
                    <input type="radio" name="mood" value="tired">
                    <img src="{{ asset('assets/tired.png') }}" alt="Tired"><br>TIRED
                </label>
                <label>
                    <input type="radio" name="mood" value="notsure">
                    <img src="{{ asset('assets/notsure.png') }}" alt="Not Sure"><br>NOT SURE
                </label>
            </div>

            <p class="share-text">WOULD YOU LIKE TO SHARE YOUR STORY NOW?</p>
            <div class="buttons">
                <button type="submit" name="choice" value="yes">YES</button>
                <button type="submit" name="choice" value="later">MAYBE LATER</button>
            </div>
        </form>
    </div>

    <div class="footer">
        <img src="{{ asset('assets/logoUnder.png') }}" alt="HealMe LogoUnder" class="logoUnder">
    </div>
</div>

</body>
</html>
