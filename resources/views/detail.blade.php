@extends('template.navbar')
    @section('title','Detail')
@section('content')

<div class="detailheader" style="display: flex; flex-direction:row">
    <div class="card" style="width: 25rem;">
        <img src="{{ asset($games->thumbnail) }}" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $games->title }}</h5>
          <p class="card-text">{{ $games->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
            @if ($games->price == 0)
            <ul class="list-group list-group-flush" style="text-align: right">
              <li class="list-group-item">FREE</li>
            </ul> 
            @else 
            <ul class="list-group list-group-flush" style="text-align: right">
              <li class="list-group-item">IDR {{ number_format($games->price,3) }}</li>
            </ul>    
            @endif
        </ul>
        <div class="card-body">
            <a class="btn btn-dark" href="#" role="button">Add To Cart</a>
        </div>
    </div>
    
    <div class="detaildetail" style="display: flex; flex-direction:column;margin-left:5rem">
        <div class="carousel" style="width: 50rem">
    
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset($games->image1) }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset($games->image2) }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset($games->image3) }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        
        </div>
    
        <div class="row" style="display:flex;flex-direction:column;margin-top:2rem;">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Genre</h5>
                  <p class="card-text">
                    <p class="card-text"><small class="text-muted">{{ $games->category->category_name }}</small></p>
                  </p>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Release Date</h5>
                  <p class="card-text">{{ $games->release }}</p>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">All Reviews</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    
                  </div>
                </div>
              </div>
        </div>
    </div>

</div>

<div class="more d-flex justify-content-center align-items-center flex-column m-3" style="margin-top:2rem">
    <h3>More Like This</h3>
    <div class="d-flex justify-content-center align-items-center flex-row mt-3 mb-3">
     @foreach($categories->take(4) as $item)
        @if($item->id == $games->id)
        @else
        <div class="card" style="max-width: auto">
            <a href="/detail/{{ $item->id }}/{{ $item->category_id }}"><img src="{{ asset($item->thumbnail) }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
            <p class="card-text">
                @if ($item->price == 0)
                <ul class="list-group list-group-flush" style="text-align: right">
                  <li class="list-group-item">FREE</li>
                </ul> 
                @else 
                <ul class="list-group list-group-flush" style="text-align: right">
                  <li class="list-group-item">IDR {{ number_format($item->price,3) }}</li>
                </ul>    
                @endif
            </p>
            </div>
        </div>
        @endif
    @endforeach 
    </div>
    
    @if(auth()->user())
    <div class="formreview">
      <h2>
        Leave a review!
      </h2>
      <form name="reviewform" id="reviewform" method="post" action="/form">
        @csrf
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="recommended" id="recommended" value="true">
          <label class="form-check-label" for="flexRadioDefault1">
            Recommended
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="recommended" id="notrecommended" value="">
          <label class="form-check-label" for="flexRadioDefault2">
            Not recommended
          </label>
        </div>
        <div class="mb-3 ">
          <label for="textbox" class="form-label"></label>
          <input type="text" class="form-control" name="description" id="description">
        </div>
        <input type="hidden" id="game_id" name="game_id" value="{{ $games->id }}">
        <input type="hidden" id="category_id" name="category_id" value="{{ $games->category_id }}">
        <button type="submit" class="btn btn-primary ">Submit</button>
      </form>
    </div>
    @endif

    <div class="d-flex justify-content-center align-items-center flex-row m-3" style="margin-top:2rem ">
      @foreach($reviews as $post )
        <div class="card" style="width: 18rem;margin:1em">
          <div class="card-body">
            <h5 class="card-title">{{ $post->name }}</h5>
            @if($post->recommended)
              <h6 class="card-subtitle mb-2 text-muted">Recommended</h6>
            
            @else
              <h6 class="card-subtitle mb-2 text-muted">Not Recommended</h6>
            @endif
            
            <p class="card-text">{{ $post->review_desc }}</p>
          </div>
        </div>
      @endforeach
    </div>


</div>


<style>
  .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
  };

  .formreview{
    
  }
</style>

@endsection