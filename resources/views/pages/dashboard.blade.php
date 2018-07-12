@extends('layouts.app')

@section('content')
<div class="container-fluid"><br>   
    <!-- <div class="jumbotron text-center" style="background-image: url(/storage/cover_images/bg7.jpg) !important" id="accountjumbotron">  -->
  <h1>Admin Dashboard</h1> 

    </div>
    <hr>
</div>


  <div class="cols" id="regForm1">
            <div class="col module" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(/storage/cover_images/user.png)">
                        <div class="inner">
                            <p>Users</p>
              
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <a href="/listofusers">View All Users</a>
                            <!-- <p>{{ auth()->user()->email }}</p>
                            <p>{{ auth()->user()->mobile_number }}</p>
                            <p>I want to edit my profile</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col module" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(/storage/cover_images/posts.png)">
                        <div class="inner">
                            <p>Posts</p>
              
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <a href="/listofposts">View All Posts</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col module" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(/storage/cover_images/news.png)">
                        <div class="inner">
                            <p>News</p>
              
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <a href="/addnews">Add News</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
@endsection