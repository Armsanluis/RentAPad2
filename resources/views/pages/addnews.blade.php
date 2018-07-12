@extends('layouts.app')

@section('content')

<div class="jumbotron" id="jumbocard">
  <h3 class="text-center text-black">Today's Number:</h3>
  <div class="container" id="regForm1">
<div class="card-deck">
  <div class=" card text-white bg-primary" >
    <div class="card-body  ">
      <h5 class="card-title text-center">Users</h5>
      <p class="card-text text-center">{{$users_count}}</p>
    </div>
  </div>
  <div class="card text-white bg-danger">
    <div class="card-body">
      <h5 class="card-title text-center">Total Posts</h5>
      <p class="card-text text-center">{{$posts_count}}</p>
    </div>
  </div>
  <div class="card text-white bg-warning">
    <div class="card-body">
      <h5 class="card-title text-center">Rent Posts</h5>
      <p class="card-text text-center">{{$rent_count}}</p>
    </div>
  </div>
  <div class="card text-white bg-success">
    <div class="card-body">
      <h5 class="card-title text-center">Sell Posts</h5>
      <p class="card-text text-center">{{$sell_count}}</p>
    </div>
  </div>
</div>
</div>
</div>
@endsection