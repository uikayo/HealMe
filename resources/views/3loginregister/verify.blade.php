<h2>Verifikasi OTP</h2>
@if(session('success')) <p style="color:green;">{{ session('success') }}</p> @endif
@if(session('error')) <p style="color:red;">{{ session('error') }}</p> @endif

<form action="{{ route('verify.submit') }}" method="POST">
    @csrf
    <input type="hidden" name="email" value="{{ $email }}">
    <input type="text" name="otp" placeholder="Masukkan OTP" required><br><br>
    <button type="submit">Verifikasi</button>
</form>