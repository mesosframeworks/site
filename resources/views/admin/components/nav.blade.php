<nav class="top-bar" data-topbar role="navigation">

	<ul class="title-area">

		<li class="name">

			<h1><a href="{{ url('/') }}">Mesos Frameworks</a></h1>

		</li>

		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>

	</ul>
	
	@if (!Auth::guest())

	<section class="top-bar-section">

		<ul class="right">

			<li @if( isset($section_id) && $section_id === 'sites') class="active" @endif><a href="{{ url('admin') }}">Sites</a></li>

			<li><a href="http://logogenerator.{{ env('APP_URL_SIMPLE') }}" target="_blank">Logo Generator</a></li>

			<li @if( isset($section_id) && $section_id === 'docs') class="active" @endif><a href="{{ url('admin/docs') }}">Docs</a></li>
			
			<li><a href="{{ url('admin/logout') }}">Logout</a></li>

		</ul>

	</section>
	
	@endif

</nav>