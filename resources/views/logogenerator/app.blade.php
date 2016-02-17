<!DOCTYPE html>

<html>

<head>
	
	<title>Logo Generator</title>
	
	<link rel="stylesheet" href="{!! URL::asset('css/logogenerator.min.css') !!}">
		
	<script src="{!! URL::asset('js/vendor/modernizr-2.8.3.min.js'); !!}"></script>
	
</head>

<body>
		<div class="inner-wrap">
			
			<div id="canvas-wrapper" class="drawing">
				
				<div class="name-wrapper">

					<span class="mesos">mesos</span>

					<span class="name" id="preview">framework</span>

				</div>

			</div>
						
			<aside id="cp">

				<h1>Mesos Logo Generator</h1>

				<form>

					<input type="text" id="name" placeholder="Type in the framework name"/>

				</form>
				
				<div id="buttons">

					<ul class="button-group">

						<li><span class="regenerate icon"></span><button id="go" class="tiny">Regenerate Shape</button></li>
						
						@if (!Auth::guest())

						<li><span class="save icon"></span><button href="#" id="download" class="button tiny secondary">Save logo design</button></li>

						@endif

					</ul>

				</div>

			</aside>

		</div>
	
	<script src="{!! URL::asset('js/logoGenerator.min.js'); !!}"></script>

	<script>
		
		$(document).ready(function () {
			
			// Update framework name
			var input = $('#name'),
				preview = $('#preview');
			
			input.keyup(function(e) {
				preview.text(input.val());
			});	
		});
		
	</script>

</body>

</html>