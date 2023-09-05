<?php

use App\Models\Kegiatan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftaranKegiatanController;

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

Route::get('/login', function () {
    return view('pages.auth.login');
})->middleware(['guest'])->name('login');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['can:admin'])->group(function () {
        Route::resource('user', UserController::class);
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/user-pendaftaran', [PendaftaranKegiatanController::class, 'index'])->name('user_pendaftaran');
        Route::delete('/user-pendaftaran/destroy/{id}', [PendaftaranKegiatanController::class, 'destroy'])->name('destroy_pendaftaran');
        Route::get('/user-pendaftaran/{id}/edit', [PendaftaranKegiatanController::class, 'edit'])->name('edit_pendaftaran');
        Route::put('/user-pendaftaran/{id}', [PendaftaranKegiatanController::class, 'update'])->name('update_pendaftaran');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
        Route::put('/change-profile-avatar', [DashboardController::class, 'changeAvatar'])->name('change-profile-avatar');
        Route::delete('/remove-profile-avatar', [DashboardController::class, 'removeAvatar'])->name('remove-profile-avatar');
    });

    Route::middleware(['can:user'])->group(function () {
        Route::get('/', [KegiatanController::class, 'index'])->name('index');
        Route::get('/kegiatan/{slug}', [KegiatanController::class, 'show'])->name('kegiatanDetail');
        Route::post('/store/{slug}/{id}', [PendaftaranKegiatanController::class, 'store'])->name('proses_pendaftaran');
    });
});

Route::get('/', [KegiatanController::class, 'index'])->name('index');
Route::get('/kegiatan/{slug}', [KegiatanController::class, 'show'])->name('kegiatanDetail');
