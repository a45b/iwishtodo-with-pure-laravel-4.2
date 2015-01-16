@extends('layouts.main')

@section('navbar')
	<li role="presentation" class="active"><a href="{{URL::to('/')}}">Home</a></li>
	<li role="presentation"><a href="{{URL::to('/register')}}">Register</a></li>
	<li role="presentation"><a href="{{URL::to('/login')}}">Login</a></li>
    @parent    
@stop

@section('content')
<div class="container">
<div class="jumbotron">
    <h1>i wish todo</h1>
    <p class="lead">A wishlist with laravel framework</p>
    <p><a class="btn btn-lg btn-success" href="{{URL::to('/register')}}" role="button">Register today</a></p>
  </div>  
</div>
@stop