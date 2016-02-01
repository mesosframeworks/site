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
        <div class="columns small-12">
	        @foreach ($theme->footer_logos as $link)			
	        <a href="{{ $link->url }}" target="{{ $link->target }}" class="with-logo">
		        <img src="uploads/sites/{{ $id }}/{{ $link->logo }}">
		        <span>{{ $link->text }}</span>
	        </a>
			@endforeach
        </div>
    </div>
    @endif
    
    @if (isset($theme->copyright) && !empty($theme->copyright))
    <p class="copyline">© {{ Date('Y') }}, {{ $theme->copyright }}</p>
    @endif

</footer>