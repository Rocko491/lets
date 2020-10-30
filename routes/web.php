<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminLoginController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/publish_post', [HomeController::class, 'publish_post'])->name('publish_post');

Route::get('/admin', [AdminLoginController::class, 'index']);
Route::post('/admin/login', [AdminLoginController::class, 'admin_login'])->name('admin_login');
Route::get('/admin/dashboard', [AdminLoginController::class, 'dashboard']);
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');

