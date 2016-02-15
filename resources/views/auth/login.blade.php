@extends('admin.app')

@section('content')

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