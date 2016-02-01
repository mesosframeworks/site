<section 
	id="{{ $index }}"
	class="{{ $section->type or 'text' }}" 
	style="background: {{ $section->background or '#FFFFFF' }}; color: {{ $section->color or 'black' }}"
>
    <div class="row">
        <div class="columns small-12 large-8 large-centered">
			
			<h3 class="heading decoration peaks-below">{{ $section->title or '' }}</h3>
	        
	        {!! $section->text !!}
	        
	        @if (isset($section->links) && !empty($section->links))
		        
		        @foreach ($section->links as $index => $link)
		        
		        <a 
			        class="btn {{ $link->type or '' }}" 
				    href="{{ $link->url or '' }}" 
					target="{{ $link->target or '' }}"
				>{{ $link->text or '' }}</a>
		        
		        @endforeach
	        
	        @endif
        
        </div>
    
    </div>

</section>