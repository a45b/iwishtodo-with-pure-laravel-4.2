@extends('layouts.main')

@section('navbar')
	<li role="presentation"><a href="{{URL::to('/')}}">Wishlist</a></li>	
	<li role="presentation" class="active"><a href="{{URL::to('wish/create')}}">Create</a></li>
	<li role="presentation"><a href="{{URL::to('/user/logout')}}">Logout</a></li>
    @parent    
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
    	<div class="page-header">
		  <h1>Create Wish</h1>
		</div>		
		{{ Form::open(array('url' => 'wish')) }}
		<div class="form-group">
		    <label>Wish</label>
		    <textarea name="wish" class="form-control" rows="4" placeholder="Example: I want to visit Japan"></textarea>
		    <p class="text-danger">{{ $errors->first('wish') }}</p>
		</div>
		<div class="form-group">
			<button class="btn btn-primary pull-right" type="submit">Save</button>  
		</div>
		{{ Form::close() }}
    </div>
  </div>  
</div>
@stop