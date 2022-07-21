@extends('template.loginregis')
    @section('title', 'Add Game')
@section('content')
<main class="form-signin w-100 m-auto">


<div class="card" style="width: 20rem;">
    <div class="card-body">
          
        <div class="d-flex justify-content-center align-items-center m-3">
            <h3>Add Game</h3>
        </div>

        <form action="/adminaddgame" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group" style="margin-top: -2em">
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" id="title" required>
                @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group" style="margin-bottom: 2em;margin-top:2em">
                <select class="form-select" name="category" id="category" required>
                    <option selected disabled value="">Category</option>
                    @foreach($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group" style="margin-top: 2em;margin-bottom: 2em">
                <span class="input-group-text" id="basic-addon1">IDR</span>
                <input type="integer" class="form-control @error('price') is-invalid @enderror" placeholder="Price" name="price" id="price" required>
                @error('price')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <label for="thumbnail">Thumbnail</label>
                <div class="input-group">
                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail">
                    @error('thumbnail')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror                
                </div>
            </div>

            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <label for="slider1">Slider 1</label>
                <div class="input-group">
                    <input type="file" class="form-control @error('slider1') is-invalid @enderror" id="slider1" name="slider1" >
                    @error('slider1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <label for="slider2">Slider 2</label>
                <div class="input-group">
                    <input type="file" class="form-control @error('slider2') is-invalid @enderror" id="slider2" name="slider2" >
                    @error('slider2')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <label for="slider3">Slider 3</label>
                <div class="input-group">
                    <input type="file" class="form-control @error('slider3') is-invalid @enderror" id="slider3" name="slider3" >
                    @error('slider3')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <div class="input-group">
                    <textarea class="form-control @error('detail') is-invalid @enderror" id="detail" placeholder="At least 10 character" rows="3" name="detail" required></textarea>
                    @error('detail')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror                
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center m-3">
                <button type="submit" value="submit" class="btn btn-dark d-flex justify-content-center" style="text-decoration: none">Add Game</button>
            </div>
            

        </form>
    </div>
</div>    

</main>
@endsection