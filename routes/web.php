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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [
    'uses' => 'WelcomeController@index',
    'as' => 'welcome_page'
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::group(['middleware' => ['auth', 'checkrole:superadmin']], function () {
    Route::get('/superadmin_dashboard', [App\Http\Controllers\schoolhelpadmin\DashboardController::class, 'index'])->name('superadmin_dashboard');
    Route::get('/superadmin_addschool', [App\Http\Controllers\schoolhelpadmin\AddSchoolController::class, 'index'])->name('superadmin_addschool');
    Route::get('/superadmin_addschooladmin', [App\Http\Controllers\schoolhelpadmin\AddSchoolAdminController::class, 'index'])->name('superadmin_addschooladmin');

    Route::post('/superadmin_addschool', [App\Http\Controllers\schoolhelpadmin\AddSchoolController::class, 'addSchool'])->name('superadmin_addschool');
    Route::post('/superadmin_addschooladmin', [App\Http\Controllers\schoolhelpadmin\AddSchoolAdminController::class, 'addSchoolAdmin'])->name('superadmin_addschooladmin');
});


Route::group(['middleware' => ['auth', 'checkrole:schooladmin']], function () {
    Route::get('/schooladmin_dashboard', [App\Http\Controllers\schooladmin\DashboardController::class, 'index'])->name('schooladmin_dashboard');
    Route::get('/schooladmin_submitrequest', [App\Http\Controllers\schooladmin\SubmitRequestController::class, 'index'])->name('schooladmin_submitrequest');
    Route::get('/schooladmin_reviewoffers', [App\Http\Controllers\schooladmin\ReviewOffersController::class, 'index'])->name('schooladmin_reviewoffers');
    Route::get('/schooladmin_viewallrequest', [App\Http\Controllers\schooladmin\ViewAllRequestController::class, 'index'])->name('schooladmin_viewallrequest');

    Route::post('/schooladmin_submittutorrequest', [App\Http\Controllers\schooladmin\SubmitRequestController::class, 'storeTutorRequest'])->name('schooladmin_submittutorrequest');
    Route::post('/schooladmin_submitresourceresquest', [App\Http\Controllers\schooladmin\SubmitRequestController::class, 'storeResourceRequest'])->name('schooladmin_submitresourceresquest');
});


Route::group(['middleware' => ['auth', 'checkrole:volunteer']], function () {
    Route::get('/dashboard', [App\Http\Controllers\volunteer\DashboardController::class, 'index'])->name('volunteer_dashboard');
});