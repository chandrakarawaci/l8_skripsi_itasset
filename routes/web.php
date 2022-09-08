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
Route::get('/asset/create', [App\Http\Controllers\AssetControllers::class, 'create'])->name('asset.create');
Route::post('/asset/store', [App\Http\Controllers\AssetControllers::class, 'store'])->name('asset.store');
Route::get('/asset/{asset}/edit', [App\Http\Controllers\AssetControllers::class, 'edit'])->name('asset.edit');
Route::match(['put', 'patch'],'/asset/{id}', [App\Http\Controllers\AssetControllers::class, 'update'])->name('asset.update');
Route::post('/asset/{id}', [App\Http\Controllers\AssetControllers::class, 'destroy'])->name('asset.destroy');
Route::get('/asset/{asset}', [App\Http\Controllers\AssetControllers::class, 'show'])->name('asset.show');





// Route::get('/dashboard', function () {
//     return view('layouts.template');
// });


// // Route CRUD

// Route::get('/crud/create', function(){
//     return view('crud.create');
// });

// Route::get('/crud/index', function(){
//     return view('crud.index');
// });

// // Akhir Route CRUD

// // Route Admin

// // Route::get('/admin/register-asset', function(){
// //     return view('admin.register-asset');
// // });

// Route::get('/admin/import-asset', function(){
//     return view('admin.import-asset');
// });

// /* Route::get('/admin/report-asset', function(){
//     return view('admin.report-asset');
// }); */

// Route::get('/admin/index', function(){
//     return view('admin.index');
// });

// // Route::get('/admin/dashboard', function(){
// //     return view('admin.dashboard');
// // });

// Route::get('/admin/request-asset', function(){
//     return view('admin.request-asset');
// });

// Route::get('/admin/report-request', function(){
//     return view('admin.report-request');
// });

// Route::get('/admin/return-asset', function(){
//     return view('admin.return-asset');
// });

// Route::get('/admin/report-return', function(){
//     return view('admin.report-return');
// });

// Route::get('/admin/request-maintenance', function(){
//     return view('admin.request-maintenance');
// });

// Route::get('/admin/report-maintenance', function(){
//     return view('admin.report-maintenance');
// });

// Route::get('/admin/audit-asset', function(){
//     return view('admin.audit-asset');
// });

// Route::get('/admin/report-audit', function(){
//     return view('admin.report-audit');
// });

// // Akhir Route Admin

// // Route User

// Route::get('/user/create', function(){
//     return view('user.create');
// });

// Route::get('/user/index', function(){
//     return view('user.index');
// });

// Route::get('/user/dashboard', function(){
//     return view('user.dashboard');
// });

// // Akhir Route User

// // Route Manager

// Route::get('/manager/create', function(){
//     return view('manager.create');
// });

// Route::get('/manager/index', function(){
//     return view('manager.index');
// });

// Akhir Route Manager

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
