@extends('backend.master')
@section('content')


<form action="{{url('/category-store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid px-7"> 
    <h1 class="mt-5">Categories</h1>  
  <div class="form-group">
    <label for="name">category name</label><br>
    <input name="cat_name" required type="text" class="form-control" id="name"  placeholder="name">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label><br>
    <input name="description" required  type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">image</label><br>
    <input name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="image">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection