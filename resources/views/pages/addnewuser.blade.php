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
        
        <div class="col-8">
            <br>
            <div class="card">
                <div class="card text-center">
                <h5 class="card-header">{{ __('Add New Account') }}</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addnewuser') }}" enctype="multipart/form-data" aria-label="{{ __('Register') }}">
                        @csrf
                        <h5 class="card-title">Account Details</h5>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>

                            <div class="col-md-6">
                                <select name="role" class="form-control">
                                <option value="">Choose one</option> 
                                <option value="admin">admin</option>
                                <option value="user">user</option> 
                            </select>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <p>Role:</p>
                            <select name="role" class="form-control">
                                <option value="">Choose one</option> 
                                <option value="admin">admin</option>
                                <option value=" ">user</option> 
                            </select>
                        </div> -->
                        <br>
                        <h5 class="card-title">Account Details</h5>
                        <div class="form-group row">
                            
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="text" class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ old('mobile_number') }}" required autofocus>

                                @if ($errors->has('mobile_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <p class="col-md-4 col-form-label text-md-right">Upload Picture Profile</p>
                            <div id="image2Pic">
                                {{Form::file('image2')}}
                            </div>
                            
                            
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection