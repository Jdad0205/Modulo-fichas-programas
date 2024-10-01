<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="{{ asset('/css/signin.css') }}" rel="stylesheet">
  </head>
<body >
<div class="container">
    <main class="form-signin">
  <form action="{{ route('auth.authenticate') }}" method="POST">
      @csrf
    <h1 class="h3 mb-3 fw-normal">Sign in</h1>

    <div class="form-floating">
    <label for="email">Email address</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com">
      @error('email')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
    <label for="password">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
      @error('password')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <h3><a href="{{route('auth.register')}}">¿No tienes cuenta registrate?</a></h3>
  </form>
  </div>
    </body>
</html>