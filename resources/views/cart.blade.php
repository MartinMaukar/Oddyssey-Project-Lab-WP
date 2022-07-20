@extends('template.navbar')
    @section('title','Cart')
@section('content')

{{-- {{ dd($cart) }} --}}
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('failedmessage'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ session('failedmessage') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class=" d-flex justify-content-center align-items-center flex-column " >
@foreach($cart as $item)
<div class="card mb-3" style="max-width: 1080px;display:flex; flex-direction:column; width: 100em">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset($item->game->thumbnail) }}" class="img-fluid " alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $item->game->title }}</h5>
          <p class="card-text"><small class="text-muted">{{ $item->game->category->category_name }}</small></p>
          @if ($item->game->price == 0)
            <ul class="list-group list-group-flush" style="text-align: right">
                <li class="list-group-item"><strong>FREE</strong></li>
            </ul> 
            @else 
            <ul class="list-group list-group-flush" style="text-align: right">
                <li class="list-group-item"><strong>IDR {{ number_format($item->game->price) }}</strong></li>
            </ul>    
          @endif
          <a class="btn btn-danger" href="/removecart/{{ $item->id }}" role="button">Remove</a>
        </div>
      </div>
    </div>
  </div>
@endforeach    
</div>

@if($total_price == 0 && $cart->isempty())
<div class="d-flex justify-content-center align-items-center m-3">
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-x" viewBox="0 0 16 16">
      <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"/>
      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
    </svg>  
      <strong>  Sorry! </strong> Your cart is empty !
      <a href="/dashboard"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
    </div>
</div>
@else
<ul class="list-group list-group-flush" style="text-align: right">
    <li class="list-group-item"><strong>Total = </strong> {{ $countitem }} game(s)</li>
    <li class="list-group-item"><strong>SUBTOTAL = IDR {{ number_format($total_price) }}</strong></li>
</ul>
<form action="/checkout" method="POST">
  @csrf
  @method('PUT')
  <button type="submit" value="submit" class="btn btn-dark d-flex justify-content-center mb-4" style="text-decoration: none">Check Out</button>
</form>
@endif

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