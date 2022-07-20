@extends('template.loginregis')
    @section('title', 'Update Category')
@section('content')

@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ session('error') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<main class="form-signin w-100 m-auto">

<h3>Update Category</h3>
<form action="/adminupdatecategory/{{$category->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group" style="margin-top: -2em">
        <input type="text" class="form-control" value="{{ $category->category_name }}" name="category_name" id="category_name" required>
    </div>
    <button type="submit" value="submit" class="btn btn-dark d-flex justify-content-center mt-3" style="text-decoration: none">Update Category</button>
</form>

</main>
@endsection