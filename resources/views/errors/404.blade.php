@extends('repository.app')

@section('content')
                
	<h2>404</h2>	
		
@endsection

@section('scripts')

	<script>
     	window.setTimeout('window.location="{{ URL::to('/') }}"; ', 15000);
    </script>

@endsection