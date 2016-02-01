<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mesos Frameworks</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/admin.min.css">
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
    </head>
    <body>
                
        <div class="wrapper">
	        
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
						<h1><a href="#">Mesos Frameworks</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>
				
				<section class="top-bar-section">
		
					<ul class="right">
						<li class="active"><a href="#">Sites</a></li>
						<li><a href="#">Logo Generator</a></li>
						<li><a href="#">Docs</a></li>
						<li class="has-dropdown">
							<a href="#">Ulises</a>
							<ul class="dropdown">
								<li><a href="#">Profile</a></li>
								<li class="active"><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
		
				</section>
			</nav>
	        
	        <div class="container">
				
				<div class="row">
					<div class="columns small-12">
						<form 
							method="post"
							action="admin/theme"
							class="dropzone"
							id="addThemesBox"
						>
							{{ csrf_field() }}
						</form>
					</div>
				</div>
				
				<div class="row">
					
					@if(count($sites) >= 1) 
					
						@foreach($sites as $index => $site)
						
						<div class="columns small-6 medium-4 @if(count($sites) === $index + 1) end @endif">
							<div class="site-thumb">
								<img src="uploads/sites/{{ $site->site_id }}/logo.svg">
								<div class="controls">
									<ul>
										<li><a href="{{ str_replace(public_path(), '', $site->backup) }}" class="download" title="Download site"><i class="material-icons">get_app</i></a></li>
										<li><a href="#" class="public" title="Publish site"><i class="material-icons">turned_in_not</i></a></li>
										<li><a href="http://{{ $site->site_id }}.rtp-cms.dev" class="preview" title="Preview site"><i class="material-icons">search</i></a></li>
										<li><a href="#" class="delete" title="Delete site"><i class="material-icons">delete</i></a></li>
									</ul>
									<p><b>Created at</b>{{ $site->created_at }}</p>
									<p><b>Last updated</b>{{ $site->updated_at }}</p>
								</div>
							</div>
						</div>
						
						@endforeach
											
					@else
					
					<div class="columns small-12">
						<p>No sites</p>
					</div>
					
					@endif
				
				</div>

	        </div>
        </div>		
        		
		<script src="js/admin.min.js"></script>
		<script>
			
			Dropzone.options.addThemesBox = {
				maxFilesize : 100,
				uploadMultiple : false,
				acceptedFiles : '.zip',
				accept : function(file) {
					//alert('Done');
				}
			};
			
		</script>
    </body>
</html>
