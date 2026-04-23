@extends('layouts.auth')

@section('title', 'Sign Up')

@section('content')
  <h1>Welcome to {{ config('app.name', 'Voltrex') }}!</h1>

  <!-- Tab switcher -->
  <div class="auth-tabs">
    <a href="{{ route('register') }}" class="active">Sign Up</a>
    <a href="{{ route('login') }}">Log In</a>
  </div>

  <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="field-wrap">
      <input type="text" name="first_name" placeholder="First name" value="{{ old('first_name') }}" required>
      <label>Name</label>
    </div>

    <div class="field-wrap">
      <input type="text" name="last_name" placeholder="Last name" value="{{ old('last_name') }}" required>
      <label>Surname</label>
    </div>

    <div class="field-wrap">
      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
      <label>Email</label>
    </div>

    <div class="field-wrap">
      <input type="password" name="password" placeholder="Password" required>
      <label>Password</label>
    </div>

    <div class="field-wrap">
      <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
      <label>Confirm Password</label>
    </div>

    <div class="check-row">
      <input type="checkbox" id="terms" name="terms" required>
      <label for="terms">I agree to <a href="#">Terms and Risk statements</a></label>
    </div>

    <button type="submit" class="btn-auth">Sign Up</button>
  </form>

  <p class="auth-footer">
    Already have an account? <a href="{{ route('login') }}">Log in</a>
  </p>
@endsection
