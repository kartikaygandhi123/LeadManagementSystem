<?php

use App\Http\Controllers\brandProfileController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\createLeadController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FollowupController;
use App\Http\Controllers\leadsController;
use App\Http\Controllers\mastersAddUsersController;
use App\Http\Controllers\mastersAllBusinessController;
use App\Http\Controllers\mastersAllCityController;
use App\Http\Controllers\mastersAllDepartmentsController;
use App\Http\Controllers\mastersAllIndustryController;
use App\Http\Controllers\mastersAllLeadSourceController;
use App\Http\Controllers\mastersAllObServiceController;
use App\Http\Controllers\mastersAllStageController;
use App\Http\Controllers\opportunitiesController;
use App\Http\Controllers\reportsController;
use App\Http\Controllers\RequirementsMapController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('test', 'site.custom.mail');

// Route::get('dashboard', function () {
//     return view('dashboard');
// });

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {

    Auth::routes();
});






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboardShow'])->name('admin.dashboard');


    Route::post('followupshow', [leadsController::class, 'store']);
    Route::post('demo', [leadsController::class, 'update']);

    Route::get('brandshow', [brandProfileController::class, 'brandShow']);
    Route::get('contactsshow', [contactsController::class, 'contactsShow']);
    Route::get('leadsshow', [leadsController::class, 'leadsShow']);
    Route::get('opportunitiesshow', [opportunitiesController::class, 'opportunitiesShow']);
    Route::get('reportsshow', [reportsController::class, 'reportsShow']);
    // Masters
    Route::get('addusersshow', [mastersAddUsersController::class, 'addUsersShow']);
    Route::get('allbusinessshow', [mastersAllBusinessController::class, 'allBusinessShow']);
    Route::get('allcityshow', [mastersAllCityController::class, 'allCityShow']);
    Route::get('alldepartmentsshow', [mastersAllDepartmentsController::class, 'allDepartmentsShow']);
    Route::get('allindustryshow', [mastersAllIndustryController::class, 'allIndustryShow']);
    Route::get('allleadsourceshow', [mastersAllLeadSourceController::class, 'allLeadSourceShow']);
    Route::get('allobserviceshow', [mastersAllObServiceController::class, 'allObServiceShow']);
    Route::get('allstageshow', [mastersAllStageController::class, 'allStageShow']);

    // Custom

    Route::get('createleadshow', [createLeadController::class, 'createLeadShow']);

    Route::get('fetchcustomer', [createLeadController::class, 'fetchcustomer']);
    Route::get('followupshow/{id}', [FollowupController::class, 'followupShow']);
    Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);

    // Route::post('sendhtmlemail', [FollowupController::class, 'email']);   // Mail
    Route::post('savefollowup', [FollowupController::class, 'saveFollowup']);   // Mail

});

// User Routes

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboardShow'])->name('user.dashboard');

    Route::post('followupshow', [leadsController::class, 'store']);
    Route::post('demo', [leadsController::class, 'update']);

    Route::get('brandshow', [brandProfileController::class, 'brandShow']);
    Route::get('contactsshow', [contactsController::class, 'contactsShow']);
    Route::get('leadsshow', [leadsController::class, 'leadsShow']);
    Route::get('opportunitiesshow', [opportunitiesController::class, 'opportunitiesShow']);
    Route::get('reportsshow', [reportsController::class, 'reportsShow']);
    // Masters
    Route::get('addusersshow', [mastersAddUsersController::class, 'addUsersShow']);
    Route::get('allbusinessshow', [mastersAllBusinessController::class, 'allBusinessShow']);
    Route::get('allcityshow', [mastersAllCityController::class, 'allCityShow']);
    Route::get('alldepartmentsshow', [mastersAllDepartmentsController::class, 'allDepartmentsShow']);
    Route::get('allindustryshow', [mastersAllIndustryController::class, 'allIndustryShow']);
    Route::get('allleadsourceshow', [mastersAllLeadSourceController::class, 'allLeadSourceShow']);
    Route::get('allobserviceshow', [mastersAllObServiceController::class, 'allObServiceShow']);
    Route::get('allstageshow', [mastersAllStageController::class, 'allStageShow']);

    // Custom

    Route::get('createleadshow', [createLeadController::class, 'createLeadShow']);
    Route::get('fetchcustomer', [createLeadController::class, 'fetchcustomer']);
    Route::get('followupshow/{id}', [FollowupController::class, 'followupShow']);
    Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);

    Route::post('sendhtmlemail', [FollowupController::class, 'saveFollowup']);   // Mail
});
