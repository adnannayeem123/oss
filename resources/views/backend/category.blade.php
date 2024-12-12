
    @extends('backend.master')
    @section('content')
    
    <h1>Category</h1>
    <a class="btn btn-primary" href="{{url('category-form')}}" >Create Category</a> 
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cat as $data)
    <tr>
      <!-- <th scope="row">1</th> -->
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>
<img src="{{url('/backend/uploads/'.$data->image)}}" alt="" width="50px">
      </td>
      <td>
        <a class="btn btn-primary" href="{{url('category-form')}}">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
      
    </tr>
    
    
    </tr>
    @endforeach
  </tbody>
</table>
{{$cat->links()}}
    @endsection