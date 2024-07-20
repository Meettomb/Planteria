<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/otppage" method="POST">
        @csrf
        <input type="text" name="otp">
         <!-- Hidden fields to send additional data -->
         <input type="text" name="data" value="{{ json_encode($data) }}">
        <input type="hidden" name="otp_value" value="{{ $otp }}">

        <input type="submit" value="Submit">
    </form>
</body>
</html>