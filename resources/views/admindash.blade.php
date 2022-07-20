@extends('template.navbar')
    @section('title','Admin Manage Game')
@section('content')

@if(session()->get('success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
  <div>
    {{ session()->get('success') }}
  </div>
</div>
@endif

<a href="/adminaddgame" style="text-decoration: none">
    <button type="button" class="btn btn-dark d-flex justify-content-center align-items-center m-3">Add Game</button>
</a>

@foreach($games as $item)
<div class="card mb-3" style="max-width: 1080px;display:flex; flex-direction:column">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset($item->thumbnail) }}" class="img-fluid " alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p class="card-text">{{ $item->description }}</p>
            @if ($item->price == 0)
                <ul class="list-group list-group-flush" style="text-align: left">
                    <li class="list-group-item"><strong>FREE</strong></li>
                </ul> 
            @else 
                <ul class="list-group list-group-flush" style="text-align: left">
                    <li class="list-group-item"><strong>IDR {{ number_format($item->price) }}</strong></li>
                </ul>    
            @endif
            <p class="card-text"><small class="text-muted">{{ $item->category->category_name }}</small></p>
            <a class="btn btn-secondary" href="/updategame/{{ $item->id }}" role="button">Update</a>
            <a class="btn btn-danger" href="/removegame/{{ $item->id }}" role="button">Remove</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
<div class="d-flex justify-content-center align-items-center flex-column m-3">
    {{ $games->links() }}
</div>

<style>
  .card-img-top {
  width: 100%;
  height: 15vw;
  object-fit: cover;
}

.img-fluid{
  width: 20em;
  height: 20em;
  object-fit: cover;
}
</style>

@endsection