<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="Enter your password" name="password">
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
          <label for="check"> <a href="{{ route('register') }}">Signup</a></label>
        </span>
      </div>
    </div>
  </div>
</body>

</html>