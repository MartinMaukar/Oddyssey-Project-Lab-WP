@extends('template.navbar')
    @section('title','Admin Dashboard')
@section('content')

@if(session()->get('success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
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
                    <li class="list-group-item"><strong>IDR {{ number_format($item->price,3) }}</strong></li>
                </ul>    
            @endif
          @if($item->category_id == '1')
          <p class="card-text"><small class="text-muted">Action</small></p>
          @endif
          @if($item->category_id == '2')
          <p class="card-text"><small class="text-muted">Shooter</small></p>
          @endif
          @if($item->category_id == '3')
          <p class="card-text"><small class="text-muted">Sport & Racing</small></p>
          @endif
          @if($item->category_id == '4')
          <p class="card-text"><small class="text-muted">Adventure</small></p>
          @endif
          <button type="button" class="btn btn-secondary">Update</button>
          <a class="btn btn-danger" href="/removegame/{{ $item->id }}" role="button">Remove</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
<div class="d-flex justify-content-center align-items-center flex-column m-3">
    {{ $games->links() }}
</div>


@endsection