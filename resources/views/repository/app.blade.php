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

    <body>
                
        <div class="wrapper">
	        
			<img src="{!! URL::asset('static/repository/logo.svg'); !!}" alt="Mesos Frameworks logo" />
	        
	        <div class="container">
				
				@yield('content')

	        </div>

        </div>		
        		
		<script src="{!! URL::asset('js/repository.min.js'); !!}"></script>

		@yield('scripts')

    </body>

</html>