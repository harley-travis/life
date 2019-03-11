<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	
	if( auth()->check() == null ) {
		return redirect('/login');
	} else {
		return redirect('entries.overview');
	}
    
});

Route::get('dashboard', function () {
	return view('dashboard.dashboard');
})->name('dashboard.dashboard');
Auth::routes();

Route::group(['prefix' => 'entries'], function() { 
    $c = 'JournalController';
    
	Route::get('', [
		'uses'	=> "$c@index",
		'as'	=> 'entries.overview'
	]);
	
	Route::get('add', [
		'uses'	=> "$c@create",
		'as'	=> 'entries.create'
	]);
	
  Route::post('add', [
		'uses'	=> "$c@store",
		'as'	=> 'entries.add'
	]);
	
	Route::get('view/{id}', [
		'uses'	=> "$c@view",
		'as'	=> 'entries.view'
    ]);
    
	Route::get('edit/{id}', [
		'uses'	=> "$c@edit",
		'as'	=> 'entries.edit'
    ]);
    
	Route::post('edit', [
		'uses'	=> "$c@update",
		'as'	=> 'entries.update'
    ]);
    
	Route::get('delete/{id}', [
		'uses'	=> "$c@destory",
		'as'	=> 'entries.destory'
	]);
});

Route::group(['prefix' => 'settings'], function() { 
	$c = 'SettingsController';
	
	Route::get('', [
		'uses'	=> "$c@index",
		'as'	=> 'settings.profile'
	]);

	Route::get('profile', [
		'uses'	=> "$c@profile",
		'as'	=> 'settings.overview'
	]);

	Route::post('profile', [
		'uses'	=> "$c@update_avatar",
		'as'	=> 'settings.update_avatar'
	]);

	Route::post('upload', [
		'uses'	=> "$c@upload",
		'as'	=> 'settings.upload'
	]);
	
});



// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');