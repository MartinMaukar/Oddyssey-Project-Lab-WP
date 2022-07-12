@extends('template.navbar')
    @section('title','Dashboard')
@section('content')

<nav class="navbar bg-light">
    <div class="container-fluid">
      <form class="d-flex" action="/searchresult" method="get">
        <input class="form-control me-2" type="text" placeholder="Search Game.." aria-label="Search" style="width: 50rem" name="keyword">   
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
</nav>

<h3>Hot Games</h3>
<div class="d-flex justify-content-center align-items-center">
@foreach ($games->take(5) as $item)
<div class="card" style="width: 18rem;display:flex; flex-direction:column ">
    <a href="/detail/{{ $item->id }}/{{ $item->category_id }}"><img src="{{ $item->thumbnail }}" class="card-img-top" alt="..." style="max-width: 7cm; max-height:7cm;"></a>
    <div class="card-body">
      <h5 class="card-title">{{ $item->title }}</h5>
      <p class="card-text">{{ $item->description }}</p>
      @if ($item->price == 0)
      <ul class="list-group list-group-flush" style="text-align: right">
        <li class="list-group-item">FREE</li>
      </ul> 
      @else 
      <ul class="list-group list-group-flush" style="text-align: right">
        <li class="list-group-item">IDR {{ number_format($item->price,3) }}</li>
      </ul>    
      @endif
      
    </div>
  </div>
@endforeach    
</div>


<h3>Featured Games</h3>
@foreach ($games->take(8) as $item)
<div class="card mb-3" style="max-width: 1080px;display:flex; flex-direction:column">
    <div class="row g-0">
      <div class="col-md-4">
        <a href="/detail/{{ $item->id }}/{{ $item->category_id }}"><img src="{{ $item->thumbnail }}" class="img-fluid rounded-start" alt="..."></a>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p class="card-text">{{ $item->description }}</p>
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
        </div>
      </div>
    </div>
  </div>
  @endforeach

@endsection