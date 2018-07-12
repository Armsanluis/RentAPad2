@extends('layouts.app')

@section('content')

@extends('inc.usersidenav')

    <!-- <button onclick="topFunction2()" id="myBtn2" title="Go back">Top</button> -->
<br>
    <h1>My Posts</h1>
    <br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="container">
                <div class="row" id="forborder">
                    <div class="col-xs-4 col-md-4 col-lg-4">
                        <img src="/storage/cover_images/{{$post->image1}}" class="img-responsive img-fluid">
                    </div>
                    <div class="col-xs-8 col-md-8 col-lg-8">
                        <h5>{{$post->title}}</h5>
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
                        <hr>
                    <div class="row">
                        <div class="col-8 .col-lg-4">
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                        </div>
                        <div class="col-4 .col-lg-4">
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id],
                          'method' => 'POST' , 'class'=> 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                             {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
      <p>No posts found</p>
    @endif
@endsection

<!-- @section('content')
<div class="container">
  <div class="row">
        <div class="col-md-12 col-md-offset-2">
        <div class="jumbotron-fluid">
        	<div class="jumbotron text-center">
        		<h1>My Posts hello</h1>
        	</div>
        </div>           
            @if(count($posts) > 0)
            <table class="table table-bordered">
            	
		          <tr>
		              <th>Title</th>
		              <th width="400px">Action</th>
		              <th>Terminate Post</th>
		          </tr>
		      	
		    
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>

                        <td>
                        <a href="/posts/{{$post->id}}/show" class="btn btn-info">View</a>
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    	 <td>	{!!Form::open(['action' => ['PostsController@destroy', $post->id],
                          'method' => 'POST' , 'class'=> 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                             {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                            </td>
                    </td>
                    </tr>
                    @endforeach

                @endif
                </table>


              </div>
            </div>

        </div>

        </div>
</div>
@endsection -->
