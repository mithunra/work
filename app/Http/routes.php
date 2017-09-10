<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Module;
use App\Logo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/find','ModuleController@find')->name('Module.find');
Route::post('/find','ModuleController@create')->name('Module.create');
Route::get('/find/{id}','ModuleController@find')->name('Module.edit');
Route::get('/delete/{id}','ModuleController@delete')->name('Module.delete');
