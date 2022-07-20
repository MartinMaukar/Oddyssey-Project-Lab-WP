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
              <li class="list-group-item">IDR {{ number_format($games->price) }}</li>
            </ul>    
            @endif
        </ul>
        @if(auth()->user())
        <div class="card-body">
            <a class="btn btn-dark" href="/addcart/{{ $games->id }}" role="button">Add To Cart</a>
        </div>
        @elseif(auth()->guest())
        <div class="card-body">
          <a class="btn btn-dark" href="/login" role="button">Add To Cart</a>
        </div>
        @endif
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
                    <p class="card-text">{{ $games->countrecomend }} Recommended</p>
                    <p class="card-text">{{ $games->countnotrecomend }} Not Recommended</p>
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
                    <li class="list-group-item">IDR {{ number_format($item->price) }}</li>
                  </ul>    
                  @endif
              </p>
              </div>
          </div>
          @endif
      @endforeach 
      </div>
  </div>


    


  <div class="d-flex justify-content-center align-items-center flex-row m-3" style="margin-top:2rem;">
    @foreach($reviews as $post )
      <div class="card" style="width: 18rem;margin:0.5em">
        <div class="card-body">
          <h5 class="card-title">{{ $post->name }}</h5>
          @if($post->recommended)
            <h6 class="card-subtitle mb-2 text-muted">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
              </svg>
              Recommended
            </h6>
          
          @else
            <h6 class="card-subtitle mb-2 text-muted">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z"/>
              </svg>
              Not Recommended
            </h6>
          @endif
          
          <p class="card-text">{{ $post->review_desc }}</p>
        </div>
      </div>
    @endforeach
  </div>
  {{ $reviews->links() }}

  @if(auth()->user())
  <div class="d-flex justify-content-center align-items-center m-3" style="margin-top:2rem ">
    <div class="card" style="width: 18rem;margin:1em">
      <div class="card-body">
        
          <div class="formreview">
            <h2>
              Leave a review!
            </h2>
            <form name="reviewform" id="reviewform" method="post" action="/form">
              @csrf
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="recommended" id="recommended" value="1">
                <label class="form-check-label" for="recommended">
                  Recommended
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="recommended" id="notrecommended" value="0">
                <label class="form-check-label" for="notrecommended">
                  Not recommended
                </label>
              </div>
              <div class="mb-3 ">
                <label for="textbox" class="form-label"></label>
                <input type="text" class="form-control" name="description" id="description">
              </div>
              <input type="hidden" id="game_id" name="game_id" value="{{ $games->id }}">
              <input type="hidden" id="category_id" name="category_id" value="{{ $games->category_id }}">
              <div class="d-flex justify-content-center align-items-center m-3">
                <button type="submit" class="btn btn-primary ">Submit</button>
              </div>
            </form>
          </div>
        
      </div>
    </div>
  </div>
  @endif

  
<style>
  .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
  };

</style>

@endsection