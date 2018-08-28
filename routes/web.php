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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth'])->group(function(){

	/// Roles ///
	Route::post('roles/store' , 'RoleController@store')->name('roles.store')
		   ->middleware('permission:roles.create');
	
	Route::get('roles' , 'RoleController@index')->name('roles.index')
	       ->middleware('permission:roles.index');
	
	Route::get('roles/create' , 'RoleController@create')->name('roles.create')
	       ->middleware('permission:roles.index');
	
	Route::put('roles/{id_rol}' , 'RoleController@update')->name('roles.update')
	       ->middleware('permission:roles.edit');

	Route::get('roles/{id_rol}' , 'RoleController@show')->name('roles.show')
	       ->middleware('permission:roles.show');	  
	
	Route::delete('roles/{id_rol}' , 'RoleController@destroy')->name('roles.destroy')
	       ->middleware('permission:roles.destroy');
	
	Route::get('roles/{id_rol}/edit' , 'RoleController@edit')->name('roles.edit')
	       ->middleware('permission:roles.edit');	       


	/// Usuarios ///
	Route::get('users' , 'UserController@index')->name('users.index')
	       ->middleware('permission:users.index');
	
	Route::put('users/{user}' , 'UserController@update')->name('users.update')
	       ->middleware('permission:users.edit');

	Route::get('users/{user}' , 'UserController@show')->name('users.show')
	       ->middleware('permission:users.show');	  
	
	Route::delete('users/{user}' , 'UserController@destroy')->name('users.destroy')
	       ->middleware('permission:users.destroy');
	
	Route::get('users/{user}/edit' , 'UserController@edit')->name('users.edit')
	       ->middleware('permission:users.edit');


	/// Cargos ///
	Route::post('cargos/store' , 'CargosController@store')->name('cargos.store')
		   ->middleware('permission:cargos.create');
	
	Route::get('cargos' , 'CargosController@index')->name('cargos.index')
	       ->middleware('permission:cargos.index');
	
	Route::get('cargos/create' , 'CargosController@create')->name('cargos.create')
	       ->middleware('permission:cargos.index');
	
	Route::put('cargos/{cargos}' , 'CargosController@update')->name('cargos.update')
	       ->middleware('permission:cargos.edit');

	Route::get('cargos/{cargos}' , 'CargosController@show')->name('cargos.show')
	       ->middleware('permission:cargos.show');	  
	
	Route::delete('cargos/{cargos}' , 'CargosController@destroy')->name('cargos.destroy')
	       ->middleware('permission:cargos.destroy');
	
	Route::get('cargos/{cargos}/edit' , 'CargosController@edit')->name('cargos.edit')
	       ->middleware('permission:cargos.edit');

});
