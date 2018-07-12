@extends('layouts.app')

@section('content')

	<div class="container-fluid" id="regForm1">
		<div class="row">
			<div class="col-1">
				<div class="sidebar sticky">
					<div class="fa-icon-wrap fa-icon-effect-8">
	                 <a class="fa-icon fa fa-plus" href="/posts/create" id="jm"></a>    
	                 </div>
	                 <div class="fa-icon-wrap fa-icon-effect-8">
	                 <a class="fa-icon fa fa-arrow-up" href="#backtotop" id="jm"></a>    
	                 </div> 
	                 <div class="fa-icon-wrap fa-icon-effect-8">
	                 <a class="fa-icon fa fa-arrow-left" href="{{ url()->previous() }}" id="jm"></a>    
	                 </div>
	                 <div class="fa-icon-wrap fa-icon-effect-8">
	                 <a class="fa-icon fa fa-home" href="home" id="jm"></a>    
	                 </div>
	            </div>		
			</div>
			<div class="col-1" id="buttonform"></div>
		



			<div class="col-8" id="backtotop">

				<h1>List of Posts</h1>

	  		
	  			<div class="table-responsive-sm">
			        <table class="table table-striped table-bordered">
					  	<thead class="thead-dark text-center">
					    	<tr>
						    	<th scope="col">Image</th>
								<th scope="col">Title</th>
								<th scope="col">Type</th>
								<th scope="col">Location</th>

								<th scope="col">Price</th>
								<th scope="col">Size</th>
								<th scope="col">Rooms</th>
								<th scope="col">Toilets</th>
								<th scope="col">Amenities</th>
								<th scope="col">Date Created</th>
								<th scope="col">Date Updated</th>
								<th scope="col">Action</th>
							</tr>
						</thead>

					  	<tbody>

							<tr>
							@if(count($posts) > 0)
							@foreach($posts as $post)
								<th><img class="img-fluid" src="/storage/cover_images/{{$post->image1}}"></th>
								<th class="text-center">{{$post->title}}</th>
								<th class="text-center">{{$post->type}}</th>
								<th class="text-center">{{$post->location}}</th>

								<th class="text-center">{{$post->price}}</th>
								<th class="text-center">{{$post->size}}</th>
								<th class="text-center">{{$post->rooms}}</th>
								<th class="text-center">{{$post->tnb}}</th>
								<th class="text-center">{{$post->amenities}}</th>
								<th class="text-center">{{$post->created_at}}</th>
								<th class="text-center">{{$post->updated_at}}</th>
								<th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a><br><br>
								{!!Form::open(['action' => ['PostsController@destroy', $post->id],
								'method' => 'POST' , 'class'=> 'pull-right'])!!}
								{{Form::hidden('_method', 'DELETE')}}
								 {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
								{!!Form::close()!!}</th>


							</tr>
					   		@endforeach
		   				</tbody>
		  			</table>
	        	</div>
	    @else
	      <p>No user found</p>
	    @endif
			</div>
		</div>
	</div>

@endsection