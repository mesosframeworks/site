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
						<h1><a href="#">RTP Minisites CMS</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>
				
				<section class="top-bar-section">
					<!-- Right Nav Section -->
					<ul class="right">
						<li class="active"><a href="#">Logo Generator</a></li>
						<li class="has-dropdown">
							<a href="#">Ulises</a>
							<ul class="dropdown">
								<li><a href="#">Profile</a></li>
								<li class="active"><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
					
					<!-- Left Nav Section -->
					<ul class="left">
<!-- 						<li><a href="#">Left Nav Button</a></li> -->
					</ul>
				</section>
			</nav>
	        
	        <div class="container">

				<form 
					action="admin/theme"
					class="dropzone"
					id="dropzone"
				>
					{{ csrf_field() }}
				</form>

	        </div>
        </div>		
        		
		<script src="js/admin.min.js"></script>

    </body>
</html>
