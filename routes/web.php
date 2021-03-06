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
Route::get('/active/{token}','CommonController@active_account')->name('active.account');
Route::get('/forgot/{token}','CommonController@getResetPasswordForm')->name('active.forgot_password');

Route::get('/forget_password','CommonController@forget_password')->name('active.forget_password');

Route::get('/test_email', 'CommonController@test_email')->name('test_email');
Route::post('user/login', 'CommonController@login')->name('user.login');
Route::post('user/forgot_password', 'CommonController@forgot_password')->name('user.forgot');
Route::post('user/reset_password', 'CommonController@resetUserPassword')->name('user.reset_password');
Route::post('user/register', 'CommonController@register')->name('user.register');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'CommonController@adminLogin')->name('admin.login');
Route::post('admin/logout', 'CommonController@adminLogOut')->name('admin.logout');

/************************************ADMIN START*****************************************/
Route::group(['prefix'=>'admin/','as'=>'admin.','middleware' => ['auth']], function () {
	Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
	
	Route::get('/messages', 'MessagesController@lists')->name('userMessages');
	Route::get('/message/{userName}', 'MessagesController@view')->name('userViewMessage');
});
/************************************ADMIN START*****************************************/

/************************************VENDOR START*****************************************/
Route::group(['prefix'=>'admin/vendor/','as'=>'admin.vendor.','middleware' => ['auth']], function () {
	Route::get('list', 'Admin\VendorController@index')->name('vendorList');
	Route::get('getAllVendors', 'Admin\VendorController@getAllVendors')->name('allVendors');
	Route::get('add', 'Admin\VendorController@add')->name('add');
	Route::post('addVendor', 'Admin\VendorController@addUpdateVendor')->name('addVendor');
	Route::post('uploadProfilePic', 'Admin\VendorController@uploadProfilePic')->name('uploadProfilePic');
	Route::get('getVendorById/{id}', 'Admin\VendorController@getVendorById')->name('getVendorById');
	Route::post('deleteVendorById/{id}', 'Admin\VendorController@deleteVendorById')->name('deleteVendorById');
});
/************************************VENDOR END*****************************************/

/************************************Customer START*****************************************/
Route::group(['prefix'=>'admin/customer/','as'=>'admin.customer.','middleware' => ['auth']], function () {
	Route::get('list', 'Admin\CustomerController@index')->name('customerList');
	Route::get('getAllCustomers', 'Admin\CustomerController@getAllCustomers')->name('allCustomers');
	Route::get('add', 'Admin\CustomerController@add')->name('add');
	Route::post('addCustomer', 'Admin\CustomerController@addUpdateCustomer')->name('addCustomer');
	Route::post('uploadProfilePic', 'Admin\CustomerController@uploadProfilePic')->name('uploadProfilePic');
	Route::get('getCustomerById/{id}', 'Admin\CustomerController@getCustomerById')->name('getCustomerById');
	Route::post('deleteCustomerById/{id}', 'Admin\CustomerController@deleteCustomerById')->name('deleteCustomerById');
});
/************************************Customer END*****************************************/

/************************************ADMIN Listing START*****************************************/
Route::group(['prefix'=>'admin/listing/','as'=>'admin.listing.','middleware' => ['auth']], function () {
	Route::get('type', 'Admin\AdminListingController@listing_type')->name('allListingType');
	Route::get('getAllTypes', 'Admin\AdminListingController@getAllTypes')->name('allTypes');
	Route::post('add_type', 'Admin\AdminListingController@add_listing_type')->name('saveListingType');
	Route::post('deleteListingTypeById/{id}', 'Admin\AdminListingController@deleteListingTypeById')->name('deleteListingTypeById');
	
	Route::get('room_type', 'Admin\AdminListingController@room_type')->name('allRoomListingType');
	Route::get('getAllRoomTypes', 'Admin\AdminListingController@getAllRoomTypes')->name('allRoomTypes');
	
	Route::get('amenities', 'Admin\AdminListingController@amenities')->name('allAmenities');
	Route::get('getAllAmenities', 'Admin\AdminListingController@getAllAmenities')->name('getAllAmenities');
	
	Route::get('facilities', 'Admin\AdminListingController@facilities')->name('allFacilities');
	Route::get('getAllFacilities', 'Admin\AdminListingController@getAllFacilities')->name('getAllFacilities');
});
/************************************ADMIN Listing END*****************************************/


/************************************FrontAdmin Start*****************************************/
Route::group(['prefix'=>'user/','as'=>'user.customer.','middleware' => ['auth']], function () {
	Route::get('/dashboard', 'CommonController@dashboard')->name('userDashboard');
	Route::get('/profile', 'CommonController@myprofile')->name('userProfile');
	Route::post('/profile/update', 'CommonController@myprofile_update')->name('userProfileUpdate');
	Route::get('/profile/update/password', 'CommonController@myprofile_password_update')->name('userProfileUpdatePassword');
	Route::get('/listing/add', 'ListingController@add')->name('listingAdd');
	Route::post('/listing/add', 'ListingController@addListing')->name('Addlisting');
	Route::get('/listing/edit/{id}', 'ListingController@editListing')->name('Editlisting');
	Route::get('/listing', 'ListingController@index')->name('listingAll');
	Route::post('/listing/deleteListing', 'ListingController@deleteListing')->name('deleteListingById');
	Route::post('/listing/generate_slug', 'ListingController@listingSlug')->name('generateSlug');
	
	Route::get('/messages', 'MessagesController@lists')->name('userMessages');
	Route::get('/message/{userName}', 'MessagesController@view')->name('userViewMessage');
});
/************************************FrontAdmin End*****************************************/

/************************************Front-End Start*****************************************/
Route::group(['prefix'=>'listing/','as'=>'user.customer.'], function () {
	Route::get('/{slug}', 'ListingController@view')->name('listing');
});	
/************************************Front-End End*****************************************/

Auth::routes();


/************************************DropzoneUpload****************/
Route::group(['prefix'=>'dropzone/upload/','as'=>'dropzone.upload.','middleware' => ['auth']], function () {
	Route::post('uploadProfilePic', 'Admin\VendorController@uploadProfilePic')->name('uploadProfilePic');
	Route::post('deleteProfilePic', 'Admin\VendorController@deleteProfilePic')->name('deleteProfilePic');
	
	Route::post('uploadListingImage', 'ListingController@uploadListingImage')->name('uploadListingImage');
	Route::post('deleteListingImage', 'ListingController@deleteListingImage')->name('deleteListingImage');
});
/************************************EndDropzone*******************/


Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
