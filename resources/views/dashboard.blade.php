<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body { font-family: sans-serif; padding: 2em; }
        .logout-button {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Selamat datang, {{ auth()->user()->name }}!</h1>
    <p>Anda telah berhasil login ke aplikasi HealMe.</p>
    <br>

    {{-- INI ADALAH FORM UNTUK LOGOUT --}}
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-button">Logout</button>
    </form>

</body>
</html>