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
Route::post('user/login', 'CommonController@login')->name('user.login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'CommonController@adminLogin')->name('admin.login');

/************************************ADMIN START*****************************************/
Route::group(['prefix'=>'admin/','as'=>'admin.','middleware' => ['auth']], function () {
	Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
});
/************************************ADMIN START*****************************************/

/************************************VENDOR START*****************************************/
Route::group(['prefix'=>'admin/vendor/','as'=>'admin.vendor.','middleware' => ['auth']], function () {
	Route::get('list', 'Admin/VendorController@index')->name('vendorList');
	Route::get('getAllVendors', 'Admin/VendorController@getAllVendors')->name('allVendors');
	Route::get('add', 'Admin/VendorController@add')->name('add');
	Route::post('addVendor', 'Admin/VendorController@addUpdateVendor')->name('addVendor');
	Route::post('uploadProfilePic', 'Admin/VendorController@uploadProfilePic')->name('uploadProfilePic');
	Route::get('getVendorById/{id}', 'Admin/VendorController@getVendorById')->name('getVendorById');
	Route::post('deleteVendorById/{id}', 'Admin/VendorController@deleteVendorById')->name('deleteVendorById');
});
/************************************VENDOR END*****************************************/

/************************************Customer START*****************************************/
Route::group(['prefix'=>'admin/customer/','as'=>'admin.customer.','middleware' => ['auth']], function () {
	Route::get('list', 'Admin/CustomerController@index')->name('customerList');
	Route::get('getAllCustomers', 'Admin/CustomerController@getAllCustomers')->name('allCustomers');
	Route::get('add', 'Admin/CustomerController@add')->name('add');
	Route::post('addCustomer', 'Admin/CustomerController@addUpdateCustomer')->name('addCustomer');
	Route::post('uploadProfilePic', 'Admin/CustomerController@uploadProfilePic')->name('uploadProfilePic');
	Route::get('getCustomerById/{id}', 'Admin/CustomerController@getCustomerById')->name('getCustomerById');
	Route::post('deleteCustomerById/{id}', 'Admin/CustomerController@deleteCustomerById')->name('deleteCustomerById');
});
/************************************Customer END*****************************************/

Auth::routes();


/************************************DropzoneUpload****************/
Route::group(['prefix'=>'dropzone/upload/','as'=>'dropzone.upload.','middleware' => ['auth']], function () {
	Route::post('uploadProfilePic', 'Admin/VendorController@uploadProfilePic')->name('uploadProfilePic');
	Route::post('deleteProfilePic', 'Admin/VendorController@deleteProfilePic')->name('deleteProfilePic');
});
/************************************EndDropzone*******************/


Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
