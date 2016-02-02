<!doctype html>

<html class="no-js" lang="">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Mesos Frameworks</title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="{!! URL::asset('css/admin.min.css') !!}">
		
		<script src="{!! URL::asset('js/vendor/modernizr-2.8.3.min.js'); !!}"></script>
		
    </head>

    <body>
                
        <div class="wrapper">
	        
			@include('admin.components.nav')
	        
	        <div class="container">
				
				@yield('content')

	        </div>

        </div>		
        		
		<script src="{!! URL::asset('js/admin.min.js'); !!}"></script>
		
		<script>
			
			Dropzone.options.addThemesBox = {
				maxFilesize : 100,
				uploadMultiple : false,
				acceptedFiles : '.zip',
				success: function(file, res) {
					
					$("." + res.site_id).hide('fast');
					$(".no-sites").hide('fast');
					
					$("#sites").prepend("<div class='columns small-6 medium-4 " + res.site_id + "'><div class='site-thumb'><img src='uploads/sites/" + res.site_id + "/logo.svg'><div class='controls'><ul><li><a href='' class='download' title='Download site'><i class='material-icons'>get_app</i></a></li><li><a href='/admin/site/status/" + res.id + "' class='public' title='Publish site'><i class='material-icons'>turned_in_not</i></a></li><li><a href='http://" + res.id + ".rtp-cms.dev' class='preview' title='Preview'><i class='material-icons'>search</i></a></li><li><a href='/admin/site/delete/" + res.id + "' class='delete_site' title='Delete site'><i class='material-icons'>delete</i></a></li></ul><p><b>Created at</b>" + res.created_at + "</p><p><b>Last updated</b>" + res.updated_at + "</p></div></div></div>");
  				}
			};

		</script>

    </body>

</html>