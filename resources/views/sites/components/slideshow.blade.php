<section 
	id="{{ $index }}"
	class="{{ $section->type }}" 
	style="background: {{ $section->background or '#FFFFFF' }}; color: {{ $section->color or 'black' }}"
>
    
    <div class="row">
        
        <div class="columns small-12">
	        
	        <div>
		    
		        <div 
			        class="@if(count($section->slides) > 1) cycle-slideshow @endif slider" 
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
	        
			@if(count($section->slides) > 1)
			
			<ul id="slider-pager-{{ $index }}" class="pager"></div>
			
			@endif
        
        </div>
    
    </div>

</section>