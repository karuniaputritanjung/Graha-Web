<?php

use App\Helpers\Cart;
use Illuminate\Support\Facades\Route;


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
    return view('dashboard');
});

//Blok
Route::get('/Blok/index', 'App\Http\Controllers\BlokController@index');
Route::get('/Blok/Detail/{nama_blok}', 'App\Http\Controllers\BlokController@show');
Route::get('/Blok/Delete/{nama_blok}', 'App\Http\Controllers\BlokController@destroy');
Route::get('/Blok/Tambah', 'App\Http\Controllers\BlokController@create');
Route::post('/Blok/Upload', 'App\Http\Controllers\BlokController@store');
Route::get('/Blok/Edit/{nama_blok}', 'App\Http\Controllers\BlokController@edit');
Route::patch('/Blok/Update/{nama_blok}', 'App\Http\Controllers\BlokController@update');

//Tipe
Route::get('/Type/index', 'App\Http\Controllers\TypeController@index');
Route::get('/Type/Detail/{id_tipe}', 'App\Http\Controllers\TypeController@show');
Route::get('/Type/Delete/{id_tipe}', 'App\Http\Controllers\TypeController@destroy');
Route::get('/Type/Tambah', 'App\Http\Controllers\TypeController@create');
Route::post('/Type/Upload', 'App\Http\Controllers\TypeController@store');
Route::get('/Type/Edit/{id_tipe}', 'App\Http\Controllers\TypeController@edit');
Route::patch('/Type/Update/{id_tipe}', 'App\Http\Controllers\TypeController@update');

//Notaris
Route::get('/Notaris/index', 'App\Http\Controllers\NotarisController@index');
Route::get('/Notaris/Detail/{id_tipe}', 'App\Http\Controllers\NotarisController@show');
Route::get('/Notaris/Delete/{id_tipe}', 'App\Http\Controllers\NotarisController@destroy');
Route::get('/Notaris/Tambah', 'App\Http\Controllers\NotarisController@create');
Route::post('/Notaris/Upload', 'App\Http\Controllers\NotarisController@store');
Route::get('/Notaris/Edit/{id_tipe}', 'App\Http\Controllers\NotarisController@edit');
Route::patch('/Notaris/Update/{id_tipe}', 'App\Http\Controllers\NotarisController@update');

//Unit
Route::get('/Unit/index', 'App\Http\Controllers\UnitController@index');
Route::get('/Unit/Detail/{id_tipe}', 'App\Http\Controllers\UnitController@show');
Route::get('/Unit/Delete/{id_tipe}', 'App\Http\Controllers\UnitController@destroy');
Route::get('/Unit/Tambah', 'App\Http\Controllers\UnitController@create');
Route::post('/Unit/Upload', 'App\Http\Controllers\UnitController@store');
Route::get('/Unit/Edit/{id_tipe}', 'App\Http\Controllers\UnitController@edit');
Route::patch('/Unit/Update/{id_tipe}', 'App\Http\Controllers\UnitController@update');

//Transaksi
Route::get('/Market/index', 'App\Http\Controllers\ProductController@index');
Route::post('/Market/Add/{id}', 'App\Http\Controllers\ProductController@store');
Route::get('/Market/Delete/{id}', 'App\Http\Controllers\ProductController@destroy');
Route::post('/Market/Wish/{id}', 'App\Http\Controllers\ProductController@Wish');
Route::delete('/Market/Hapus/{id}', 'App\Http\Controllers\ProductController@hapus');
Route::patch('/Market/Move/{id}', 'App\Http\Controllers\ProductController@move');

//Checkout
Route::post('/Market/Checkout', 'App\Http\Controllers\CheckoutController@store');
Route::post('/Market/PushCheckout/{id}', 'App\Http\Controllers\CheckoutController@submit');
