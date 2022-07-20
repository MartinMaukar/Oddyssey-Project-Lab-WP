@extends('template.loginregis')
    @section('title', 'Update Game')
@section('content')
<main class="form-signin w-100 m-auto">


<div class="card" style="width: 20rem;">
    <div class="card-body">
          
        <div class="d-flex justify-content-center align-items-center m-3">
            <h3>Update Game</h3>
        </div>
        
        <form action="/updategame/{{ $games->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="input-group" style="margin-top: -2em">
                <input type="text" class="form-control" placeholder="Title" name="title" id="title" value="{{ $games->title }}">
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
                <input type="integer" class="form-control" placeholder="Price" name="price" id="price" value="{{ $games->price }}">
            </div>
            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <label for="thumbnail">Thumbnail</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                </div>
            </div>

            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <label for="slider1">Slider 1</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="slider1" name="slider1" >
                </div>
            </div>

            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <label for="slider2">Slider 2</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="slider2" name="slider2" >
                </div>
            </div>

            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <label for="slider3">Slider 3</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="slider3" name="slider3" >
                </div>
            </div>

            <div class="batas" style="margin-top: 2em;margin-bottom: 2em">
                <div class="input-group">
                    <textarea class="form-control" id="detail" placeholder="At least 15 character" rows="3" name="detail" required></textarea>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center m-3">
                <button type="submit" value="submit" class="btn btn-dark d-flex justify-content-center" style="text-decoration: none">Update Game</button>
            </div>
            

        </form>

    </div>
</div>   

</main>
@endsection