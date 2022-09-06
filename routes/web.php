<?php

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



// Akhir Route Auth - login


Auth::routes();

Route::get('/admin/report-asset', [App\Http\Controllers\AssetControllers::class, 'index'])->name('admin.report-asset');
Route::get('/admin/register-asset', [App\Http\Controllers\AssetControllers::class, 'create'])->name('admin.register-asset');
Route::get('/admin/{id}', [App\Http\Controllers\AssetControllers::class, 'destroy'])->name('admin.destroy');



//Admin
Route::get('/admin/{pengguna}/show', [App\Http\Controllers\PenggunaController::class, 'show'])->name('admin.show');
Route::get('/admin/dashboard', [App\Http\Controllers\PenggunaController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/list-pengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('pengguna.index');
Route::get('/admin/create-pengguna', [App\Http\Controllers\PenggunaController::class, 'create'])->name('pengguna.create');

// Asset





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