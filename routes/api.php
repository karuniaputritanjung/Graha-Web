<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiBlok;
use App\Http\Controllers\ApiType;
use App\Http\Controllers\ApiNotaris;
use App\Http\Controllers\ApiUnit;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::middleware('auth:api')->get('/Blok/index', 'App\Http\Controllers\BlokController@index');
// Route::group(['middleware' => 'auth:api'], function () {
//     Route::get('/Blok/index', 'App\Http\Controllers\BlokController@index');
// });
// Route::get('/Blok/index', 'App\Http\Controllers\BlokController@index');
//Blok
Route::get('/blok', [ApiBlok::class, 'index']);
Route::post('/blok/add', [ApiBlok::class, 'add']);
Route::get('/blok/detail/{id}', [ApiBlok::class, 'show']);
Route::patch('/blok/edit/{id}', [ApiBlok::class, 'edit']);
Route::delete('/blok/delete/{id}', [ApiBlok::class, 'delete']);

//Tipe
Route::get('/tipe', [ApiType::class, 'index']);
Route::post('/tipe/add', [ApiType::class, 'add']);
Route::get('/tipe/detail/{id}', [ApiType::class, 'show']);
Route::patch('/tipe/edit/{id}', [ApiType::class, 'edit']);
Route::delete('/tipe/delete/{id}', [ApiType::class, 'delete']);

//Notaris
Route::get('/notaris', [ApiNotaris::class, 'index']);
Route::post('/notaris/add', [ApiNotaris::class, 'add']);
Route::get('/notaris/detail/{id}', [ApiNotaris::class, 'show']);
Route::patch('/notaris/edit/{id}', [ApiNotaris::class, 'edit']);
Route::delete('/notaris/delete/{id}', [ApiNotaris::class, 'delete']);

//Unit
Route::get('/unit', [ApiUnit::class, 'index']);
Route::post('/unit/add', [ApiUnit::class, 'add']);
Route::get('/unit/detail/{id}', [ApiUnit::class, 'show']);
Route::patch('/unit/edit/{id}', [ApiUnit::class, 'edit']);
Route::delete('/unit/delete/{id}', [ApiUnit::class, 'delete']);

//Transaksi
//Checkout
