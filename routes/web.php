<?php

//Route::redirect('/', '/login');
Route::get('/', 'HomeController@index');
Route::get('search', 'HomeController@search')->name('search');

Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);

// dropdown
Route::get('admin/get_by_country', 'Admin\DropdownController@get_by_country')->name('admin.get_by_country');
Route::get('admin/get_country', 'Admin\DropdownController@get_country')->name('admin.get_country');

//autocomplete
Route::get('admin/memberautocomplete', 'Admin\AutocompleteController@memberautocomplete')->name('admin.memberautocomplete');

Auth::routes(['register' => false]);
// Admin

Route::get('redirect/{driver}', 'SocialAuthController@redirect');
Route::get('callback/{driver}', 'SocialAuthController@callback');
Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('register', 'RegistrationController@store')->name('register');
Route::get('pricing', 'PricingController@index')->name('pricing');
Route::get('pricingselect/{planid}', 'PricingController@redirect');

Route::get('invoice','InvoiceController@index')->name('invoice');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth','active_user', 'twofactor']], function () {
    Route::get('/', 'AdminController@index')->name('home');
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
    //Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
    //Route::resource('events', 'EventsController');
	//Route::post('events/ajaxUpdate', 'EventsController@ajaxUpdate')->name('events.ajaxUpdate');
	
	Route::delete('appointments/destroy', 'AppointmentsController@massDestroy')->name('appointments.massDestroy');
    Route::resource('appointments', 'AppointmentsController');
	Route::post('appointments/ajaxUpdate', 'AppointmentsController@ajaxUpdate')->name('appointments.ajaxUpdate');
	Route::post('appointments/updateStatus', 'AppointmentsController@updateStatus')->name('appointments.updateStatus');
	
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
	Route::get('orders/invoice/{invoice_id}', 'OrdersController@invoice')->name('orders.invoice');
	
	// Transactions
    Route::delete('transactions/destroy', 'TransactionsController@massDestroy')->name('transactions.massDestroy');
    Route::resource('transactions', 'TransactionsController');
	
	//members
	Route::delete('members/destroy', 'MembersController@massDestroy')->name('members.massDestroy');
	Route::post('members/updateStatus', 'MembersController@updateStatus')->name('members.updateStatus');
	Route::post('members/media', 'MembersController@storeMedia')->name('members.storeMedia');
    Route::post('members/ckmedia', 'MembersController@storeCKEditorImages')->name('members.storeCKEditorImages');
    Route::resource('members', 'MembersController');
	
	 // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::resource('services', 'ServicesController');
	
	// Clients
    Route::delete('clients/destroy', 'ClientsController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientsController');
	
	// Contact
    Route::delete('contacts/destroy', 'ContactsController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactsController');
	Route::get('contactimport', 'ContactsController@getImport')->name('contacts.contactimport');
	Route::post('contact_import_parse', 'ContactsController@parseImport')->name('contacts.contact_import_parse');
	
	//import
	//Route::get('import', 'ImportController@getImport')->name('import');
	//Route::post('import_parse', 'ImportController@parseImport')->name('import_parse');
	//Route::post('import_process', 'ImportController@processImport')->name('import_process');
});

Route::group(['namespace' => 'Member'] , function(){
  Route::get('member/login', 'Auth\MemberLoginController@showLoginForm')->name('member.login');
  Route::post('member/login', 'Auth\MemberLoginController@login')->name('member.login.post');
  Route::post('member/logout', 'Auth\MemberLoginController@logout')->name('member.logout');
  Route::get('member', 'HomeController@index')->name('member.home');
});

