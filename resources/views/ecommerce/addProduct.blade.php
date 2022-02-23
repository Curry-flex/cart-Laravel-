@extends('ecommerce.master')

@section('content')

<div class="container">
    <div class="row">
       <div class="col-md-4 col-sm-offset-4">
       <form action="/add" method="POST" class="addform" enctype="multipart/form-data">
       @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
    <input type="text" name="category"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" name="price"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name="description"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="file" name="image">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

       </div>
    </div>

</div>


@endsection