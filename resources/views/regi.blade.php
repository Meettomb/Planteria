<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
  <link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
    <title>Registration</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('css\regi.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="regi" method="post" class="form">
        @csrf

        <div class="column">
            <div class="input-box">
                <label>First Name</label>
                <input type="text" name="first_name" placeholder="Enter full name" autocomplete="off" value="{{ old('first_name') }}" />
            </div>
            <div class="input-box">
                <label>Last Name</label>
                <input type="text" name="last_name" placeholder="Enter full name" autocomplete="off" value="{{ old('last_name') }}" />
            </div>
        </div>

        <div class="input-box">
            <label class="addresh_lable">Address</label>
            <input type="text" name="address" id="addresh_lable" autocomplete="off" value="{{ old('address') }}" />
        </div>

        <div class="column">
            <div class="input-box">
                <label>Pincode</label>
                <input type="text" maxlength="6" minlength="6" name="pincode" value="{{ old('pincode') }}" />
            </div>
            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email address" autocomplete="off" value="{{ old('email') }}" />
            </div>
        </div>

        <div class="column">
            <div class="input-box">
                <label>Phone Number</label>
                <input type="text" name="phone" maxlength="10" minlength="10" placeholder="Enter phone number" autocomplete="off" value="{{ old('phone') }}" />
            </div>
            <div class="input-box">
                <label>Birth Date</label>
                <input type="date" name="dob" placeholder="Enter birth date" autocomplete="off" value="{{ old('dob') }}" />
            </div>
        </div>

        <div class="gender-box">
            <h3>Gender</h3>
            <div class="gender-option">
                <div class="gender">
                    <input type="radio" id="check-male" value="Male" name="gender" {{ old('gender') == 'Male' ? 'checked' : '' }} />
                    <label for="check-male">Male</label>
                </div>
                <div class="gender">
                    <input type="radio" id="check-female" value="Female" name="gender" {{ old('gender') == 'Female' ? 'checked' : '' }} />
                    <label for="check-female">Female</label>
                </div>
                <div class="gender">
                    <input type="radio" value="prefer not to say" id="check-other" name="gender" {{ old('gender') == 'prefer not to say' ? 'checked' : '' }} />
                    <label for="check-other">Prefer not to say</label>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="input-box">
                <label>Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" autocomplete="off" />
            </div>
            <div class="input-box">
                <label>Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" autocomplete="off" />
            </div>
        </div>

        <div class="remember-forgot" style="color: white; margin-top:2%;">
            <label><input onclick="password_show();" type="checkbox"> Show Password</label>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <input class="button" type="submit" name="submit" value="Submit">
    </form>
    </section>

    <script>
      function password_show() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
	</script>
  </body>
</html>