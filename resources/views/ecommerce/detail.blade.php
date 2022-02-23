@extends('ecommerce.master')

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-6">
       <img class="img" src="{{asset('images/'. $detail->gallery)}}" alt="">
      </div>
      <div class="col-md-6">
       <h4>Name: {{$detail->name}}</h4>
       <h4>Description: {{$detail->description}}</h4>
       <h4>price: {{$detail->price}}</h4> 
       <form action="/add-to-cart" method="POST">
       @csrf
       <input type="text" name="product_id" hidden value="{{$detail->id}}">
       <button class="btn btn-primary">Add to Cart</button>
      </form>
       
      
      </div>

  </div>

</div>


@endsection