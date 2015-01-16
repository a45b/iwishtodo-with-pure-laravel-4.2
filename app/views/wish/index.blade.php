@extends('layouts.main')

@section('navbar')
	<li role="presentation" class="active"><a href="{{URL::to('/')}}">Wishlist</a></li>	
	<li role="presentation"><a href="{{URL::to('wish/create')}}">Create</a></li>
	<li role="presentation"><a href="{{URL::to('user/logout')}}">Logout</a></li>
    @parent
@stop

@section('content')
<div class="container">
	@if (Session::has('flash_notice'))
	<div class="row">
    	<div class="col-md-12">    		
			  <div class="alert alert-success">
			    {{ Session::get('flash_notice') }}			    				
			  </div>			
    	</div>
	</div>
	@endif
<!-- Jan 16, 2014 4:47 PM -->
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<tbody>
				@foreach($wishs as $wish)
				<tr>
					<td>
						{{ $wish->wish }} <br/><small>{{ date("M d, Y h:i a", strtotime($wish->created_at)); }}</small>						
					</td>
					@if($wish->status != 'done')					
					<td>
					  {{ Form::open(array('route' => array('wish.show', $wish->id), 'method' => 'get')) }}
					  	<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
					  {{ Form::close() }}					 				
					</td>
					<td>						  
					  <a href="{{ URL::to('wish/'. $wish->id.'/edit') }}" class="btn btn-Primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					</td>					
					<td>						  
					  {{ Form::open(array('route' => array('wish.destroy', $wish->id), 'method' => 'delete')) }}
					  	<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
					  {{ Form::close() }}						
					</td>

					@else
						<td colspan="3"><button type="submit" title="Accomplished" class="btn btn-default pull-right" disabled="disabled"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></button></td>						
					@endif
				</tr>
	    		@endforeach
	    		</tbody>
	    	</table>
    	</div>
    </div>		
</div>
@stop