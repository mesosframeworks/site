<section 
	id="{{ $index }}"
	class="{{ $section->type or 'list' }}" 
	style="background: {{ $section->background or '#FFFFFF' }}; color: {{ $section->color or 'black' }}"
>
			        
    <div class="row">
        <div class="columns small-12 text-center">
	        <h2 class="heading decoration peaks-below black-peaks">{{ $section->title or '' }}</h2>
        </div>
    </div>
    
    @foreach ($section->items as $index => $item)
    	
    	@include('sites.components.listitem', ['item' => $item])			        
    
    @endforeach
   				        
</section>