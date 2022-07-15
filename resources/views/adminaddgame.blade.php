@extends('template.loginregis')
    @section('title', 'Add Game')
@section('content')
<main class="form-signin w-100 m-auto">

<h3>Add Game</h3>

<div class="input-group" style="margin-top: -2em">
    <input type="text" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1">
</div>

<div class="input-group" style="margin-bottom: 2em;margin-top:-1em">
    <input type="text" class="form-control" placeholder="Category" aria-label="Category" aria-describedby="basic-addon1">
</div>

<div class="input-group" style="margin-top: 2em;margin-bottom: 2em">
    <span class="input-group-text" id="basic-addon1">IDR</span>
    <input type="integer" class="form-control" placeholder="Price" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="batas" style="margin-top: 2em;margin-bottom: 2em">
    <label for="thumbnail">Thumbnail</label>
    <div class="input-group">
        <input type="file" class="form-control" id="thumbnail">
    </div>
</div>

<div class="batas" style="margin-top: 2em;margin-bottom: 2em">
    <label for="slider1">Slider[1]</label>
    <div class="input-group">
        <input type="file" class="form-control" id="slider1">
    </div>
</div>

<div class="batas" style="margin-top: 2em;margin-bottom: 2em">
    <label for="slider2">Slider[2]</label>
    <div class="input-group">
        <input type="file" class="form-control" id="slider2">
    </div>
</div>

<div class="batas" style="margin-top: 2em;margin-bottom: 2em">
    <label for="slider3">Slider[3]</label>
    <div class="input-group">
        <input type="file" class="form-control" id="slider3">
    </div>
</div>

<div class="batas" style="margin-top: 2em;margin-bottom: 2em">
    <div class="input-group">
        <textarea class="form-control" id="Detail" rows="3"></textarea>
    </div>
</div>

<a href="/adminaddgame" style="text-decoration: none">
    <button type="button" class="btn btn-dark d-flex justify-content-center align-items-center">Add Game</button>
</a>

</main>
@endsection