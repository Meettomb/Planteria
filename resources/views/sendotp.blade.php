<!-- resources/views/auth/sendotp.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send OTP</title>
</head>
<body>
    <h1>Send OTP</h1>
    <form action="{{ url('/sendotp') }}" method="post">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
        <button type="submit">Send OTP</button>
    </form>
</body>
</html>
