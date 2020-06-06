<?php

Route::redirect('/', '/login');
Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

// dropdown
Route::get('admin/get_by_country', 'Admin\DropdownController@get_by_country')->name('admin.get_by_country');

Auth::routes(['register' => false]);
// Admin

Route::get('redirect/{driver}', 'SocialAuthController@redirect');
Route::get('callback/{driver}', 'SocialAuthController@callback');
Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('register', 'RegistrationController@store')->name('register');
Route::get('pricing', 'PricingController@index')->name('pricing');
Route::get('pricingselect/{planid}', 'PricingController@redirect');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth','active_user', 'twofactor']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Product Categories
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tags
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Products
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::resource('products', 'ProductController');

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::resource('user-alerts', 'UserAlertsController');
	
	// Events
    Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
    Route::resource('events', 'EventsController');
	Route::post('events/ajaxUpdate', 'EventsController@ajaxUpdate')->name('events.ajaxUpdate');
	
	// Calendar
	Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
	
	//chartjs
	Route::get('chart', 'ChartController@index')->name('chart');
	
	 // Badges
    Route::delete('badges/destroy', 'BadgesController@massDestroy')->name('badges.massDestroy');
    Route::post('badges/media', 'BadgesController@storeMedia')->name('badges.storeMedia');
    Route::post('badges/ckmedia', 'BadgesController@storeCKEditorImages')->name('badges.storeCKEditorImages');
    Route::resource('badges', 'BadgesController');

    // Employees
    Route::delete('employees/destroy', 'EmployeesController@massDestroy')->name('employees.massDestroy');
    Route::post('employees/media', 'EmployeesController@storeMedia')->name('employees.storeMedia');
    Route::post('employees/ckmedia', 'EmployeesController@storeCKEditorImages')->name('employees.storeCKEditorImages');
    Route::resource('employees', 'EmployeesController');
	
	// Orders
    Route::delete('orders/destroy', 'OrdersController@massDestroy')->name('orders.massDestroy');
    Route::resource('orders', 'OrdersController');
	
	// Transactions
    Route::delete('transactions/destroy', 'TransactionsController@massDestroy')->name('transactions.massDestroy');
    Route::resource('transactions', 'TransactionsController');
	
	//members
	Route::delete('members/destroy', 'MembersController@massDestroy')->name('members.massDestroy');
	Route::post('members/updateStatus', 'MembersController@updateStatus')->name('members.updateStatus');
	Route::post('members/media', 'MembersController@storeMedia')->name('members.storeMedia');
    Route::post('members/ckmedia', 'MembersController@storeCKEditorImages')->name('members.storeCKEditorImages');
    Route::resource('members', 'MembersController');
});
