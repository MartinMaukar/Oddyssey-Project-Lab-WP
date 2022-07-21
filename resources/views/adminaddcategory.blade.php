@extends('template.loginregis')
    @section('title', 'Add Category')
@section('content')

@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ session('error') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif



<main class="form-signin w-100 m-auto">

    <div class="card" style="width: 20rem;">
        <div class="card-body">
<div class="d-flex justify-content-center align-items-center m-3">
    <h3>Add Category</h3>
</div>    

<form action="/adminaddcategory" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group" style="margin-top: -2em">
        <input type="text" class="form-control @error('category_name') is-invalid @enderror" placeholder="Category Name" name="category_name" id="category_name" required>
        @error('category_name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="d-flex justify-content-center align-items-center m-3">
        <button type="submit" value="submit" class="btn btn-dark d-flex justify-content-center mt-3" style="text-decoration: none">Add Category</button>
    </div>
    
</form>
</div>
</div>
</main>

@endsection