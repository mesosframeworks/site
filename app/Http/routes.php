<?php

Route::group(array('domain' => '{name}.rtp-cms.dev'), function()
{

    Route::get('/', function($name)
    {	 
	    
	    
	    $theme = json_decode(file_get_contents(public_path().'/uploads/sites/'.$name.'/theme.json'));
	    
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

Route::post('/admin/theme', 'AdminController@addSite');

Route::get('/admin/site/delete/{id}', 'AdminController@deleteSite');
Route::get('/admin/site/status/{id}', 'AdminController@publishSite');