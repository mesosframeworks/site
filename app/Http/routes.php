<?php

Route::group(array('domain' => '{name}.rtp-cms.dev'), function() {
    
    Route::get('/', function($name) {	 
	    
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

Route::group(['prefix' => 'admin'], function () {
    
    Route::auth();
    
    Route::get('/', 'AdminController@index');
    Route::post('/site', 'AdminController@addSite');
	Route::get('/site/delete/{id}', 'AdminController@deleteSite');
	Route::get('/site/status/{id}', 'AdminController@publishSite');

});











Route::get('/', function () {

    return view('main');

});







/*
Route::group(['middleware' => 'web'], function () {

    

    Route::get('/home', 'HomeController@index');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
*/
