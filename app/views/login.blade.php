@extends('layouts.main')

@section('navbar')
	<li role="presentation"><a href="{{URL::to('/')}}">Home</a></li>
	<li role="presentation"><a href="{{URL::to('/register')}}">Register</a></li>
	<li role="presentation" class="active"><a href="{{URL::to('/login')}}">Login</a></li>
    @parent    
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
		<div class="page-header">
		  <h1>Login</h1>
		</div>		

		{{ Form::open(array('url' => 'user/login')) }}			
			@if ($error = $errors->first('password'))
			<div class="form-group">
			  <div class="alert alert-danger">
			    {{ $error }}
			  </div>
			</div>
			@endif			
 			<div class="form-group">
			    <label>Email</label>
			    <input type="email" name="email" class="form-control">
			  </div>
			  <div class="form-group">
			    <label>Password</label>
			    <div class="input-group">
			      <input type="password" name="password" class="form-control">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="submit">Login</button>
			      </span>
			    </div>			    
			  </div>			  
			  <div class="checkbox">
			    <label>
			      <input type="checkbox" name="remember"> 
			    </label>
			    <span class="pull-right"><a href="#">Forget password ?</a></span>
		  	</div>
		{{ Form::close() }}
		
	</div>
  </div>  
</div>
@stop