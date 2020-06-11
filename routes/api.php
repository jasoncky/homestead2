<?php

Route::get('api/v1/country/search', 'Api\V1\Admin\CountryApiController@search')->name('api.country.search');

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
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
    Route::apiResource('members', 'TransactionsApiController');
	
	// Teams
	Route::get('team-members/{id}', ['uses' => 'TeamMembersController@show', 'as' => 'team-members.show']);
	
	
});
