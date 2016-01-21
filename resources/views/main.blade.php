<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>RTP Minisites CMS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/style.min.css">
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
						<li class="active"><a href="#">Right Button Active</a></li>
						<li class="has-dropdown">
							<a href="#">{{ $account }}</a>
							<ul class="dropdown">
								<li><a href="#">Profile</a></li>
								<li class="active"><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
					
					<!-- Left Nav Section -->
					<ul class="left">
						<li><a href="#">Left Nav Button</a></li>
					</ul>
				</section>
			</nav>
	        
	        <div class="container">
		        
		        
		        
		        <div class="row">
			        <div class="columns small-12">
				        
						<form>
							<div class="row">
								<div class="medium-10 columns">
									<input type="text" placeholder="Enter the name for the new site">
								</div>
								<div class="medium-2 columns">
									<button type="submit" value="new project">
								</div>
							</div>
						</form>
				        
						<table class="scroll rtp-table">
							<thead>
								<tr>
									<th>Site</th>
									<th width="40"></th>
									<th width="40"></th>
									<th width="40"></th>
									<th width="40"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Elasticsearch</td>
									<td><a href="#previewSite"><i class="material-icons">pageview</i></a></td>
									<td><a href="#publishSite"><i class="material-icons">publish</i></a></td>
									<td><a href="#editSite"><i class="material-icons">edit</i></a></td>
									<td><a href="#deleteSite"><i class="material-icons">delete</i></a></td>
								</tr>
								
								<tr>
									<td>Flocker</td>
									<td><a href="#previewSite"><i class="material-icons">pageview</i></a></td>
									<td><a href="#publishSite"><i class="material-icons">publish</i></a></td>
									<td><a href="#editSite"><i class="material-icons">edit</i></a></td>
									<td><a href="#deleteSite"><i class="material-icons">delete</i></a></td>
								</tr>
								
								<tr>
									<td>Laravel</td>
									<td><a href="#previewSite"><i class="material-icons">pageview</i></a></td>
									<td><a href="#publishSite"><i class="material-icons">publish</i></a></td>
									<td><a href="#editSite"><i class="material-icons">edit</i></a></td>
									<td><a href="#deleteSite"><i class="material-icons">delete</i></a></td>
								</tr>
								
								<tr>
									<td>Homestead</td>
									<td><a href="#previewSite"><i class="material-icons">pageview</i></a></td>
									<td><a href="#publishSite"><i class="material-icons">publish</i></a></td>
									<td><a href="#editSite"><i class="material-icons">edit</i></a></td>
									<td><a href="#deleteSite"><i class="material-icons">delete</i></a></td>
								</tr>
							</tbody>
						</table>
				        
						<ul class="pagination">
							<li class="arrow unavailable"><a href="">&laquo;</a></li>
							<li class="current"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li class="unavailable"><a href="">&hellip;</a></li>
							<li><a href="">12</a></li>
							<li><a href="">13</a></li>
							<li class="arrow"><a href="">&raquo;</a></li>
						</ul>
				        
			        </div>
		        </div>
	        </div>
        </div>		
		
		<script src="js/bundle.min.js"></script>

    </body>
</html>
