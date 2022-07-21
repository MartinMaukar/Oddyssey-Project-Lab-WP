@extends('template.navbar')
    @section('title','Admin Manage Category')
@section('content')

@if(session()->get('success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
  
  <div>
    {{ session()->get('success') }}
  </div>
</div>
@endif

@if(session()->get('error'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
  
  <div>
    {{ session()->get('error') }}
  </div>
</div>
@endif

<a href="/adminaddcategory" style="text-decoration: none">
    <button type="button" class="btn btn-dark d-flex justify-content-center align-items-center m-3">Add Category</button>
</a>



<div class="d-inline-flex p-2 flex-column ">
  @foreach($categories as $item)
  <div class="card border-dark mb-3 mx-1" style="max-width: 18rem;">
    <div class="" style="text-decoration: none">
      <div class="card-header"><strong>{{ $item->category_name }}</strong></div>
    </div>
    
    <div class="card-body text-dark">
      <a class="btn btn-secondary" href="/adminupdatecategory/{{ $item->id }}" role="button">Update</a>
      <a class="btn btn-danger" href="/removecategory/{{ $item->id }}" role="button">Remove</a>  
    </div>
  </div>
@endforeach
</div>



@endsection

{{-- <div class="card mb-3" style="width: 80%;display:flex; flex-direction:column">

  <div class="col-md-8">
    
    <div class="card-body">
        <h5 class="card-text">{{ $item->category_name }}</h5>

        
        <a class="btn btn-secondary" href="/adminupdatecategory/{{ $item->id }}" role="button">Update</a>
        <a class="btn btn-danger" href="/removecategory/{{ $item->id }}" role="button">Remove</a>    

    </div>
    
  </div>

</div> --}}