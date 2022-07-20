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

<h3>Add Category</h3>
<form action="/adminaddcategory" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group" style="margin-top: -2em">
        <input type="text" class="form-control" placeholder="Category Name" name="category_name" id="category_name" required>
    </div>
    <button type="submit" value="submit" class="btn btn-dark d-flex justify-content-center mt-3" style="text-decoration: none">Add Category</button>
</form>

</main>
@endsection