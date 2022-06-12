<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Admin Route
Route::controller(PhotoController::class)->group(function () {
    Route::get('admin/profile', 'index')->name('admin.profile')->middleware(['auth']);
    Route::get('admin/profile/edit/', 'edit')->name('admin.profile.edit');
    Route::post('admin/profile/', 'update')->name('profile.store');
});


// Route::get('/profile', function () {
//     return view('admin.profile');
// })->middleware(['auth'])->name('admin.profile');

require __DIR__ . '/auth.php';