@extends('template.loginregis')
    @section('title', 'Login')
@section('content')

<main class="form-signin w-100 m-auto">
    <form>
      <div class="d-flex justify-content-center">
        <img class="mb-4" src="https://www.svgrepo.com/show/327373/logo-laravel.svg" alt="" width="72" height="57">
      </div>

      <h1 class="h3 mb-3 fw-normal text-center">Log In</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <small><a class="d-block text-center mt-3 mb-3"  href="/register">Don\'t have an account? Register now!</a></small>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
    </form>

 </main>

@endsection