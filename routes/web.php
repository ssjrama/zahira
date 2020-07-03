<?php

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
    return view('welcome');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index');
Route::get('/admin', function(){
    // return view('admin.index');
    return redirect('/barang');
})->name('home');
Route::resource('/barang', 'BarangController')->middleware('auth');
Route::resource('/keuangan', 'KeuanganController')->middleware('auth');
Route::resource('/supplier', 'SupplierController')->middleware('auth');