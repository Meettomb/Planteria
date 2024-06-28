<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <main>
        <form action="" method="post">
            @csrf
            <h1>Login</h1>
            <section>
                <div class="input_filds">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off">
                </div>

                <div class="input_filds">
                    <label for="password">Password</label>    
                    <input type="password" name="password" id="password" autocomplete="off">
                </div>
                <input class="button" type="submit" value="Login">

                <span><a href="regi">Create new account</a></span>
            </section>
        </form>
    </main>
</body>
</html>