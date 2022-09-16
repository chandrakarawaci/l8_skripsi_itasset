<?php


use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\SiswaControllers;
use App\Http\Controllers\AssetControllers;
use App\Http\Controllers\AuditAssetController;
use App\Http\Controllers\ReportAssetController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RequestAssetController;
use App\Http\Controllers\ReturnAssetController;
use App\Http\Controllers\RequestMaintenanceController;


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

// Route::resource('sisw',SiswaControllers::class);

// Route Auth - login

Route::get('/', function(){
    return view('auth.login');
});

Route::get('/login', function(){
    return view('auth.login');
});

// Akhir Route Auth - login


Auth::routes();

Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Admin
Route::get('/admin/{pengguna}/show', [App\Http\Controllers\PenggunaController::class, 'show'])->name('admin.show');
Route::get('/admin/dashboard', [App\Http\Controllers\PenggunaController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/list-pengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('pengguna.index');
Route::get('/admin/create-pengguna', [App\Http\Controllers\PenggunaController::class, 'create'])->name('pengguna.create');
Route::get('/admin/import-asset-form', [App\Http\Controllers\AssetControllers::class, 'showImportAsetForm'])->name('admin.import-asset-form');
Route::post('/admin/import-asset', [App\Http\Controllers\AssetControllers::class, 'importAset'])->name('admin.import');

// Pengguna
Route::post('/pengguna/store', [App\Http\Controllers\PenggunaController::class, 'store'])->name('pengguna.store');
Route::get('/pengguna/{pengguna}/edit', [App\Http\Controllers\PenggunaController::class, 'edit'])->name('pengguna.edit');
Route::match(['put', 'patch'],'/pengguna/{id}', [App\Http\Controllers\PenggunaController::class, 'update'])->name('pengguna.update');
Route::post('/pengguna/{id}', [App\Http\Controllers\PenggunaController::class, 'destroy'])->name('pengguna.destroy');
Route::get('/pengguna/{pengguna}', [App\Http\Controllers\PenggunaController::class, 'show'])->name('pengguna.show');

// Asset
Route::resource('asset',AssetControllers::class);
// Route::get('/asset/create', [App\Http\Controllers\AssetControllers::class, 'create'])->name('asset.create');
// Route::post('/asset/store', [App\Http\Controllers\AssetControllers::class, 'store'])->name('asset.store');
// Route::get('/asset/{asset}/edit', [App\Http\Controllers\AssetControllers::class, 'edit'])->name('asset.edit');
// Route::match(['put', 'patch'],'/asset/{id}', [App\Http\Controllers\AssetControllers::class, 'update'])->name('asset.update');
// Route::post('/asset/{id}', [App\Http\Controllers\AssetControllers::class, 'destroy'])->name('asset.destroy');
// Route::get('/asset/{asset}', [App\Http\Controllers\AssetControllers::class, 'show'])->name('asset.show');


//Audit Asset
Route::resource('audit_asset',AuditAssetController::class);
Route::get('/admin/report-audit', [App\Http\Controllers\AuditAssetController::class, 'report'])->name('admin.report-audit');

//Report Asset
// Route::resource('report_asset',ReportAssetController::class);

//Request Asset
Route::resource('req_asset',RequestAssetController::class);
Route::get('/admin/report-request', [App\Http\Controllers\RequestAssetController::class, 'showRequest'])->name('admin.report-request');

//Return Asset
Route::resource('return_asset',ReturnAssetController::class);
Route::get('/admin/report-return', [App\Http\Controllers\ReturnAssetController::class, 'showReturn'])->name('admin.report-return');

//Maintenance Asset
Route::resource('maintenance_asset',RequestMaintenanceController::class);
Route::get('/admin/report-maintenance', [App\Http\Controllers\RequestMaintenanceController::class, 'showMaintenance'])->name('admin.report-maintenance');