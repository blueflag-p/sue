<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/', function () {
        return view('dashboard.dashboard.blank-page');
    });
    Route::get('/home', function () {
        return view('dashboard.dashboard.blank-page');
    });

    // Route::get('/home', 'HomeController@index')->name('home');

    // Child Routes
    Route::get('/child', [
        'uses' => 'ChildController@index',
        'as' => 'child'
    ]);
    Route::get('/child/create', [
        'uses' => 'ChildController@create',
        'as' => 'child.create'
    ]);
    Route::post('/child/store', [
        'uses' => 'ChildController@store',
        'as' => 'child.store'
    ]);
    Route::get('child/edit/{id}', [
        'uses' => 'ChildController@edit',
        'as' => 'child.edit'
    ]);
    Route::post('child/update/{id}', [
        'uses' => 'ChildController@update',
        'as' => 'child.update'
    ]);

    // Location Routes
    Route::get('/location', [
        'uses' => 'LocationController@index',
        'as' => 'location'
    ]);
    Route::get('/location/create', [
        'uses' => 'LocationController@create',
        'as' => 'location.create'
    ]);
    Route::post('/location/store', [
        'uses' => 'LocationController@store',
        'as' => 'location.store'
    ]);
    Route::get('location/edit/{id}', [
        'uses' => 'LocationController@edit',
        'as' => 'location.edit'
    ]);
    Route::post('location/update/{id}', [
        'uses' => 'LocationController@update',
        'as' => 'location.update'
    ]);

    // Professional Company Routes
    Route::get('/professional-company', [
        'uses' => 'ProfessionalCompanyController@index',
        'as' => 'professional.company'
    ]);
    Route::get('/professional-company/create', [
        'uses' => 'ProfessionalCompanyController@create',
        'as' => 'professional.company.create'
    ]);
    Route::post('/professional-company/store', [
        'uses' => 'ProfessionalCompanyController@store',
        'as' => 'professional.company.store'
    ]);
    Route::get('professional-company/edit/{id}', [
        'uses' => 'ProfessionalCompanyController@edit',
        'as' => 'professional.company.edit'
    ]);
    Route::post('professional-company/update/{id}', [
        'uses' => 'ProfessionalCompanyController@update',
        'as' => 'professional.company.update'
    ]);

    // Professional Routes
    Route::get('/professional', [
        'uses' => 'ProfessionalController@index',
        'as' => 'professional'
    ]);
    Route::get('/professional/create', [
        'uses' => 'ProfessionalController@create',
        'as' => 'professional.create'
    ]);
    Route::post('/professional/store', [
        'uses' => 'ProfessionalController@store',
        'as' => 'professional.store'
    ]);

    // Staff Routes
    Route::get('/staff', [
        'uses' => 'StaffController@index',
        'as' => 'staff'
    ]);
    Route::get('/staff/create', [
        'uses' => 'StaffController@create',
        'as' => 'staff.create'
    ]);
    Route::post('/staff/store', [
        'uses' => 'StaffController@store',
        'as' => 'staff.store'
    ]);
    Route::get('/staff/store/edit/{id}', [
        'uses' => 'StaffController@edit',
        'as' => 'staff.edit'
    ]);
    Route::post('/staff/store/update/{id}', [
        'uses' => 'StaffController@update',
        'as' => 'staff.update'
    ]);

    // Company Routes
    Route::get('/admin/company', [
        'uses' => 'Admin\CompanyController@index',
        'as' => 'company'
    ]);
    Route::get('/admin/company/create', [
        'uses' => 'Admin\CompanyController@create',
        'as' => 'company.create'
    ]);
    Route::post('/admin/company/store', [
        'uses' => 'Admin\CompanyController@store',
        'as' => 'company.store'
    ]);
  
    // Owner Routes
    Route::get('/admin/owner', [
        'uses' => 'Admin\OwnerController@index',
        'as' => 'owner'
    ]);
    Route::get('/admin/owner/create', [
        'uses' => 'Admin\OwnerController@create',
        'as' => 'owner.create'
    ]);
    Route::post('/admin/owner/store', [
        'uses' => 'Admin\OwnerController@store',
        'as' => 'owner.store'
    ]);
    Route::get('/admin/owner/edit/{id}', [
        'uses' => 'Admin\OwnerController@edit',
        'as' => 'owner.edit'
    ]);
    Route::post('/admin/owner/update/{id}', [
        'uses' => 'Admin\OwnerController@update',
        'as' => 'owner.update'
    ]);


    // Admin Assign Forms Routes
    Route::get('/admin/assign-child', [
        'uses' => 'Admin\AssignController@index',
        'as' => 'admin.assign.child'
    ]);


    
});