<?php

use App\Http\Controllers\AuthController;

Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/show', 'HomeController@show')->name('show');

/** job listing routes */
Route::get('/add-listing', 'HomeController@addListing')->name('addlisting')->middleware('auth');
Route::post('/store-listing', 'HomeController@storeListing')->name('storelisting')->middleware('auth');
Route::get('/get-listing/{userid}', 'HomeController@getListing')->name('getlisting')->middleware('auth');

/** Show listing routes */
Route::get('/show-listing/{listingType}/{listingid}', 'HomeController@showListing')->name('showlisting')->middleware('auth');

/** Profile routes */
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');

Route::get('search', 'HomeController@search')->name('search');
Route::resource('jobs', 'JobController')->only(['index', 'show']);
Route::get('category/{category}', 'CategoryController@show')->name('categories.show');
Route::get('location/{location}', 'LocationController@show')->name('locations.show');

/** Frontend login register */
Route::post('frontend/login', [AuthController::class, 'login'])->name('frontend.login');
Route::post('frontend/register', [AuthController::class, 'register'])->name('frontend.register');
Route::get('frontend/logout', [AuthController::class, 'logout'])->name('frontend.logout');



/**
 * ==============================================================
 * Backend routes
 * ==============================================================
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');

    // Locations
    Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationsController');

    // Companies
    Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
    Route::resource('companies', 'CompaniesController');

    // Jobs
    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::resource('jobs', 'JobsController');

    // Menu builder
    Route::get('/menu-builder', 'MenuBuilderController')->name('menu-builder.index');

    // Service
    Route::delete('service/destroy', 'ServiceController@massDestroy')->name('service.massDestroy');
    Route::post('service/media', 'ServiceController@storeMedia')->name('service.storeMedia');
    Route::resource('/service', 'ServiceController');

    // Service
    Route::delete('person/destroy', 'SkilledPersonController@massDestroy')->name('person.massDestroy');
    Route::post('person/media', 'SkilledPersonController@storeMedia')->name('person.storeMedia');
    Route::resource('/person', 'SkilledPersonController');

});
