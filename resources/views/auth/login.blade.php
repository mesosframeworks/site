@extends('admin.app')

@section('content')
		
<form class="login-form" role="form" method="POST" action="{{ url('/admin/login') }}">

    {!! csrf_field() !!}

    <div class="row {{ $errors->has('email') ? ' has-error' : '' }}">
		
		<div class="columns small-12">
			
			<input type="email" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText">
			
			@if ($errors->has('email'))
			
			<p class="help-text" id="emailHelpText">{{ $errors->first('email') }}</p>
			
			@endif
		
		</div>

    </div>
    
    <div class="row {{ $errors->has('password') ? ' has-error' : '' }}">
		
		<div class="columns small-12">
			
			<input type="password" name="password" placeholder="Password" aria-describedby="passwordHelpText">
			
			@if ($errors->has('password'))
			
			<p class="help-text" id="passwordHelpText">{{ $errors->first('password') }}</p>
			
			@endif
		
		</div>

    </div>

	<!-- <input type="checkbox" name="remember"> Remember Me -->

    <div class="row">
        
        <div class="columns small-12">
        
            <button type="submit" class="small">Login</button>

			<!-- <a class="btn btn-link" href="{{ url('admin/password/reset') }}">Forgot Your Password?</a> -->
        
        </div>
    
    </div>

</form>

@endsection