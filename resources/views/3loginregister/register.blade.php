<h2>Register</h2>

{{-- BAGIAN PALING PENTING YANG HILANG --}}
@if ($errors->any())
    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px;">
        <strong>Oops! Terjadi kesalahan:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama" required value="{{ old('name') }}"><br><br>
    <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}"><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Daftar</button>
</form>

<br>
<div>
    <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
</div>