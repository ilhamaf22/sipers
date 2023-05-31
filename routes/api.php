<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\APIAlat;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/store', [APIAlat::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('logs', 'App\Http\Controllers\LogController@get');
Route::post('log', 'App\Http\Controllers\LogController@post');
Route::put('log/{id}', 'App\Http\Controllers\LogController@put');
Route::delete('log/{id}', 'App\Http\Controllers\LogController@delete');
// Route::get('/logs', [App\Http\Controllers\LogController::class, 'LogController'])->name('get');
// Route::post('/log', [App\Http\Controllers\LogController::class, 'LogController'])->name('post');
// Route::put('/log/{id}', [App\Http\Controllers\LogController::class, 'LogController'])->name('put');
// Route::delete('/log{id}', [App\Http\Controllers\LogController::class, 'LogController'])->name('delete');
Route::post('/masuk', 'DataController@receiveData');
