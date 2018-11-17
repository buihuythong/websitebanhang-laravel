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

	Route::get('category/add.html','AdminController@getAddCategory')->name('getAddCategory');

	Route::post('category/add.html','AdminController@setAddCategory')->name('setAddCategory');

	Route::get('category/list.html','AdminController@getListCategory')->name('getListCategory');

	Route::get('category/delete/{id?}','AdminController@deleteCategory')->name('deleteCategory');

	Route::get('category/edit/{id?}','AdminController@getEditCategory')->name('getEditCategory');

	Route::post('category/edit/{id?}','AdminController@setEditCategory')->name('setEditCategory');

	Route::get('category/selectCategory','AdminController@selectCategory')->name('selectCategory');

	Route::get('category/searchCategory','AdminController@searchCategory')->name('searchCategory');

	Route::get('type/add.html','AdminController@getAddType')->name('getAddType');

	Route::post('type/add.html','AdminController@setAddType')->name('setAddType');

	Route::get('type/list.html','AdminController@getListType')->name('getListType');

	Route::get('type/delete/{id?}','AdminController@deleteType')->name('deleteType');

	Route::get('type/edit/{id?}','AdminController@editType')->name('editType');

	Route::post('type/edit','AdminController@setEditType')->name('setEditType');

	Route::get('type/selectType','AdminController@selectType')->name('selectType');

	Route::get('type/searchType','AdminController@searchType')->name('searchType');

	Route::get('product/list.html','AdminController@listProduct')->name('listProduct');

	Route::get('product/searchProduct','AdminController@searchProduct')->name('searchProduct');

	Route::get('product/selectProduct','AdminController@selectProduct')->name('selectProduct');

	Route::get('product/delete/{id?}','AdminController@deleteProduct')->name('deleteProduct');

	Route::get('product/add.html','AdminController@getAddProduct')->name('getAddProduct');

	Route::get('product/selectTypeByCate','AdminController@selectTypeByCate')->name('selectTypeByCate');

	Route::post('product/add.html','AdminController@setAddProduct')->name('setAddProduct');

});
Route::get('index.html','PageController@getindex');

Route::get('list.html','PageController@getlist');

Route::get('quick-view.html','PageController@getquickview');

Route::get('product-detail.html','PageController@productdetail');

Route::get('contact-us.html','PageController@contact'); 
