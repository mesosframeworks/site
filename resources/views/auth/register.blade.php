@extends('admin.app')

@section('content')

<!--
<div id="myModal" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  
  	<p class="lead">Sign in</p>
  
  	<form role="form" method="POST" action="{{ url('/admin/login') }}">

		{!! csrf_field() !!}
		
		<div class="{{ $errors->has('email') ? ' has-error' : '' }}">
							
			<input type="email" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText">
			
			@if ($errors->has('email'))
			
			<p class="help-text" id="emailHelpText">{{ $errors->first('email') }}</p>
			
			@endif
			
		</div>
		
		<div class="{{ $errors->has('password') ? ' has-error' : '' }}">
			
			<input type="password" name="password" placeholder="Password" aria-describedby="passwordHelpText">
			
			@if ($errors->has('password'))
			
			<p class="help-text" id="passwordHelpText">{{ $errors->first('password') }}</p>
			
			@endif
			
		</div>
				
		<button type="submit" class="small">Login</button>
		
	</form>
  
</div>
-->

<div class="row">

	<div class="columns small-12 medium-8 medium-offset-1">

		@if(isset($users) && count($users) >= 1) 
		
			@foreach($users as $index => $user)
			
			<div class="columns small-6 medium-4 @if(count($users) === $index + 1) end @endif">
	
				<div class="thumb user-thumb">
					
					<?php 
						$email = $user->email;
						$default = "http://www.somewhere.com/homestar.jpg";
						$size = 500;
						
						$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
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
				
	</div>
	
	<div class="row">
		
		<div class="columns small-12 medium-8 medium-offset-1">
			
			<button data-reveal-id="myModal">Add user</button>
			
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
	
	$(document).ready(function() {
		
		$('#myModal').foundation('reveal', 'open', {
			closeonbackgroundclick: false
		});
	});
	
</script>

@endsection