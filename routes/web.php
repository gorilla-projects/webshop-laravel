<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->prefix('admin')->group(function() {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::get('logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');
    Route::resource('users', App\Http\Controllers\Admin\UserController::class)->names('admin.users');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
    Route::get('my-account', [\App\Http\Controllers\MyAccountController::class, 'show'])->name('my-account.show');
    Route::get('orders', [App\Http\Controllers\MyOrderController::class, 'index'])->name('orders.index');
});