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


Route::get('/', 'CommonController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'CommonController@adminLogin')->name('admin.login');

/************************************ADMIN START*****************************************/
Route::group(['prefix'=>'admin/','as'=>'admin.','middleware' => ['auth']], function () {
	Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
});
/************************************ADMIN START*****************************************/

/************************************VENDOR START*****************************************/
Route::group(['prefix'=>'admin/vendor/','as'=>'admin.vendor.','middleware' => ['auth']], function () {
	Route::get('list', 'VendorController@index')->name('list');
	Route::get('getAllVendors', 'VendorController@getAllVendors')->name('allVendors');
	Route::get('add', 'VendorController@add')->name('add');
	Route::post('addVendor', 'VendorController@addUpdateVendor')->name('addVendor');
	Route::get('getVendorById/{id}', 'VendorController@getVendorById')->name('getVendorById');
	Route::get('deleteVendorById/{id}', 'VendorController@deleteVendorById')->name('deleteVendorById');
});
/************************************VENDOR END*****************************************/

Auth::routes();





Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
