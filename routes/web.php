<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home', function() {
    return redirect()->route('home.index');
});

Route::get('/results', [SearchController::class, 'show'])->name('search.show');

Route::middleware('auth')->group(function () {
    Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
    Route::post('/video/create', [VideoController::class, 'store']);

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');

    // Admin auth
    Route::get('admin', function () {
        return redirect()->route('users.index');
    });

    Route::resource('admin/users', AdminUserController::class)->except([
        'edit'
    ]);
});