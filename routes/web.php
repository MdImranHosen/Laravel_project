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
    return view('index');
});

Route::get('add-contact','ContactController@AddContact');

Route::get('all-contact','ContactController@AllContact')->name('all.contact');
Route::post('insert-contact','ContactController@InsertContact');
Route::get('delete-contact/{id}','ContactController@DeleteContact');
Route::get('show-contact/{id}','ContactController@ShowContact');
Route::get('edit-contact/{id}','ContactController@EditContact');
Route::post('update-contact/{id}','ContactController@UpdateContact');

Route::get('/Home', 'StudentController@home');

Route::get('/Main', 'StudentController@maincontent');

Route::get('/admin', function(){
	return view('welcome');
});