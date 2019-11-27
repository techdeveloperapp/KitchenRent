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

Route::get('admin', 'CommonController@adminLogin')->name('admin.login');

Route::get('admin/vendor/list', 'VendorController@index')->name('admin.vendor.list');
Route::get('admin/vendor/getAllVendors', 'VendorController@getAllVendors')->name('admin.vendor.allVendors');
Route::get('admin/vendor/add', 'VendorController@add')->name('admin.vendor.add');
Route::post('admin/vendor/addVendor', 'VendorController@addUpdateVendor')->name('admin.vendor.addVendor');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
