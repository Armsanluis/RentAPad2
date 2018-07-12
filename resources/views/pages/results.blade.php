@extends('layouts.app')

@section('content')
<button onclick="topFunction2()" id="myBtn2" title="Go back">Top</button>

<h1>Search results</h1>

@if (count($posts))

    <ul>

        @foreach($posts as $post)
            
        <div class="container">
            <div class="row" id="forborder">
                <div class="col-xs-4 col-md-4 col-lg-4">
                    <img src="/storage/cover_images/{{$post->image1}}" class="img-responsive img-fluid">
                </div>

            <div class="col-xs-8 col-md-8 col-lg-8">
                <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                <p><strong>location:</strong> {{$post->location}}</p>
                <p><strong>price:</strong> &dollar;{{$post->price}}</p>
                
                <div class="row">
                    <div class="col-4 .col-4">
                        <p><strong>rooms:</strong> {{$post->rooms}}</p>
                    </div>
                    <div class="col-4 .col-4">
                        <p><strong>toilets:</strong> {{$post->tnb}}</p>
                    </div>
                    <div class="col-4 .col-4">
                        <p><strong>area:</strong> {{$post->size}}</p>
                    </div>
                    <hr>
                </div>
                    <p><strong>description:</strong></p>
                    <p>{!!$post->body!!}</p>                

            </div>

            </div>

        </div>
    <br>

    
        @endforeach 
    </ul>
        @else
        <p>No posts found</p>

@endif
{{$posts->links()}}
@endsection