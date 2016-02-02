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

			<li class="active"><a href="{{ url('admin/sites') }}">Sites</a></li>

			<li><a href="http://logogenerator.rtp-cms.dev">Logo Generator</a></li>

			<li><a href="{{ url('admin/docs') }}">Docs</a></li>
			
			<li class="active"><a href="{{ url('admin/logout') }}">Logout</a></li>

		</ul>

	</section>
	
	@endif

</nav>