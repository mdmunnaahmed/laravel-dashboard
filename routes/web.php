<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SettingController;

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

// Admin All Route
Route::controller(PhotoController::class)->group(function () {
    // Admin Dashboard Routes
    Route::get('admin/dashboard/', 'dashboardIndex')->name('admin.dashboard');

    // Admin Profile Routes
    Route::get('admin/profile/', 'index')->name('admin.profile')->middleware(['auth']);
    Route::get('admin/profile/edit/', 'edit')->name('admin.profile.edit');
    Route::post('admin/profile/', 'update')->name('profile.store');

    // Admin Auth Routes
    Route::post('admin/change/password', 'updatePass')->name('admin.change.pass');
});

// Setting
Route::controller(SettingController::class)->group(function () {
    Route::get('admin/setting/', 'index')->name('admin.setting');
    Route::post('admin/setting/store', 'store')->name('admin.setting.store');
    Route::post('admin/setting/update', 'update')->name('admin.setting.update');
    // Logo & Favicon
    Route::get('admin/setting/logo', 'logoIndex')->name('admin.setting.logo');
    Route::post('admin/setting/logo', 'logoUpload')->name('admin.setting.logo.update');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');







require __DIR__ . '/auth.php';
