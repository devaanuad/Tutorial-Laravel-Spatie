<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Petugas\DashboardController as PetugasDashboardController;
use App\Http\Controllers\Siswa\DashboardController as SiswaDashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Auth\LoginController;
use Spatie\Permission\Contracts\Role;

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');
Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'can:admin_role', 'prefix' => 'admin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    });
    Route::group(['middleware' => 'can:petugas_role', 'prefix' => 'petugas'], function () {
        Route::get('/dashboard', [PetugasDashboardController::class, 'dashboard'])->name('dashboard');
    });
    Route::group(['middleware' => 'can:siswa_role', 'prefix' => 'siswa'], function () {
        Route::get('/dashboard', [SiswaDashboardController::class, 'dashboard'])->name('dashboard');
    });
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});































Route::prefix('others')->group(function () {
    Route::view('400', 'errors.400')->name('error-400');
    Route::view('401', 'errors.401')->name('error-401');
    Route::view('403', 'errors.403')->name('error-403');
    Route::view('404', 'errors.404')->name('error-404');
    Route::view('500', 'errors.500')->name('error-500');
    Route::view('503', 'errors.503')->name('error-503');
});

Route::get('/clear-cache', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
})->name('clear.cache');
