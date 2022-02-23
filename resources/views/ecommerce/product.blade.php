@extends('ecommerce.master');

@section('content')
<div class="container">
  <h1>Trending Product</h1>
@foreach($product as $myproduct)
  <div class="position">
    <a href="/detail/{{$myproduct->id}}">
  <img class="img" src="{{asset('images/'. $myproduct->gallery)}}" alt="">
  <h4>{{$myproduct->name}}</h4>
  </a>
  </div>
   
  @endforeach
</div>
 
@endsection