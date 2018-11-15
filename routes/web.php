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

Route::get('login.html','LoginController@getLogin')->name('getLogin');
Route::post('login.html','LoginController@setLogin')->name('setLogin');

Route::get('logout.html','LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin','middleware' => 'login'],function(){

	Route::get('/index.html','AdminController@index')->name('index');
	
	Route::get('users/add.html','AdminController@getAddUser')->name('getAddUser');

	Route::post('users/add.html','AdminController@setAddUser')->name('setAddUser');

	Route::get('users/list.html','AdminController@getListUser')->name('getListUser');

	Route::get('users/delete/{id?}','AdminController@deleteUser')->name('deleteUser');

	Route::get('users/edit/{id?}','AdminController@editUser')->name('editUser');

	Route::post('users/edit','AdminController@setEditUser')->name('setEditUser');

	Route::get('users/selectData','AdminController@selectData')->name('selectData');

	Route::get('users/searchData','AdminController@searchData')->name('searchData');

	Route::get('slides/add.html','AdminController@getAddSlide')->name('getAddSlide');

	Route::post('slides/add.html','AdminController@setAddSlide')->name('setAddSlide');

	Route::get('slides/list.html','AdminController@getListSlide')->name('getListSlide');

	Route::get('slides/delete/{id?}','AdminController@deleteSlide')->name('deleteSlide');

	Route::get('slides/edit/{id?}','AdminController@getEditSlide')->name('getEditSlide');

	Route::post('slides/edit/{id?}','AdminController@setEditSlide')->name('setEditSlide');

	Route::get('slides/selectSlide','AdminController@selectSlide')->name('selectSlide');

	Route::get('slides/searchSlide','AdminController@searchSlide')->name('searchSlide');

});
