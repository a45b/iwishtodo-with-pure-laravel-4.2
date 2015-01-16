@extends('layouts.main')

@section('navbar')
	<li role="presentation"><a href="{{URL::to('/')}}">Home</a></li>
	<li role="presentation" class="active"><a href="{{URL::to('/register')}}">Register</a></li>
	<li role="presentation"><a href="{{URL::to('/login')}}">Login</a></li>
    @parent    
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
		<div class="page-header">
		  <h1>Register</h1>
		</div>
		{{ Form::open(array('url' => 'user/register')) }}
		
		  	@if (Session::has('flash_notice'))
			<div class="form-group">
			  <div class="alert alert-success">
			    {{ Session::get('flash_notice') }}
			  </div>
			</div>
			@endif			
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" name="name" class="form-control">
		    <p class="text-danger">{{ $errors->first('name') }}</p>
		  </div>
		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" name="email" class="form-control">
		    <p class="text-danger">{{ $errors->first('email') }}</p>
		  </div>
		  <div class="form-group">
		    <label>Password</label>
		    <div class="input-group">
		      <input type="password" name="password" class="form-control">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="submit">Register</button>
		      </span>
		    </div>
		    <p class="text-danger">{{ $errors->first('password') }}</p>
		  </div>
		  <p><a href="#">By clicking Register you accepted all terms and conditions</a></p>
		{{ Form::close() }}
	</div>
  </div>  
</div>
@stop