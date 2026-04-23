@extends('layouts.auth')

@section('title', 'Log In')
@section('content')

<h1>Welcome to {{ config('app.name', 'Voltrex') }}!</h1>

{{-- Tabs --}}
<div class="auth-tabs">
  <a href="{{ route('register') }}">Sign Up</a>
  <a href="{{ route('login') }}" class="active">Log In</a>
</div>

{{-- GLOBAL ERROR --}}
@if ($errors->any())
  <div class="auth-alert shake">
    {{ $errors->first() }}
  </div>
@endif

@php
  $loginError = $errors->has('email');
@endphp

<form method="POST" action="{{ route('login') }}" id="loginForm">
  @csrf

  {{-- Email --}}
  <div class="field-wrap {{ $loginError ? 'is-error shake' : '' }}">
    <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
    <label>Email (Login)</label>
  </div>

  {{-- Password --}}
  <div class="field-wrap {{ $loginError ? 'is-error shake' : '' }}">
    <input type="password" name="password" id="passwordInput" placeholder="password" required>
    <label>Password</label>

    {{-- Toggle eye --}}
    <div class="toggle-pass" onclick="togglePassword()">
      👁️
    </div>
  </div>

  {{-- Remember --}}
  <div class="meta-row">
    <label>
      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
      Keep me signed in
    </label>
    <a href="#">Forgot password?</a>
  </div>

  {{-- BUTTON --}}
  <button type="submit" class="btn-auth" id="loginBtn">
    <span class="btn-text">Log In</span>
    <span class="btn-loader"></span>
  </button>

</form>

<div class="auth-divider">or</div>

<button class="btn-google" type="button">Continue with Google</button>

<p class="auth-footer">
  Don't have an account? <a href="{{ route('register') }}">Sign up now</a>
</p>

@endsection