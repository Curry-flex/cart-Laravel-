<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total =ProductController::cartItem();;
}

?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      @if(session()->has('user'))
      <li class="active"><a href="/product">Products <span class="sr-only">(current)</span></a></li>
      @else
      <li class="active"><a href="#">E-commerce <span class="sr-only">(current)</span></a></li>
       @endif
        

       @if(session()->has('user'))
        <li><a href="/showadd">Add</a></li>
       
       @endif
     
       
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#">cart({{$total}})</a></li>
        @if(Session::has('user'))
        <li><a href="">{{Session::get('user')['name']}}</a></li>
        <li><a href="/logout">Logout</a></li>
        @else
        <li><a href="/">Login</a></li>
        @endif
      
        

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
