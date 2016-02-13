<!doctype html>

<html class="no-js" lang="">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Mesos Frameworks</title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="{!! URL::asset('css/repository.min.css') !!}">
		
		<script src="{!! URL::asset('js/vendor/modernizr-2.8.3.min.js'); !!}"></script>
		
    </head>

    <body class="repository">
                
        <div class="wrapper">
	        
			<header>
				
				<img src="{!! URL::asset('static/repository/logo.svg'); !!}" alt="Mesos Frameworks logo" />	
			
			</header>
			
	        <div class="container">
				
				@yield('content')

	        </div>
			
			<footer>
				
				<div class="row">
			
			        <div class="columns small-12">
			
				        <a href="http://www.cisco.com/" target="_blank" class="with-logo">
					        <img src="{!! URL::asset('static/repository/logo-cisco.svg') !!}">
					        <span>Cisco Systems</span>
				        </a>
			
				        <a href="http://container-solutions.com" target="_blank" class="with-logo">
					        <img src="{!! URL::asset('static/repository/logo-container-solutions.svg') !!}">
					        <span>Container Solutions</span>
				        </a>
			
			        </div>
			
			    </div>
				
			</footer>
			
        </div>		
        		
		<script src="{!! URL::asset('js/repository.min.js'); !!}"></script>

		@yield('scripts')

    </body>

</html>