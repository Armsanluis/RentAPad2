@extends('layouts.app')

@section('content')

        
  <div class="container">
      @guest
        
        @else
          @if(Auth::user()->role == 'admin')
            
          @else
              @extends('inc.usersidenav')

          @endif
        @endguest
    <div class="row">
      
      <div class="col-lg-7" id="regForm">
        <h1>Edit Profile</h1>
        <hr>
        {!! Form::open(['action' => ['UsersController@update', $user->id],  
        'method' => 'POST', 'enctype' => 'multipart/form-data'])  !!}
        <div class="form-group">
          <p>Type of User:</p>
          <select name="role">
            <option value="user">user</option>
            <option value=" "></option><br>  

          </select>
        </div>
        <div class="form-group">
         {{Form::label('name', 'Username')}}
          {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Username'] )}}
        </div>
        <div class="form-group">
         {{Form::label('email', 'Email')}}
          {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email'] )}}
        </div>
        <div class="form-group">
         {{Form::label('password', 'Password')}}
          {{Form::text('password', $user->password, ['class' => 'form-control', 'placeholder' => 'Password'] )}}
        </div>
        <div class="form-group">
         {{Form::label('first_name', 'First Name')}}
          {{Form::text('first_name', $user->first_name, ['class' => 'form-control', 'placeholder' => 'First Name'] )}}
        </div>
        <div class="form-group">
         {{Form::label('last_name', 'Name')}}
          {{Form::text('last_name', $user->last_name, ['class' => 'form-control', 'placeholder' => 'Last Name'] )}}
        </div>
        <div class="form-group">
         {{Form::label('mobile_number', 'Mobile Number')}}
          {{Form::text('mobile_number', $user->mobile_number, ['class' => 'form-control', 'placeholder' => 'Mobile Number'] )}}
        </div>
        <div class="form-group">
          <p>Upload Property Image</p>
          {{Form::file('image2')}}
        </div>

        
        {{Form::hidden('_method', 'PUT')}}

        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    
      </div>
    </div>
  </div>
            



        
@endsection