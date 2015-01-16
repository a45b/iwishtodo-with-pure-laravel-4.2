<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	    
	    <meta name="description" content="">
	    <meta name="author" content="">	    
	    <!--<link rel="icon" href="../../favicon.ico">-->
		<title>iwishtodo</title>

        <!-- css -->
  	    {{ HTML::style('packages/css/bootstrap.min.css') }}
  	    {{ HTML::style('packages/css/jumbotron-narrow.css') }}

        <!-- js -->
        {{ HTML::script('packages/js/jquery.min.js');}}        
        {{ HTML::script('packages/js/bootstrap.min.js');}}
	</head>
    <body>

       
	    <div class="container">
	      <div class="header">	      	
	        <nav>
	        	<ul class="nav nav-pills pull-right">
	        	@section('navbar')	            	
	        	@show
	        	</ul>
	        </nav>
	        <h3 class="text-muted">iwishtodo</h3>
	      </div>
	    </div>        
        <section>
            @yield('content')
        </section>
        @section('footer')
        <div class="container">
			<footer class="footer">
				<p>&copy; iamkdev 2014</p>
			</footer>
		</div>
	</body>
</html>