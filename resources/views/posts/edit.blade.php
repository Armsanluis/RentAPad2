@extends('layouts.app')

@section('content')
<button onclick="topFunction2()" id="myBtn2" title="Go back">Top</button>
  <div class="container">
    <div class="row">
      
      <div class="col-lg-7" id="regForm">
        <h1>Edit Post</h1>
        <hr>
        {!! Form::open(['action' => ['PostsController@update', $post->id],  
        'method' => 'POST', 'enctype' => 'multipart/form-data'])  !!}
        <div class="form-group">
          <p>Type of Post:</p>
          <select name="type">
            <option value="rent">Rent</option>
            <option value="sell">Sell</option><br>  

          </select>
        </div>
        <div class="form-group">
         {{Form::label('title', 'Title')}}
          {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'] )}}
        </div>

        <div class="form-group">
           {{Form::label('body', 'Body')}}
           {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor',  'class' => 'form-control', 'placeholder' => 'Body'] )}}
        </div>

        <div class="form-group">
         {{Form::label('price', 'Price')}}
          {{Form::text('price', $post->price, ['class' => 'form-control', 'placeholder' => 'Price'] )}}
        </div>
        <div class="form-group">
         {{Form::label('payment', 'Payment Method')}}
          {{Form::text('payment', $post->payment, ['class' => 'form-control', 'placeholder' => 'Payment Method'] )}}
        </div>
        <div class="form-group">
         {{Form::label('location', 'Location')}}
          {{Form::text('location', $post->location, ['class' => 'form-control', 'placeholder' => 'Location'] )}}
        </div>

        <div class="form-group">
         {{Form::label('size', 'Size')}}
          {{Form::text('size', $post->size, ['class' => 'form-control', 'placeholder' => 'Size'] )}}
        </div>
        <div class="form-group">
         {{Form::label('rooms', 'No. of Rooms')}}
          {{Form::text('rooms', $post->rooms, ['class' => 'form-control', 'placeholder' => 'No. of Rooms'] )}}
        </div>
        <div class="form-group">
         {{Form::label('tnb', 'Toilets and Baths')}}
          {{Form::text('tnb', $post->tnb, ['class' => 'form-control', 'placeholder' => 'Toilets and Baths'] )}}
        </div>
        <div class="form-group">
         {{Form::label('amenities', 'Amenities')}}
          {{Form::text('amenities', $post->amenities, ['class' => 'form-control', 'placeholder' => 'Amenities'] )}}
        </div>

        <div class="form-group">
          <p>Upload Property Image</p>
          {{Form::file('image1')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}

        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
      </div>
    </div>
  </div>
    

        
@endsection
