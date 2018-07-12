@extends('layouts.app')

@section('content')

@extends('inc.usersidenav')

    <!-- <button onclick="topFunction2()" id="myBtn2" title="Go back">Top</button> -->
<br>

    
    <div class="container">
        <h3>{{$post->title}}</h3>
        <small>Posted on {{$post->created_at}}</small>
        <hr>

        <div class="row">
            <div class="col-lg-8">
        
                <div class="card">
                    <img src="/storage/cover_images/{{$post->image1}}" class="img-fluid" alt="Responsive image" id="showPic">
                    <hr>
                    <div class="row">
                        <div class="col-3 .col-lg3">
                            <strong>price:</strong> &dollar;{{$post->price}}
                        </div>
                        <div class="col-3 .col-lg3">
                            <strong>rooms:</strong> {{$post->rooms}}
                        </div>
                        <div class="col-3 .col-lg3">
                            <strong>baths:</strong> {{$post->tnb}}
                        </div>
                        <div class="col-3 .col-lg3">
                            <strong>area:</strong> {{$post->size}}
                        </div>

                    </div>
                </div>
                <br>    
                                 
                <div class="card" id="showCard1">
                    <div class="card-header bg-info" id="headingTwo">
                        <h7 class="mb-0">
                             
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="heading1but">
                                Property Description
                            </button>
                        </h7>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            {!!$post->body!!}
                        </div>
                    </div>

                </div>
                <br>  

                <div class="card" id="showCard">
                    <div class="card-header bg-info" id="headingOne">
                        <h7 class="mb-0">

                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" id="heading1but">
                                Property Information
                            </button>
                        </h7>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <strong>price:</strong> &dollar;{{$post->price}}<br>
                            <strong>location:</strong> {{$post->location}}<br>
                            <strong>area:</strong> {{$post->size}}<br>
                            <strong>rooms:</strong> {{$post->rooms}}<br>
                            <strong>toilets and baths:</strong> {{$post->tnb}}<br>
                            <strong>amenities:</strong> {{$post->amenities}}<br>
                            <strong>mode of payment:</strong> {{$post->payment}}<br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            <!-- <div class="card" id="showCard2">
                        <div class="card-header bg-info" id="headingthree"> -->
                <div class="sidebar sticky">
                    <div class="card" id="showCard2">
                        <div class="card-header bg-info" id="headingthree">
                            <h7 class="mb-0">
                                 
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="heading1but1">
                                    Contact Person
                                </button>
                            </h7>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            
                            <div class="card-body">
                                <img src="/storage/cover_images/{{$post->user->image2}}" class="img-fluid"><br>
                            </div>
                        
                            
                            <div class="card-text">
                                <strong>Agent Name:</strong> {{$post->user->first_name}} {{$post->user->last_name}}<br>
                                <strong>Email:</strong> {{$post->user->email}}<br>
                                <strong>Mobile Number:</strong> {{$post->user->mobile_number}}<br>
                            </div>
                        </div>
                    </div>
                                
                </div>
                        
            </div>
        </div>
    </div>
   <hr>
    <!-- @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit"  class="btn btn-default">Edit</a>
         {!!Form::open(['action' => ['PostsController@destroy', $post->id],
                              'method' => 'POST' , 'class'=> 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}

        @endif
    @endif -->
<script>
var stickyElements = document.getElementsByClassName('sticky');

for (var i = stickyElements.length - 1; i >= 0; i--) {
    Stickyfill.add(stickyElements[i]);
}

</script>

@endsection