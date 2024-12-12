@extends('backend.master')
@section('content')


<form action="{{url('/product-store')}}" method="post">
    @csrf
    <div class="container-fluid px-7"> 
    <h1 class="mt-5">Product</h1>  
  <div class="form-group">
    <label for="name">Product name</label><br>
    <input name="pro_name" type="text" class="form-control" id="name"  placeholder="name">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label><br>
    <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">image</label><br>
    <input name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="image">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection