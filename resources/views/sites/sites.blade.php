<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $theme->name }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/sites.min.css">
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
    </head>
    <body>
        
        <div id="page-wrapper">
	        
	        <header>
		        <div class="vertical-align logo">
			        <img src="uploads/sites/{{ $id }}/logo.svg" alt="{{ $theme->name }}">
			        <h1>{{ $theme->claim }}</h1>
		        </div>
		        
		        @if (isset($theme->github_link) && !empty($theme->github_link))
		        	<a class="github show-for-medium-up" href="{{ $theme->github_link }}" target="_blank">GitHub</a>
		        @endif
		        
	        </header>
	        
	        <div id="main" class="container">
		        
		        @foreach ($theme->sections as $index => $section)
				
					@if ($section->type === 'text')
					
					<section class="{{ $section->type }}" style="background: {{ $section->background }}; color: {{ $section->color }}">
				        <div class="row">
					        <div class="columns small-12 large-8 large-centered">
								<h3 class="heading decoration peaks-below">{{ $section->title }}</h3>
						        {!! $section->text !!}
						        @foreach ($section->links as $index => $link)
						        <a href="{{ $link->url }}" target="{{ $link->target }}">{{ $link->text }}</a>
						        @endforeach
					        </div>
				        </div>
			        </section>
			        
			        @elseif ($section->type === 'list')
			        	
		        	<section class="{{ $section->type }}">
			        
				        <div class="row">
					        <div class="columns small-12 text-center">
						        <h2 class="heading decoration peaks-below black-peaks">{{ $section->title }}</h2>
					        </div>
				        </div>
				        
				        @foreach ($section->items as $index => $item)
				        				        
				        <div class="row">
					        <div class="columns small-12">
						        <div class="inner @if ($index === 0) no-border @endif">
							        <div class="columns small-3 medium-2 medium-offset-1 text-right">
										<img src="uploads/sites/{{ $id }}/{{ $item->icon }}">
							        </div>
							        <div class="columns small-9 medium-8 end">
								        <h3 class="heading decoration line-below">{{ $item->title }}</h3>
								        <p>{{ $item->content }}</p>
							        </div>
						        </div>
					        </div>
				        </div>
				        
				        @endforeach
				       				        
			        </section>
			        
			        @elseif ($section->type === 'slideshow')
				        
			        <section class="{{ $section->type }}" style="background: {{ $section->background }}; color: {{ $section->color }}">
				        <div class="row">
					        <div class="columns small-12">
						        <div>
							        <div 
								        class="cycle-slideshow slider" 
								        data-cycle-pager="#slider-pager-{{ $index }}"
										data-cycle-pager-template="<li><a href=#> @{{slideNum}} </a></li>"
										data-cycle-slides="> .item"
										data-cycle-log=false	
									>
										
										@foreach ($section->slides as $slide)
										
									    <div class="item">
										    <img src="uploads/sites/{{ $id }}/{{ $slide->slide }}">
										    <p>{!! $slide->caption !!}</p>
									    </div>
									    
									    @endforeach
									</div>
						        </div>
								<ul id="slider-pager-{{ $index }}" class="pager"></div>
					        </div>
				        </div>
			        </section>
			        
			        @endif
				
				@endforeach
		        
	        </div>
	        
	        <footer>
		        
		        @if (isset($theme->footer_links) && !empty($theme->footer_links))
		        <h3 class="heading decoration peaks-below">Index</h3>
		        <div class="row">
			        <div class="columns small-12">
				        <ul>
					        @foreach ($theme->footer_links as $index => $link)			
					    	<li><a href="{{ $link->url }}" target="{{ $link->target }}">{{ $link->text }}</a></li>
							@endforeach
				        </ul>
			        </div>
		        </div>
		        @endif
		        
		        @if (isset($theme->footer_logos) && !empty($theme->footer_logos))
		        <div class="row">
					@foreach ($theme->footer_logos as $link)			
			    	<div class="columns small-6 text-right">
				        <a href="{{ $link->url }}" target="{{ $link->target }}" class="with-logo">
					        <img src="uploads/sites/{{ $id }}/{{ $link->logo }}">
					        <span>{{ $link->text }}</span>
				        </a>
			        </div>
					@endforeach
		        </div>
		        @endif
		        
		        @if (isset($theme->copyright) && !empty($theme->copyright))
		        <p class="copyline">© {{ Date('Y') }}, {{ $theme->copyright }}</p>
		        @endif
	        
	        </footer>
	        
	        
        </div>		
		
		<script src="js/sites.min.js"></script>
		
		@if (isset($theme->ga_tracking) && !empty($theme->ga_tracking))
		<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','{{ $theme->ga_tracking }}','auto');ga('send','pageview');
        </script>
		@endif

    </body>
</html>