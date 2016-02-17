<section 
	id="{{ $index }}"
	class="{{ $section->type or 'text' }} {{ $section->color or 'white' }}" 
	style="background: {{ $section->background or '#FFFFFF' }};"
>
    <div class="row">
        <div class="columns small-12 large-8 large-centered">
			
			<h3 class="heading decoration peaks-below  {{ $section->color or 'white' }}">{{ $section->title or '' }}</h3>
	        
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