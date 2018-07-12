@extends('layouts.app')

@section('content')

	<div class="container-fluid" id="regForm1">
		<div class="row">
			<div class="col-1">
				<div class="sidebar sticky">
					<div class="fa-icon-wrap fa-icon-effect-8">
	                 <a class="fa-icon fa fa-plus" href="addnewuser" id="jm"></a>    
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

		  	<h1>List of Users</h1>
	  			<div class="table-responsive-sm">
	        		<table class="table table-striped table-bordered">
						<thead class="thead-dark text-center">
							<tr>

								<th scope="col">User ID</th>
								<th scope="col">Profile Pic</th>
								<th scope="col">Account Name</th>
								<th scope="col">Email Address</th>

								<th scope="col">First Name</th>
								<th scope="col">Last Name</th>
								<th scope="col">Mobile Number</th>
								<th scope="col">Date Created</th>
								<th scope="col">Date Updated</th>
								<th scope="col">Action</th>
							</tr>
						</thead>

					  	<tbody>

					    	<tr>
							@if(count($users) > 0)
			        		@foreach($users as $user)
				        		<th class="text-center">{{$user->id}}</th>
				        		<th><img class="img-fluid" src="/storage/cover_images/{{$user->image2}}"></th>
						      	<th class="text-center">{{$user->name}}</th>
								<th class="text-center">{{$user->email}}</th>

								<th class="text-center">{{$user->first_name}}</th>
								<th class="text-center">{{$user->last_name}}</th>
								<th class="text-center">{{$user->mobile_number}}</th>
								<th class="text-center">{{$user->created_at}}</th>
								<th class="text-center">{{$user->updated_at}}</th>
								<th>{!!Form::open(['action' => ['PagesController@destroy', $user->id],
				                          'method' => 'DELETE' , 'class'=> 'pull-right'])!!}
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
    
@endsection()