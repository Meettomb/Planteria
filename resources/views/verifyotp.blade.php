<!-- resources/views/auth/verifyotp.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
</head>
<body>
    <h1>Verify OTP</h1>
    <form action="{{ url('/verifyotp') }}" method="post">
        @csrf
        <div>
            <label for="otp">OTP:</label>
            <input type="text" name="otp" id="otp" required>
        </div>
        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>
