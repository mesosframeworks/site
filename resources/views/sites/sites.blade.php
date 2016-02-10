<!doctype html>

<html class="no-js" lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ $theme->name or '' }}</title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/sites.min.css">

		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
    </head>

    <body>
        
        <div id="page-wrapper">
	        
	        @include('sites.components.header', ['theme' => $theme])
	        
	        @if (isset($theme->sections) && !empty($theme->sections))
	        
	        <div id="main" class="container">
		        
		        @foreach ($theme->sections as $index => $section)
				
					@if ($section->type === 'text')
					
						@include('sites.components.text', ['section' => $section, 'index' => $index])
			        
			        @elseif ($section->type === 'list')
			        	
		        		@include('sites.components.list', ['section' => $section, 'index' => $index])
			        
			        @elseif ($section->type === 'slideshow')
			        
			        	@include('sites.components.slideshow', ['section' => $section, 'index' => $index])
			        
			        @endif
				
				@endforeach
		        
	        </div>
	        
	        @endif
	        
	        @include('sites.components.footer', ['themes' => $theme])
	        
        </div>		
		
		<script src="js/sites.min.js"></script>
		
		<script>
		
			$(document).ready(function(){
				
				$(".btn.scroll").on("click", function(e) {
					e.preventDefault();				
					$(window).scrollTo($(e.target).attr('href'), 500);
				});
				
			});
		
		</script>
		
		@if (isset($theme->ga_tracking) && !empty($theme->ga_tracking))
			
			@include('elements.ga', ['track' => $theme->ga_tracking])
		
		@endif

    </body>
    
</html>