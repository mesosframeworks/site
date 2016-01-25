<?php

Route::group(array('domain' => '{name}.rtp-cms.dev'), function()
{

    Route::get('/', function($name)
    {	 
	    
	    
	    $theme = json_decode(file_get_contents(public_path().'/uploads/sites/'.$name.'/theme.json'));
	    
	    //$foo = json_last_error();
	    
	    //echo $foo;
	    
		/*
		if (View::exists('sites.'.$account.'.main'))
		{
			return view('sites.'.$account.'.main', ['account' => $account]);	
		}
		*/
	       
        return view('sites.sites', ['id' => $name, 'theme' => $theme]);
    });

});

Route::get('/', function () {
    return view('main');
});

Route::get('/admin', 'AdminController@index');

Route::post('/admin/theme', 'AdminController@addTheme');

// Validation

// Create record in database

// Upload file

// Unzip file

// Check if json file exists and is valid

// Put json file in place

// Check if logo exists and is valid

// Put logo in place

// Check if there are images

// Put images in place

// Return to framework list