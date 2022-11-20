<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::group(['middleware' => ['auth', 'checkrole:superadmin']], function () {
    Route::get('/superadmin_dashboard', [App\Http\Controllers\schoolhelpadmin\DashboardController::class, 'index'])->name('superadmin_dashboard');
    Route::get('/superadmin_addschool', [App\Http\Controllers\schoolhelpadmin\AddSchoolController::class, 'index'])->name('superadmin_addschool');
    Route::post('/superadmin_addschool', [App\Http\Controllers\schoolhelpadmin\AddSchoolController::class, 'addSchool'])->name('superadmin_addschool');
});


Route::group(['middleware' => ['auth', 'checkrole:schooladmin']], function () {
    Route::get('/schooladmin_dashboard', [App\Http\Controllers\schooladmin\DashboardController::class, 'index'])->name('schooladmin_dashboard');
});


Route::group(['middleware' => ['auth', 'checkrole:volunteer']], function () {
    Route::get('/dashboard', [App\Http\Controllers\volunteer\DashboardController::class, 'index'])->name('volunteer_dashboard');
});