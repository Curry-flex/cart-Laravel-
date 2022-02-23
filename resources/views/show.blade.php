<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div class="container pt-3">
<div class="row">
   
<div class="col-5">
@if(session()->has('message'))
     <div class="alert alert-success">

     <h4> {{session()->get('message')}}</h4>
     </div>


    @endif

  @if($errors->any())
   <div class="alert alert-danger">
     <ul>
         @foreach($errors->all() as $errors)
           <li>{{$errors}}</li>
         @endforeach
     </ul>

   </div>


  @endif
<form action="/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('put')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First name</label>
    <input type="text" class="form-control" name="fname" aria-describedby="emailHelp" value="{{$user->firstname}}">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Second name</label>
    <input type="text" class="form-control" name="sname" value="{{$user->secondname}}" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Age</label>
    <input type="number" class="form-control" name="age" value="{{$user->age}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course</label>
    <input type="text" class="form-control" name="course" value="{{$user->course}}" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>
</div>

</div>
</body>
</html>