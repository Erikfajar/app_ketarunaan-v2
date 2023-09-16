<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pasalcontroller;
use App\Http\Controllers\T1prestasiController;
use App\Http\Controllers\T2prestasiController;
use App\Http\Controllers\T3prestasiController;
use App\Http\Controllers\T1pelanggaranController;
use App\Http\Controllers\T2pelanggaranController;
use App\Http\Controllers\T3pelanggaranController;

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

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/auth',[AuthController::class, 'auth'])->name('auth');


Route::prefix('dashboard')->middleware('auth')->group(
    function () {
      Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
      Route::resource('Tingkat1-pelanggaran', T1pelanggaranController::class);
      Route::resource('Tingkat2-pelanggaran', T2pelanggaranController::class);
      Route::resource('Tingkat3-pelanggaran', T3pelanggaranController::class);
      Route::resource('Tingkat1-prestasi', T1prestasiController::class);
      Route::resource('Tingkat2-prestasi', T2prestasiController::class);
      Route::resource('Tingkat3-prestasi', T3prestasiController::class);
      Route::resource('pasal', pasalcontroller::class);

      //Eksport dan import pasal

      Route::get('/export-pasal',[pasalcontroller::class, 'export'])->name('export-pasal')->middleware('admin');
      Route::post('/import-pasal',[pasalcontroller::class, 'import'])->name('import-pasal')->middleware('admin');
      Route::get('/register',[AuthController::class, 'register'])->name('register')->middleware('admin');
      Route::post('/register/create',[AuthController::class, 'create'])->name('register/create')->middleware('admin');
    }
  );
  
  Route::get('/logout',[AuthController::class, 'logout'])->name('logout');