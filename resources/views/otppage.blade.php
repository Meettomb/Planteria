<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('checkotp') }}" method="POST">
        @csrf
        <input type="text" name="otp" placeholder="Enter OTP">
        <input type="hidden" name="otp_value" value="{{ $otp }}">
        <input type="hidden" name="data" value="{{ $data }}">
        <input type="submit" value="Submit">
    </form>
</body>
</html>