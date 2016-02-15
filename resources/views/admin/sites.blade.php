@extends('admin.app')

@section('content')

<div class="row">

	<div class="columns small-12">

		<form 
			method="post"
			action="admin/site"
			class="dropzone"
			id="addThemesBox"
		>

			{{ csrf_field() }}

		</form>

	</div>

</div>

<div class="row" id="sites">
	
	@if(count($sites) >= 1) 
	
		@foreach($sites as $index => $site)
		
		<div class="columns small-6 medium-4 {{ $site->site_id }} @if(count($sites) === $index + 1) end @endif">

			<div class="site-thumb">

				<img src="uploads/sites/{{ $site->site_id }}/logo.svg">

				<div class="controls">

					<ul>

						<li><a href="{{ str_replace(public_path(), '', $site->backup) }}" class="download" title="Download site"><i class="material-icons">get_app</i></a></li>

						<li><a href="{{ url('/admin/site/status/'.$site->id) }}" class="public" title="@if($site->public === 0) Publish site @else Hide site @endif"><i class="material-icons">@if($site->public === 0) turned_in_not @else turned_in @endif</i></a></li>

						<li><a href="http://{{ $site->site_id }}.{{ env('APP_URL_SIMPLE') }}" class="preview" title="Preview site" target="_blank"><i class="material-icons">search</i></a></li>

						<li><a href="{{ url('/admin/site/delete/'.$site->id) }}" class="delete_site" title="Delete site"><i class="material-icons">delete</i></a></li>

					</ul>

					<p><b>Created at</b>{{ $site->created_at }}</p>

					<p><b>Last updated</b>{{ $site->updated_at }}</p>

				</div>

			</div>

		</div>
		
		@endforeach
							
	@else
	
	<div class="columns small-12 text-center">

		<p class="no-sites">No sites added</p>

	</div>
	
	@endif

</div>

@endsection

@section('scripts')

<script>
			
	Dropzone.options.addThemesBox = {
		maxFilesize : 100,
		uploadMultiple : false,
		acceptedFiles : '.zip',
		success: function(file, res) {
			
			$("." + res.site_id).hide('fast');
			$(".no-sites").hide('fast');
			
			$("#sites").prepend("<div class='columns small-6 medium-4 " + res.site_id + "'><div class='site-thumb'><img src='uploads/sites/" + res.site_id + "/logo.svg'><div class='controls'><ul><li><a href='' class='download' title='Download site'><i class='material-icons'>get_app</i></a></li><li><a href='/admin/site/status/" + res.id + "' class='public' title='Publish site'><i class='material-icons'>turned_in_not</i></a></li><li><a href='http://" + res.site_id + ".rtp-cms.dev' class='preview' title='Preview'><i class='material-icons'>search</i></a></li><li><a href='/admin/site/delete/" + res.id + "' class='delete_site' title='Delete site'><i class='material-icons'>delete</i></a></li></ul><p><b>Created at</b>" + res.created_at + "</p><p><b>Last updated</b>" + res.updated_at + "</p></div></div></div>");
			}
	};

</script>

@endsection