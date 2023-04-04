eb
<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\komponenPakController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\LampiranController;
use \App\Http\Controllers\UnsurPendidikanPengajaranController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('/layouts/main');
// });

Route::get('/', function () {
    return view('/auth/login');
});


Route::get('/home', function () {
    return view('.home');
});

Auth::routes();

Route::get('/layouts/main', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('auth_port');


Route::get('/pak', [App\Http\Controllers\GuestController::class, 'index']);

Route::get('/homeuser', [App\Http\Controllers\UserController::class, 'index'])->name('user.home');
Route::get('/homeuser2', [App\Http\Controllers\UserController::class, 'index2'])->name('namasa');
Route::get('/userpak', [App\Http\Controllers\UserController::class, 'halamanpak']);




Route::resource('komponenpak', App\Http\Controllers\komponenPakController::class)->middleware('auth_port');


Route::get('/filelampiran', [App\Http\Controllers\LampiranController::class, 'index']);
Route::resource('lampiran', App\Http\Controllers\LampiranController::class);
Route::resource('userjabatan', App\Http\Controllers\UserjabatanController::class);
Route::resource('perhitungan', App\Http\Controllers\AkumulasiPerhitunganController::class);

//Pendidikan dan Pengajaran
Route::resource('unsurpdp', App\Http\Controllers\UnsurPendidikanPengajaranController::class);
Route::get('/inputdata', [App\Http\Controllers\UnsurPendidikanPengajaranController::class, 'input'])->name('input');


