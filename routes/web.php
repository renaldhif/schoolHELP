<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


// Non Roles Routes
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [App\Http\Controllers\volunteer\AddVolunteerController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\volunteer\AddVolunteerController::class, 'create'])->name('register');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Superadmin Routes
Route::group(['middleware' => ['auth', 'checkrole:superadmin']], function () {
    Route::get('/superadmin_dashboard', [App\Http\Controllers\schoolhelpadmin\DashboardController::class, 'index'])->name('superadmin_dashboard');
    Route::get('/superadmin_addschool', [App\Http\Controllers\schoolhelpadmin\AddSchoolController::class, 'index'])->name('superadmin_addschool');
    Route::get('/superadmin_addschooladmin', [App\Http\Controllers\schoolhelpadmin\AddSchoolAdminController::class, 'index'])->name('superadmin_addschooladmin');

    Route::post('/superadmin_addschool', [App\Http\Controllers\schoolhelpadmin\AddSchoolController::class, 'addSchool'])->name('superadmin_addschool');
    Route::post('/superadmin_addschooladmin', [App\Http\Controllers\schoolhelpadmin\AddSchoolAdminController::class, 'addSchoolAdmin'])->name('superadmin_addschooladmin');
});

// School Admin Routes
Route::group(['middleware' => ['auth', 'checkrole:schooladmin']], function () {
    Route::get('/schooladmin_dashboard', [App\Http\Controllers\schooladmin\DashboardController::class, 'index'])->name('schooladmin_dashboard');
    Route::get('/schooladmin_submitrequest', [App\Http\Controllers\schooladmin\SubmitRequestController::class, 'index'])->name('schooladmin_submitrequest');
    Route::get('/schooladmin_reviewoffers', [App\Http\Controllers\schooladmin\ReviewOffersController::class, 'index'])->name('schooladmin_reviewoffers');
    Route::get('/schooladmin_viewallrequest', [App\Http\Controllers\schooladmin\ViewAllRequestController::class, 'index'])->name('schooladmin_viewallrequest');
    Route::get('/schooladmin_profile', [App\Http\Controllers\schooladmin\ProfileController::class, 'index'])->name('schooladmin_profile');
    Route::post('/schooladmin_profile', [App\Http\Controllers\schooladmin\ProfileController::class, 'editProfile'])->name('schooladmin_editprofile');


    Route::post('/schooladmin_submittutorrequest', [App\Http\Controllers\schooladmin\SubmitRequestController::class, 'storeTutorRequest'])->name('schooladmin_submittutorrequest');
    Route::post('/schooladmin_submitresourceresquest', [App\Http\Controllers\schooladmin\SubmitRequestController::class, 'storeResourceRequest'])->name('schooladmin_submitresourceresquest');
});

// Volunteer Routes
Route::group(['middleware' => ['auth', 'checkrole:volunteer']], function () {
    Route::get('/dashboard', [App\Http\Controllers\volunteer\DashboardController::class, 'index'])->name('volunteer_dashboard');
});