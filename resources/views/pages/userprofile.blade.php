@extends('layouts.app')

@section('content')

@extends('inc.usersidenav')

  <!-- <button onclick="topFunction2()" id="myBtn2" title="Go back">Top</button> -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form id="regForm">

        <div class="head1"> 
          <h1>My Account Profile</h1>

          <hr> 
        </div>
        <div>

          <p><img src="/storage/cover_images/{{Auth::user()->image2}}" class="img-fluid"></p><br>
          <p>Username: {{ Auth::user()->name }}</p>
          <p>Name: {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
          <p>Email Address: {{ Auth::user()->email }}</p>
          <p>Mobile Number: {{ Auth::user()->mobile_number }}</p>
        </div>
        <hr>
          <div class="row">
            <div class="col-8 .col-lg-4">
              <a href="/users/{{Auth::id()}}" class="btn btn-primary">Edit</a>

            </div>

          </div>

        </form>
      </div>
    </div>  
  </div>

    

                      
@endsection