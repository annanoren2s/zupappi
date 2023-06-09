<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CredentialController;
use App\Http\Controllers\PermissionController;

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
    return view('front.appeal');
});

Route::get('/authorize', function () {
    return view('front.authorize');
});


Route::get('/processing', function () {
    return view('front.processing');
});


Route::get('/welcome', function () {
    return view('main-index');
});

// Route::get('/authenticate', function() {
//     return view('authenticate');
// });

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return redirect()->route('credentials.index');
    })
    ->name('dashboard');

Route::prefix('/')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('credentials', CredentialController::class);

        Route::put('credentials/read/{credential}', [CredentialController::class, 'markAsRead'])->name('credentials.read');
    });
