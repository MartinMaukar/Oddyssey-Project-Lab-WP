@extends('template.navbar')
    @section('title','Cart')
@section('content')

{{-- {{ dd($cart) }} --}}
<div class=" d-flex justify-content-center align-items-center flex-column">
@foreach($cart as $item)
<div class="card mb-3" style="max-width: 1080px;display:flex; flex-direction:column">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset($item->game->thumbnail) }}" class="img-fluid " alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $item->game->title }}</h5>
          @if($item->game->category_id == '1')
            <p class="card-text"><small class="text-muted">Action</small></p>
          @endif
          @if($item->game->category_id == '2')
            <p class="card-text"><small class="text-muted">Shooter</small></p>
          @endif
          @if($item->game->category_id == '3')
            <p class="card-text"><small class="text-muted">Sport & Racing</small></p>
          @endif
          @if($item->game->category_id == '4')
            <p class="card-text"><small class="text-muted">Adventure</small></p>
          @endif
          @if ($item->game->price == 0)
            <ul class="list-group list-group-flush" style="text-align: right">
                <li class="list-group-item"><strong>FREE</strong></li>
            </ul> 
            @else 
            <ul class="list-group list-group-flush" style="text-align: right">
                <li class="list-group-item"><strong>IDR {{ number_format($item->game->price,3) }}</strong></li>
            </ul>    
          @endif
          <a class="btn btn-danger" href="/removecart/{{ $item->id }}" role="button">Remove</a>
        </div>
      </div>
    </div>
  </div>
@endforeach    
</div>


<ul class="list-group list-group-flush" style="text-align: right">
    <li class="list-group-item"><strong>IDR {{ number_format($total_price,3) }}</strong></li>
</ul> 

@endsection