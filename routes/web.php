<?php

use App\Http\Controllers\BrandProfileController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CreateLeadController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FollowupController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\MastersAddUsersController;
use App\Http\Controllers\MastersAllBusinessController;
use App\Http\Controllers\MastersAllCityController;
use App\Http\Controllers\MastersAllDepartmentsController;
use App\Http\Controllers\MastersAllIndustryController;
use App\Http\Controllers\MastersAllLeadSourceController;
use App\Http\Controllers\MastersAllObServiceController;
use App\Http\Controllers\MastersAllStageController;
use App\Http\Controllers\OpportunitiesController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\RequirementsMapController;
use App\Http\Controllers\StageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





// Outside the Auth

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('test', 'site.custom.mail');
Route::get('fetchcustomer', [CreateLeadController::class, 'Fetchcustomer']);
Route::put('update-lead/{id}', [LeadsController::class, 'Update_Lead'])->name('update_lead');
Route::post('/stage_status', [LeadsController::class, 'Update_stage_status'])->name('stage_status');
Route::post('/change_status', [LeadsController::class, 'Update_status'])->name('change_status');




Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//1. retailbdhead

Route::group(['prefix' => 'retailbdhead', 'middleware' => ['IsRetailBdHead', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [DashboardController::class, 'RetailBdHead'])->name('retailbdhead.dashboard');
    Route::post('followupshow', [LeadsController::class, 'Store']);
    Route::post('existingupdate', [LeadsController::class, 'Update']);

    Route::get('brandshow', [BrandProfileController::class, 'BrandShow']);
    Route::get('contactsshow', [ContactsController::class, 'ContactsShow']);
    Route::get('leadsshow', [LeadsController::class, 'LeadsShow']);
    Route::get('opportunitiesshow', [OpportunitiesController::class, 'OpportunitiesShow']);
    Route::get('reportsshow', [ReportsController::class, 'ReportsShow']);
    // Masters
    Route::get('addusersshow', [MastersAddUsersController::class, 'AddUsersShow']);

    // Custom
    Route::get('createleadshow', [CreateLeadController::class, 'CreateLeadShow']);
    Route::get('followupshow/{id}', [FollowupController::class, 'FollowupShow']);
    Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);
    // Route::post('sendhtmlemail', [FollowupController::class, 'email']);   // Mail
    Route::post('/savefollowup', [FollowupController::class, 'SaveFollowup']);   // Mail
});





//2. iplbdhead

Route::group(['prefix' => 'iplbdhead', 'middleware' => ['IsIplBdHead', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [DashboardController::class, 'IplBdHead'])->name('iplbdhead.dashboard');
    Route::post('followupshow', [LeadsController::class, 'Store']);
    Route::post('existingupdate', [LeadsController::class, 'Update']);

    Route::get('brandshow', [BrandProfileController::class, 'BrandShow']);
    Route::get('contactsshow', [ContactsController::class, 'ContactsShow']);
    Route::get('leadsshow', [LeadsController::class, 'LeadsShow']);
    Route::get('opportunitiesshow', [OpportunitiesController::class, 'OpportunitiesShow']);
    Route::get('reportsshow', [ReportsController::class, 'ReportsShow']);
    // Masters
    Route::get('addusersshow', [MastersAddUsersController::class, 'AddUsersShow']);


    // Custom
    Route::get('createleadshow', [CreateLeadController::class, 'CreateLeadShow']);
    Route::get('followupshow/{id}', [FollowupController::class, 'FollowupShow']);
    Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);
    // Route::post('sendhtmlemail', [FollowupController::class, 'email']);   // Mail
    Route::post('savefollowup', [FollowupController::class, 'SaveFollowup']);   // Mail
});





//3. techbdhead

Route::group(['prefix' => 'techbdhead', 'middleware' => ['IsTechBdHead', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [DashboardController::class, 'TechBdHead'])->name('techbdhead.dashboard');
    Route::post('followupshow', [LeadsController::class, 'Store']);
    Route::post('existingupdate', [LeadsController::class, 'Update']);

    Route::get('brandshow', [BrandProfileController::class, 'BrandShow']);
    Route::get('contactsshow', [ContactsController::class, 'ContactsShow']);
    Route::get('leadsshow', [LeadsController::class, 'LeadsShow']);
    Route::get('opportunitiesshow', [OpportunitiesController::class, 'OpportunitiesShow']);
    Route::get('reportsshow', [ReportsController::class, 'ReportsShow']);
    // Masters
    Route::get('addusersshow', [MastersAddUsersController::class, 'AddUsersShow']);


    // Custom
    Route::get('createleadshow', [CreateLeadController::class, 'CreateLeadShow']);
    Route::get('followupshow/{id}', [FollowupController::class, 'FollowupShow']);
    Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);

    // Route::post('sendhtmlemail', [FollowupController::class, 'email']);   // Mail
    Route::post('savefollowup', [FollowupController::class, 'SaveFollowup']);   // Mail
});




//4. retailbd

Route::group(['prefix' => 'retailbd', 'middleware' => ['IsRetailBd', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [DashboardController::class, 'RetailBd'])->name('retailbd.dashboard');
    Route::post('followupshow', [LeadsController::class, 'Store']);
    Route::post('existingupdate', [LeadsController::class, 'Update']);

    Route::get('brandshow', [BrandProfileController::class, 'BrandShow']);
    Route::get('contactsshow', [ContactsController::class, 'ContactsShow']);
    Route::get('leadsshow', [LeadsController::class, 'LeadsShow']);
    Route::get('opportunitiesshow', [OpportunitiesController::class, 'OpportunitiesShow']);
    Route::get('reportsshow', [ReportsController::class, 'ReportsShow']);
    // Masters
    Route::get('addusersshow', [MastersAddUsersController::class, 'AddUsersShow']);


    // Custom

    Route::get('createleadshow', [CreateLeadController::class, 'CreateLeadShow']);
    Route::get('followupshow/{id}', [FollowupController::class, 'FollowupShow']);
    Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);
    // Route::post('sendhtmlemail', [FollowupController::class, 'email']);   // Mail
    Route::post('savefollowup', [FollowupController::class, 'SaveFollowup']);   // Mail
});





//5. techbd

Route::group(['prefix' => 'techbd', 'middleware' => ['IsTechBd', 'auth', 'PreventBackHistory']], function () {

    Route::get('dashboard', [DashboardController::class, 'TechBd'])->name('dashboard');
    Route::post('followupshow', [LeadsController::class, 'Store']);
    Route::post('existingupdate', [LeadsController::class, 'Update']);

    Route::get('brandshow', [BrandProfileController::class, 'BrandShow']);
    Route::get('contactsshow', [ContactsController::class, 'ContactsShow']);
    Route::get('leadsshow', [LeadsController::class, 'LeadsShow']);
    Route::get('opportunitiesshow', [OpportunitiesController::class, 'OpportunitiesShow']);
    Route::get('reportsshow', [ReportsController::class, 'ReportsShow']);
    // Masters
    Route::get('addusersshow', [MastersAddUsersController::class, 'AddUsersShow']);


    // Custom

    Route::get('createleadshow', [CreateLeadController::class, 'CreateLeadShow']);

    Route::get('followupshow/{id}', [FollowupController::class, 'FollowupShow']);
    Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);

    // Route::post('sendhtmlemail', [FollowupController::class, 'email']);   // Mail
    Route::post('savefollowup', [FollowupController::class, 'SaveFollowup']);   // Mail
});




//6. Admin

Route::group(['prefix' => 'admin', 'middleware' => ['IsAdmin', 'auth']], function () {

    Route::get('dashboard', [DashboardController::class, 'Admin'])->name('admin.dashboard');





    // Masters
    Route::get('addusersshow', [MastersAddUsersController::class, 'AddUsersShow']);
    Route::post('saveuser', [MastersAddUsersController::class, 'saveUser']);
    Route::get('allbusinessshow', [MastersAllBusinessController::class, 'AllBusinessShow']);
    Route::get('allcityshow', [MastersAllCityController::class, 'AllCityShow']);
    Route::get('alldepartmentsshow', [MastersAllDepartmentsController::class, 'AllDepartmentsShow']);
    Route::get('allindustryshow', [MastersAllIndustryController::class, 'AllIndustryShow']);
    Route::get('allleadsourceshow', [MastersAllLeadSourceController::class, 'AllLeadSourceShow']);
    Route::get('allobserviceshow', [MastersAllObServiceController::class, 'AllObServiceShow']);
    Route::get('allstageshow', [MastersAllStageController::class, 'AllStageShow']);
});









//7. SuperUser

Route::group(['prefix' => 'superuser', 'middleware' => ['IsSuperAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [DashboardController::class, 'SuperAdmin'])->name('superuser.dashboard');
    Route::post('followupshow', [LeadsController::class, 'Store']);
    Route::post('existingupdate', [LeadsController::class, 'Update']);


    Route::get('edit-lead/{id}', [LeadsController::class, 'Edit_Lead']);
    // Route::put('update-lead/{id}', [LeadsController::class, 'Update_Lead'])->name('update_lead');
    Route::get('view_lead', [LeadsController::class, 'getView_Lead'])->name('view_lead');
    Route::get('delete-lead/{id}', [LeadsController::class, 'Delete_Lead']);

    Route::get('brandshow', [BrandProfileController::class, 'BrandShow']);
    Route::get('contactsshow', [ContactsController::class, 'ContactsShow']);
    Route::get('leadsshow', [LeadsController::class, 'LeadsShow'])->name('leads_show');
    Route::get('opportunitiesshow', [OpportunitiesController::class, 'OpportunitiesShow']);
    Route::get('reportsshow', [ReportsController::class, 'ReportsShow']);
    // Masters
    Route::get('addusersshow', [MastersAddUsersController::class, 'AddUsersShow']);
    Route::post('saveuser', [MastersAddUsersController::class, 'saveUser']);
    Route::get('allbusinessshow', [MastersAllBusinessController::class, 'AllBusinessShow']);
    Route::get('allcityshow', [MastersAllCityController::class, 'AllCityShow']);
    Route::get('alldepartmentsshow', [MastersAllDepartmentsController::class, 'AllDepartmentsShow']);
    Route::get('allindustryshow', [MastersAllIndustryController::class, 'AllIndustryShow']);
    Route::get('allleadsourceshow', [MastersAllLeadSourceController::class, 'AllLeadSourceShow']);
    Route::get('allobserviceshow', [MastersAllObServiceController::class, 'AllObServiceShow']);
    Route::get('allstageshow', [MastersAllStageController::class, 'AllStageShow']);

    // Custom

    Route::get('createleadshow', [CreateLeadController::class, 'CreateLeadShow']);

    Route::get('followupshow/{id}', [FollowupController::class, 'FollowupShow']);
    Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);

    // Route::post('sendhtmlemail', [FollowupController::class, 'email']);   // Mail
    Route::post('savefollowup', [FollowupController::class, 'SaveFollowup']);   // Mail
});







//8.IplBd

Route::group(['prefix' => 'iplbd', 'middleware' => ['IsIplBd', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [DashboardController::class, 'IplBd'])->name('iplbd.dashboard');
    Route::post('followupshow', [LeadsController::class, 'Store']);
    Route::post('existingupdate', [LeadsController::class, 'Update']);

    Route::get('brandshow', [BrandProfileController::class, 'BrandShow']);
    Route::get('contactsshow', [ContactsController::class, 'ContactsShow']);
    Route::get('leadsshow', [LeadsController::class, 'LeadsShow']);
    Route::get('opportunitiesshow', [OpportunitiesController::class, 'OpportunitiesShow']);
    Route::get('reportsshow', [ReportsController::class, 'ReportsShow']);
    // Masters
    Route::get('addusersshow', [MastersAddUsersController::class, 'AddUsersShow']);


    // Custom

    Route::get('createleadshow', [CreateLeadController::class, 'CreateLeadShow']);

    Route::get('followupshow/{id}', [FollowupController::class, 'FollowupShow']);
    Route::get('requirementsmapshow', [RequirementsMapController::class, 'RequirementsMapShow']);

    // Route::post('sendhtmlemail', [FollowupController::class, 'email']);   // Mail
    Route::post('savefollowup', [FollowupController::class, 'SaveFollowup']);   // Mail
});








Route::group(['middleware' => ['auth']], function () {

    Route::get('/leadsshow', [LeadsController::class, 'LeadsShow'])->name('leadsshow');
    Route::get('/brandshow', [BrandProfileController::class, 'BrandShow']);
    Route::get('/contactsshow', [ContactsController::class, 'ContactsShow']);

    Route::get('/opportunitiesshow', [OpportunitiesController::class, 'OpportunitiesShow']);
    Route::get('/reportsshow', [ReportsController::class, 'ReportsShow']);
    Route::post('/followupshow', [LeadsController::class, 'Store']);
    Route::post('/existingupdate', [LeadsController::class, 'Update']);

    Route::get('/edit_lead', [LeadsController::class, 'Edit_Lead'])->name('edit_lead');
    // Route::put('update-lead/{id}', [LeadsController::class, 'Update_Lead'])->name('update_lead');

    Route::get('/view_lead/{id}', [LeadsController::class, 'getView_Lead'])->name('view_lead');

    Route::get('/delete-lead/{id}', [LeadsController::class, 'Delete_Lead']);

    Route::get('/followupdone', [LeadsController::class, 'Followup_Done']);


    Route::get('/createleadshow', [CreateLeadController::class, 'CreateLeadShow']);

    Route::get('/followupshow/{id}', [FollowupController::class, 'FollowupShow']);
    Route::get('/requirementsmapshow', [LeadsController::class, 'RequirementsMapShow']);


    Route::post('/saverequirementsmap', [LeadsController::class, 'SaveRequirementsMap']);



    Route::post('/view_lead/savefollowup', [FollowupController::class, 'SaveFollowup'])->name('savefollow');




    // helper
    Route::get('leadlogdata', [LeadsController::class, 'AccessLeadLogger']);
});
