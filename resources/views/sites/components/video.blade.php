<section 
	id="{{ $index }}"
	class="{{ $section->type or 'video' }}" 
	style="background: {{ $section->background or '#FFFFFF' }}; color: {{ $section->color or 'black' }}"
>

    <div class="row">
	    
        <div class="columns small-12 large-8 large-centered">
	        
	        @if (isset($section->embed_code) && !empty($section->embed_code))
		        
		        {!! $section->embed_code !!}
	        
	        @endif
        
        </div>
    
    </div>

</section>