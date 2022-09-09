<?php


use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\SiswaControllers;
use App\Http\Controllers\AssetControllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::resource('sisw',SiswaControllers::class);

Route::get('/', function(){
    return view('auth.login');
});

Route::get('/login', function(){
    return view('auth.login');
});

Auth::routes();

Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Admin
Route::get('/admin/{pengguna}/show', [App\Http\Controllers\PenggunaController::class, 'show'])->name('admin.show');
Route::get('/admin/dashboard', [App\Http\Controllers\PenggunaController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/list-pengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('pengguna.index');
Route::get('/admin/create-pengguna', [App\Http\Controllers\PenggunaController::class, 'create'])->name('pengguna.create');
Route::get('/admin/asset-report', [App\Http\Controllers\AssetControllers::class, 'assetReport'])->name('admin.asset-report');
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
Route::get('/admin/request-asset', [App\Http\Controllers\AssetControllers::class, 'createRequestAsset'])->name('admin.request-asset');


// Route::get('/admin/create-maintenance-asset', [App\Http\Controllers\AssetControllers::class, 'createMaintenanceAsset'])->name('admin.create-maintenance-asset');
// Route::get('/asset/create', [App\Http\Controllers\AssetControllers::class, 'create'])->name('asset.create');
// Route::post('/asset/store', [App\Http\Controllers\AssetControllers::class, 'store'])->name('asset.store');
// Route::get('/asset/{asset}/edit', [App\Http\Controllers\AssetControllers::class, 'edit'])->name('asset.edit');
// Route::match(['put', 'patch'],'/asset/{id}', [App\Http\Controllers\AssetControllers::class, 'update'])->name('asset.update');
// Route::post('/asset/{id}', [App\Http\Controllers\AssetControllers::class, 'destroy'])->name('asset.destroy');
// Route::get('/asset/{asset}', [App\Http\Controllers\AssetControllers::class, 'show'])->name('asset.show');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
