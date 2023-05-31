<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

Route::get('/', [LandingController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\LogController::class, 'showLogs']);

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/log/{uid}', [App\Http\Controllers\LogController::class, 'log'])->name('log');

Route::get('/logs', [App\Http\Controllers\DataController::class, 'logView']);

Route::get('/admin/home', [App\Http\Controllers\LogController::class, 'showLogs']);

Route::get('/loggedin', function () {
    return view('/admin/home');
})->name('loggedin');

Route::middleware(['admin.auth'])->group(function () {
    return view('admin/dashboard');
});
