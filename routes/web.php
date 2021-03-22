<?php

use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicalOfficersController;

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

// clients page routes
Route::get('/', [ClientsController::class, 'index']);
Route::get('/about', [ClientsController::class, 'about']);

//Admin routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

//Admin/medical-officer routes
Route::get('/admin/medical-officer', [AdminController::class, 'indexMedicalOfficer']);
Route::get('/admin/medical-officer/create', [AdminController::class, 'createMedicalOfficer']);
//need ste id aki na route kase single view ste
Route::get('/admin/medical-officer/view', [AdminController::class, 'viewMedicalOfficer']);

//Admin/client routes
//need ste id aki na route kase single view ste
Route::get('/admin/client/', [AdminController::class, 'indexClient']);
Route::get('/admin/client/view', [AdminController::class, 'viewClient']);

//Admin/Archives routes
//need ste id aki na route kase single view ste
Route::get('/admin/archives', [AdminController::class, 'indexArchives']);

//Medical officers Routes
Route::get('/medical-officer/dashboard', [MedicalOfficersController::class, 'dashboard']);

//Medical-officers/client routes
Route::get('/medical-officer/client', [MedicalOfficersController::class, 'indexClient']);
Route::get('/medical-officer/client/view', [MedicalOfficersController::class, 'viewClient']);

//Medical-officers/history routes
Route::get('/medical-officer/transaction-history', [MedicalOfficersController::class, 'indexHistory']);
Route::get('/medical-officer/transaction-history/view', [MedicalOfficersController::class, 'viewHistory']);

//Medical-officers/profile routes
//need mo din id dito kay single view and update to sila 
Route::get('/medical-officer/profile/', [MedicalOfficersController::class, 'indexProfile']);
Route::get('/medical-officer/profile/update', [MedicalOfficersController::class, 'updateProfile']);

