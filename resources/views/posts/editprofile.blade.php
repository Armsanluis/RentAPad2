@extends('layouts.app')

@section('content')
<button onclick="topFunction2()" id="myBtn2" title="Go back">Top</button>
  <div class="container">
    <div class="row">
      
      <div class="col-lg-7" id="regForm">
        <h1>Edit Account Profile</h1>
        <hr>
        {!! Form::open(['action' => ['UsersController@update', $user->id],  
        'method' => 'POST', 'enctype' => 'multipart/form-data'])  !!}
        <div class="form-group">
         {{Form::label('name', 'Name')}}
          {{Form::text('name', {{ Auth::user()->name }}, ['class' => 'form-control', 'placeholder' => 'Name'] )}}
        </div>
        <div class="form-group">
         {{Form::label('first_name', 'First Name')}}
          {{Form::text('first_name', {{ Auth::user()->first_name }}, ['class' => 'form-control', 'placeholder' => 'First Name'] )}}
        </div>
        <div class="form-group">
         {{Form::label('last_name', 'Last Name')}}
          {{Form::text('last_name', {{ Auth::user()->last_name }}, ['class' => 'form-control', 'placeholder' => 'Last Name'] )}}
        </div>
        <div class="form-group">
         {{Form::label('mobile', 'Mobile Number')}}
          {{Form::text('mobile', {{ Auth::user()->mobile }}, ['class' => 'form-control', 'placeholder' => 'Mobile Number'] )}}
        </div>
        <div class="form-group">
          <p>Edit Profile Image</p>
          {{Form::file('image2')}}
        </div>
{{Form::hidden('_method', 'PUT')}}

        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

        
        
      </div>
    </div>
  </div>
    

        
@endsection