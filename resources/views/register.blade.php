@extends('template.loginregis')
    @section('title', 'Register')
@section('content')

<main class="form-signin w-100 m-auto">
    <form>
      <div class="d-flex justify-content-center">
        <img class="mb-4" src="https://www.svgrepo.com/show/327373/logo-laravel.svg" alt="" width="72" height="57">
      </div>
      
      <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
    
      <div class="form-floating">
        <input type="text" class="form-control" id="Name" placeholder="Name">
        <label for="floatingName">Name</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="Email" placeholder="Email">
        <label for="floatingName">Email address</label>
      </div>
      <div class="form-floating">
        <input type="passworrd" class="form-control" id="Password" placeholder="Password">
        <label for="floatingName">Password</label>
      </div>
      <div class="form-floating">
        <input type="passworrd" class="form-control" id="CPassword" placeholder="ConfirmPassword">
        <label for="floatingName">Confirm Password</label>
      </div>
  
      <small><a class="d-block text-center mt-3 mb-3" href="/login">Already Registered?</a></small>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>

 </main>


@endsection