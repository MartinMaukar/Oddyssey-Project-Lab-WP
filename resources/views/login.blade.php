@extends('template.loginregis')
    @section('title', 'Login')
@section('content')

<main class="form-signin w-100 m-auto">
  @if(session()->has('donelogin'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('donelogin') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="d-flex justify-content-center">
    <img class="mb-4" src="https://www.svgrepo.com/show/327373/logo-laravel.svg" alt="" width="72" height="57">
  </div>
  <h1 class="h3 mb-3 fw-normal text-center">Log In</h1>

    <form action="/login" method="POST">
      @csrf
      <div class="form-floating">
        <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}" autofocus>
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" name="password" required autofocus>
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
  
      <div class="checkbox mb-3 mt-3 d-block text-center">
        <label>
          <input type="checkbox" name="remember_me" id="remember_me">
          <label for="remember_me">Remember me</label> 
        </label>
      </div>
      <small><a class="d-block text-center mt-3 mb-3"  href="/register">Don\'t have an account? Register now!</a></small>
      <button class="w-100 btn btn-lg btn-primary" type="submit" value="Login">Log in</button>
    </form>

 </main>

@endsection