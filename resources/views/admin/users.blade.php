@extends('admin.app')

@section('content')

<div class="row" id="user-list">

	<div class="columns small-12 large-8 large-offset-2">

		@if(count($users) >= 1) 
		
			@foreach($users as $index => $user)
			
			<div class="columns small-6 medium-4">
	
				<div class="thumb user-thumb">
					
					<?php 
						$email = $user->email;
						$size = 500;
						
						$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
					?>
					
					<img src="<?php echo $grav_url; ?>">
					
					<div class="controls">
						
						<ul></ul>
	
						<p><b>{{ $user->name }}</b></p>
						
					</div>
	
				</div>
	
			</div>
			
			@endforeach
								
		@else
		
		<div class="columns small-12 text-center">
	
			<p class="no-sites">No users added</p>
	
		</div>
		
		@endif
		
		<div class="columns small-6 medium-4 end">
			
			<div class="thumb user-thumb">
				
				<button data-reveal-id="myModal">
				
					<img src="{!! URL::asset('static/admin/add-button.png') !!}">
			
				</button>
			
			</div>
		
		</div>
				
	</div>
	
	<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
		
		<form method="POST" action="{{ url('/admin/register') }}">
            
            {!! csrf_field() !!}
			
			<fieldset>
				
				<legend>Add new user</legend>
				
				<div class="row">
					
					<div class="columns small-12 medium-4">
					
						<label class="{{ $errors->has('name') ? ' error' : '' }}">
	        
							<input type="text" name="name" class="{{ $errors->has('name') ? ' error' : '' }}" placeholder="Name *" value="{{ old('name') }}">
						
						</label>
						
						@if ($errors->has('name'))
		                
		                    <small class="{{ $errors->has('name') ? ' error' : '' }}">{{ $errors->first('name') }}</small> 
		                    
		                @endif
						
					</div>	
					
				</div>
				
				<div class="row">
					
					<div class="columns small-12 medium-6">
					
						<label class="{{ $errors->has('email') ? ' error' : '' }}">
	        
							<input type="email" name="email" class="{{ $errors->has('email') ? ' error' : '' }}" placeholder="Email Address *" value="{{ old('email') }}">
						
						</label>
						
						@if ($errors->has('email'))
		                
		                    <small class="{{ $errors->has('email') ? ' error' : '' }}">{{ $errors->first('email') }}</small> 
		                    
		                @endif
						
					</div>
					
				</div>
				
				<div class="row">
					
					<div class="columns small-12 medium-3">
					
						<label class="{{ $errors->has('password') ? ' error' : '' }}">
	        
							<input type="password" name="password" class="{{ $errors->has('password') ? ' error' : '' }}" placeholder="Password *" />
						
						</label>
						
						@if ($errors->has('password'))
		                
		                    <small class="{{ $errors->has('password') ? ' error' : '' }}">{{ $errors->first('password') }}</small> 
		                    
		                @endif
						
					</div>
					
					<div class="columns small-12 medium-3 end">
					
						<label class="{{ $errors->has('password_confirmation') ? ' error' : '' }}">
	        
							<input type="password" name="password_confirmation" class="{{ $errors->has('password_confirmation') ? ' error' : '' }}" placeholder="Password confirmation *" />
						
						</label>
						
						@if ($errors->has('password_confirmation'))
		                
		                    <small class="{{ $errors->has('password_confirmation') ? ' error' : '' }}">{{ $errors->first('password_confirmation') }}</small> 
		                    
		                @endif
						
					</div>
					
				</div>
								
			</fieldset>
			
			<button type="submit">Submit</button>
			
		</form>
					
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
	
	</div>
	
</div>

@endsection

@section('scripts')

<script>
	
	$(document).foundation({
	    reveal : {
	        close_on_esc: false,
	        close_on_background_click: false
	    }
	});
	
</script>

@endsection