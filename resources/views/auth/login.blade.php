@extends('admin.app')

@section('content')

<div id="myModal" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    
  	<form role="form" method="POST" action="{{ url('/admin/login') }}">

		{!! csrf_field() !!}
		
		<fieldset>
			
			<legend>Sign in</legend>
			
			<div class="row">
					
				<div class="columns small-12">
				
					<label class="{{ $errors->has('email') ? ' error' : '' }}">
        
						<input type="email" name="email" class="{{ $errors->has('email') ? ' error' : '' }}" placeholder="Email Address *" value="{{ old('email') }}">
					
					</label>
					
					@if ($errors->has('email'))
	                
	                    <small class="{{ $errors->has('email') ? ' error' : '' }}">{{ $errors->first('email') }}</small> 
	                    
	                @endif
					
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="columns small-12">
				
					<label class="{{ $errors->has('password') ? ' error' : '' }}">
        
						<input type="password" name="password" class="{{ $errors->has('password') ? ' error' : '' }}" placeholder="Password *" />
					
					</label>
					
					@if ($errors->has('password'))
	                
	                    <small class="{{ $errors->has('password') ? ' error' : '' }}">{{ $errors->first('password') }}</small> 
	                    
	                @endif
					
				</div>
				
			</div>
			
		</fieldset>
				
		<button type="submit" class="small">Login</button>
		
	</form>
  
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