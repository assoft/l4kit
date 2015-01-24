<?php

Route::get('/', function(){
	return 'Front Page';
});

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index', 'before' => 'admin_auth']);
Route::get('admin/login', ['as' => 'login', 'uses' => 'AdminController@getLogin']);
Route::post('admin/login', ['as' => 'login', 'uses' => 'AdminController@postLogin']);
Route::get('admin/logout', ['as' => 'logout', 'uses' => 'AdminController@logout']);

Route::group(['prefix' => 'admin', 'before' => 'admin_auth'], function(){
	Route::resource('blog', 'admin\blogController');
	Route::resource('reference', 'admin\referenceController');

	// Elfinder
	Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
	Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
	Route::get('elfinder/ckeditor4', 'Barryvdh\Elfinder\ElfinderController@showCKeditor4');
	Route::get('elfinder/tinymce', 'Barryvdh\Elfinder\ElfinderController@showTinyMCE4');
});