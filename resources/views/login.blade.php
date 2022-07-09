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

    <form>
      <div class="form-floating">
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        <label for="password">Password</label>
      </div>
  
      <div class="checkbox mb-3 mt-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <small><a class="d-block text-center mt-3 mb-3"  href="/register">Don\'t have an account? Register now!</a></small>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
    </form>

 </main>

@endsection