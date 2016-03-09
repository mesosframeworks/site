<?php
	
Route::group(array('domain' => 'logogenerator.'.env('APP_URL_SIMPLE')), function() {	
	
	Route::get('/', 'LogoGenController@index');
});
	
Route::group(array('domain' => '{name}.'.env('APP_URL_SIMPLE')), function() {
    
    Route::get('/', function($name) {	 
	    
	    $model = App\Site::where('site_id', '=', $name)->firstOrFail();
	    
	    $site = json_decode(file_get_contents(public_path().'/uploads/sites/'.$name.'/theme.json'));
	    
	    return view('sites.sites', ['id' => $name, 'theme' => $site]);
    
    });

});

Route::group(['prefix' => 'admin'], function () {
    
    Route::auth();
    
    Route::get('/', 'AdminController@index');
    Route::get('/user', 'AdminController@users');
    Route::post('/user', 'AdminController@addUser');
    Route::post('/site', 'AdminController@addSite');
    Route::get('/site/user', 'AdminController@addUser');
	Route::get('/site/delete/{id}', 'AdminController@deleteSite');
	Route::get('/site/status/{id}', 'AdminController@publishSite');

	Route::get('/docs', 'AdminController@docs');

});

Route::get('/', 'RepositoryController@index');