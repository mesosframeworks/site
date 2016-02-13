@extends('repository.app')

@section('content')
    
    <div class="row site-list">
                
    @if(count($sites) >= 1) 
	
		@foreach($sites as $index => $site)
			
			<div class="columns large-6">
				
				<a class="site" href="http://{{ $site->site_id }}.{{ env('APP_URL_SIMPLE') }}">		

					<img src="{!! URL::asset('uploads/sites/'.$site->site_id.'/logo.svg') !!}">
					
					<p><span>{{ $site->site_id }}</span> Seamless software defined storage for Mesos</p>
					
				</a>

			</div>
		
		@endforeach
							
	@else
	
		<div class="columns small-12 text-center">
	
			<p class="no-sites">No sites added</p>
	
		</div>
	
	@endif
	
    </div>
		
@endsection