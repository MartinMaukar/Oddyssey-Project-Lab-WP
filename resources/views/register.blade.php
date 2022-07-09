@extends('template.loginregis')
    @section('title', 'Register')
@section('content')

<main class="form-signin w-100 m-auto">
    
      <div class="d-flex justify-content-center">
        <img class="mb-4" src="https://www.svgrepo.com/show/327373/logo-laravel.svg" alt="" width="72" height="57">
      </div>
      <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
      
    <form action="/register" method="POST"  enctype="multipart/form-data">
      @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}" autofocus>
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}" autofocus>
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required autofocus>
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="confirmpassword" class="form-control @error('confirmpassword') is-invalid @enderror" id="confirmpassword" placeholder="ConfirmPassword" required autofocus>
        <label for="confirmpassword">Confirm Password</label>
        @error('confirmpassword')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
  
      <small><a class="d-block text-center mt-3 mb-3" href="/login">Already Registered?</a></small>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>

 </main>


@endsection