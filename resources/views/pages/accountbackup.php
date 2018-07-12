<!-- @extends('layouts.app')

@section('content')
<div class="container-fluid"><br>   
    <div class="jumbotron text-center" style="background-image: url(/storage/cover_images/bg7.jpg) !important" id="accountjumbotron">
  <h1>My Account Settings</h1> 

    </div>
    <hr>
</div> -->


  <!-- <div class="cols">
            <div class="col module" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(/storage/cover_images/bg0.jpg)">
                        <div class="inner">
                            <p>My Profile</p>
              
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>View Profile</p> -->
                            <!-- <p>{{ auth()->user()->email }}</p>
                            <p>{{ auth()->user()->mobile_number }}</p>
                            <p>I want to edit my profile</p> -->
                     <!--    </div>
                    </div>
                </div>
            </div>
            <div class="col module" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(/storage/cover_images/bg14.jpg)">
                        <div class="inner">
                            <p>My Posts</p>
              
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <a href="/myposts">View My Posts</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col module" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(/storage/cover_images/bg15.jpg)">
                        <div class="inner">
                            <p>Post New</p>
              
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Create Posts</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
 
    
    <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Profile</h5>
    <p class="card-text">{{ auth()->user()->first_name }} {{ auth()->user()->first_name }}</p>
    <p class="card-text">{{ auth()->user()->email }}</p>
    <p class="card-text">{{ auth()->user()->mobile_number }}</p>

        
        
        
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
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
                </table>


              </div>
            </div>

        </div>

        </div>
    </div> -->



<!-- @endsection -->