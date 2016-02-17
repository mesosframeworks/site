<section 
	id="{{ $index }}"
	class="{{ $section->type or 'list' }} {{ $section->color or 'black' }}" 
	style="background: {{ $section->background or '#FFFFFF' }};"
>
			        
    <div class="row">
        <div class="columns small-12 text-center">
	        <h2 class="heading decoration peaks-below {{ $section->color or 'black' }}">{{ $section->title or '' }}</h2>
        </div>
    </div>
    
    @foreach ($section->items as $index => $item)
    	
    	@include('sites.components.listitem', ['item' => $item, 'color' => $section->color])			        
    
    @endforeach
   				        
</section>