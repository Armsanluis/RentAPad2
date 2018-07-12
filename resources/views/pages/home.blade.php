@extends('layouts.app')

@section('content')
<button onclick="topFunction2()" id="myBtn2" title="Go back">Top</button>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
              <div class="panel-heading">Dashboard</div>
              <div class="panel-body">
              <a  class="btn btn-primary" href="/posts/create">Create Post</a>

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                 @endif
<h2>My Posts</h2>
            @if(count($posts) > 0)
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                    <td>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id],
                          'method' => 'POST' , 'class'=> 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                             {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                    </td>
                    </tr>
                    @endforeach
                @endif


              </div>
            </div>

        </div>

        </div>
    </div>
</div>
@endsection