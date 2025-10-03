<h2>Login</h2>
@if(session('success')) 
    <p style="color:green;">{{ session('success') }}</p> 
@endif

@if($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

<br>

{{-- TAMBAHKAN BAGIAN INI --}}
<div>
    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
</div>