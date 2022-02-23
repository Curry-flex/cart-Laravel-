@extends('ecommerce.master')

@section('content')

<div class="container">
    <div class="row">
       <div class="col-md-4 col-sm-offset-4">
       <form action="/mylogin" method="POST" class="addform" enctype="multipart/form-data">
       @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

       </div>
    </div>

</div>


@endsection