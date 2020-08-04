<?php

Route::post('register', 'API\V1\AuthController@register');
Route::post('login', 'API\V1\AuthController@login');
Route::post('member/login', 'API\V1\AuthController@memberlogin');

Route::group([
	'middleware' => ['auth:api']], function () {
		Route::get('logout','API\V1\AuthController@logout');
		Route::get('member/logout','API\V1\AuthController@memberlogout');
});

Route::group([
	'prefix' => 'v1', 
	'as' => 'api.', 
	'namespace' => 'Api\V1\Admin', 
	'middleware' => ['auth:api']], function () {
	
	// Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Product Categories
    Route::post('product-categories/media', 'ProductCategoryApiController@storeMedia')->name('product-categories.storeMedia');
    Route::apiResource('product-categories', 'ProductCategoryApiController');

    // Product Tags
    Route::apiResource('product-tags', 'ProductTagApiController');

    // Products
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductApiController');

    // User Alerts
    Route::apiResource('user-alerts', 'UserAlertsApiController');
	
	// Events
    //Route::apiResource('events', 'EventsApiController');
	Route::apiResource('appointments', 'AppointmentsApiController');
	
	// Badges
    Route::post('badges/media', 'BadgesApiController@storeMedia')->name('badges.storeMedia');
    Route::apiResource('badges', 'BadgesApiController');

    // Employees
    Route::post('employees/media', 'EmployeesApiController@storeMedia')->name('employees.storeMedia');
    Route::apiResource('employees', 'EmployeesApiController');
	
	// Orders
    Route::apiResource('orders', 'OrdersApiController');
	
	// Transactions
    Route::apiResource('transactions', 'TransactionsApiController');
	
	// Members
	Route::post('members/media', 'MembersApiController@storeMedia')->name('members.storeMedia');
    Route::apiResource('members', 'MembersApiController');
	
	 // Clients
    Route::apiResource('clients', 'ClientsApiController');

    // Appointments
    Route::apiResource('appointments', 'AppointmentsApiController');
	
	// Contacts
	Route::apiResource('contacts', 'ContactsApiController');
	
});
