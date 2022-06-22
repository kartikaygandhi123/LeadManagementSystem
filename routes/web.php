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

Route::get('/', function () {
    return view('auth.login');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







// Route::get('dashboard', function () {
//     return view('dashboard');
// });

// Route::group(["prefix" => "/", "middleware" => "super_admin"], function () {

Route::get('dashboard', [DashboardController::class, 'dashboardShow'])->name('dashboard');


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
// Route::get('testform', [createLeadController::class, 'createLeadShow']);
Route::get('fetchcustomer', [createLeadController::class, 'fetchcustomer']);
Route::get('followupshow/{id}', [FollowupController::class, 'followupShow']);
Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);

Route::post('sendhtmlemail', [FollowupController::class, 'email']);   // Mail

// Route::view('testlogin', 'site.testlogin');
// Route::view('testform', 'site.testform');  // testform