@extends('template.navbar')
    @section('title','Dashboard')
@section('content')

<nav class="navbar bg-light">
    <div class="container-fluid">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 50rem">   
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>

<h3>Featured Games</h3>
<div class="card" style="width:5rem;height:5rem; display:flex; flex-direction:column">
    @foreach ($games as $item)
    <img src="{{ $item->thumbnail }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $item->title }}</h5>
      <p class="card-text">{{ $item->description }}</p>
      <a href="#" class="btn btn-primary">detail</a>
    </div>
    @endforeach
  </div>
@endsection